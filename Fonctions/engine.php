<?php

    function go(){
        global $list_case;
        global $list_cycliste;
        global $pdo;
        global $room;

        // Mise à jour des positions
        //updatePosition();

        // Les bots joue leur carte
        bot();

        // Deplacement des cycliste
        deplacement();

        // Décalage des cyclistes si besoin
        //placement();

        // Application de l'aspiration
        aspiration();

        // Distribution des fatigues
        fatigue();

        // Mise à jour du classement général
        calculGeneral();

        // Test finish
        testFinish();

        // Calcul Ecart
        calculEcart();

        // set la position
        setPosition();

        // Test fin de partie
        testEnd();

    }



    function updatePosition(){
        global $list_case;
        global $list_cycliste;
        global $pdo;
        global $room;

        global $case_null;

        // On vide toutes les cases
        foreach($list_case as $case){
            $case->clear();
        }

        // Pour chaque Cycliste
        foreach($list_cycliste as $cycliste){

            // Récupération de sa position
            $data = getPosition($pdo, $room, $cycliste->getId());
            $position = $data["numeroCase"];

            // Si le cycliste n'est pas positionnée
            if($position == null){

                // On le positionne selon le classemnt Général
                $clsmt = getClsmtGeneral($pdo, $room);

                $i = 2;
                $tour = 1;
                foreach($clsmt as $e){
                    
                    // Récupération de la case
                    $case = getCase($i);

                    $e_cycliste = getCyclisteById($e["cycliste_id"]);

                    if($tour < $case->getTaille()){
                        $case->addCycliste($e_cycliste);
                        $e_cycliste->setCase($case);
                        $tour++;
                    }
                    else{
                        // Dernière place
                        $case->addCycliste($e_cycliste);
                        $e_cycliste->setCase($case);
                        $tour = 1;
                        $i++;
                    }
                }

            }
            // Si sa position est 0
            elseif($position == 0){

                // Il a terminé, on le remet dans la case des finishers
                $case_null->addCycliste($cycliste);
                $cycliste->setCase($case_null);

            }
            // Si il est placé, on met à jour sa case
            else{

                // Récupération de sa case
                $case = getCase($position);

                // On l'ajoute dans la case
                $case->addCycliste($cycliste);
                $cycliste->setCase($case);

                // Mise à jour si il est chuté
                $chute = $data["chute"];
                if($chute){
                    $cycliste->setChute(true);
                }

                // Test crevaison
                $crevaison = $data["crevaison"];
                if($crevaison){
                    $cycliste->setCrevaison(true);
                }
            }
        }
    }


    function setPosition(){
        global $list_case;
        global $list_cycliste;
        global $pdo;
        global $room;

        global $case_null;

        $nbCase = count($list_case);

        // On parcours les cases à partir de la fin
        $i = $nbCase;
        while($i > 0){

            // Case en cours de traitement
            $case = getCase($i);

            // Pour chaque cycliste de la case
            foreach($case->getCyclistes() as $cycliste){

                if($cycliste->getChute()){
                    $chute = 1;
                }
                else{
                    $chute = 0;
                }

                if($cycliste->getCrevaison()){
                    $crevaison = 1;
                }
                else{
                    $crevaison = 0;
                }

                // On set sa nouvelle position
                setPositionBDD($pdo, $room, $cycliste->getId(), $case->getNumero(), $chute, $crevaison);
            }

            $i--;
        }

        // Test des case null
        foreach($case_null->getCyclistes() as $cycliste){

            // On set sa nouvelle position
            setPositionBDD($pdo, $room, $cycliste->getId(), 0, 0, 0);
        }
    }



    function deplacement(){
        global $list_case;
        global $list_cycliste;
        global $pdo;
        global $room;

        $nbCase = count($list_case);

        // On parcours les cases à partir de la fin
        $i = $nbCase;
        while($i > 0){

            // Case en cours de traitement
            $case = getCase($i);

            // Pour chaque cycliste de la case
            foreach($case->getCyclistes() as $cycliste){

                // On récupère la carte jouée
                $valeur = getValeurCarteJouee($pdo, $room, $cycliste->getId());

                // On récupère la valeur mise à jour selon le terrain
                $valeur = $cycliste->seDeplacer($case, $valeur);

                // On récupère la case d'arrivée
                $case_arrivee = getCase($case->getNumero() + $valeur);

                // On deplace le coureur
                $case->removeCycliste($cycliste);
                $case_arrivee->addCycliste($cycliste);
            }

            $i--;
        }
    }



    function placement(){
        /* Fonction qui placent les cycliste sur la gauche si possible */
        global $list_case;
        global $list_cycliste;
        global $pdo;
        global $room;

        $nbCase = count($list_case);

        // On parcours les cases à partir de la fin
        $i = $nbCase;
        while($i > 0){

            // Case en cours de traitement
            $case = getCase($i);
            $taille = $case->getTaille()-1;

            // Listes des cyclistes à replacer
            $replacement_list = array();
            foreach($case->getCyclistes() as $cycliste){
                array_push($replacement_list, $cycliste);
            }
            
            // On vide la case
            $case->clear();

            // On la re-rempli
            foreach($replacement_list as $cycliste){
                $case->addCycliste($cycliste);
            }

            $i--;
        }
    }



    function aspiration(){
        global $list_case;
        global $list_cycliste;
        global $partie;

        if($partie["meteo_actuel"] != "vent"){

            $nbCase = count($list_case);

            // On parcours les cases à partir du début
            $i = 1;
            while($i < $nbCase){

                // Case en cours de traitement
                $case_actuel = getCase($i);
                // Nombre de cyclistes sur la case
                $nbCyclistes = count($case_actuel->getCyclistes());

                // Si un ou plusieurs cycliste présent sur la case
                if($nbCyclistes > 0){

                    // Test si il n'est pas dans une montee ou sur des paves
                    if(!$case_actuel->testMontee() && !$case_actuel->testPaves()){

                        // Test si personne devant lui
                        if($case_actuel->getNumero() <= count($list_case) - 8 && count(getCase($i+1)->getCyclistes()) == 0){

                            // Test si un cycliste se trouve à 2 case devant
                            if($case_actuel->getNumero() <= count($list_case) - 8 && count(getCase($i+2)->getCyclistes()) > 0){

                                // Test si il n'y a pas de montée ou pavés 2 cases devant
                                if(!getCase($i+2)->testMontee() && !getCase($i+2)->testPaves()){

                                    // On avance les cyclistes présents sur la case de base
                                    foreach($case_actuel->getCyclistes() as $cycliste){
                                        if(!$cycliste->getChute() && !$cycliste->getCrevaison()){
                                            $case_actuel->removeCycliste($cycliste);
                                            $case_arrivee = getCase($i+1);
                                            $case_arrivee->addCycliste($cycliste);
                                        }
                                    }

                                    // Tant qu'il y a des cyclistes derrière
                                    $j = 1;
                                    while(count(getCase($i-$j)->getCyclistes()) > 0){

                                        // Test si il ne sont pas en montée ou sur pavées
                                        if(!getCase($i-$j)->testMontee() && !getCase($i-$j)->testPaves()){

                                            // On avance les cyclistes présents derrière
                                            foreach(getCase($i-$j)->getCyclistes() as $cycliste){
                                                if(!$cycliste->getChute() && !$cycliste->getCrevaison()){
                                                    getCase($i-$j)->removeCycliste($cycliste);
                                                    $case_arrivee = getCase($i-$j+1);
                                                    $case_arrivee->addCycliste($cycliste);
                                                }
                                            }

                                        }

                                        $j++;
                                    }
                                }
                            }
                        }
                    }
                }

                $i++;
            }
        }
    }



    function fatigue(){
        global $list_case;
        global $list_cycliste;
        global $pdo;
        global $room;

        $nbCase = count($list_case) - 10;

        // On parcours les cases à partir de la fin
        $i = $nbCase;
        while($i > 0){

            // Case en cours de traitement
            $case_actuel = getCase($i);
            
            // Test si un cycliste est présent sur la case
            if(count($case_actuel->getCyclistes()) > 0){

                // Test si personne ne se trouve devant lui
                if(count(getCase($i+1)->getCyclistes()) == 0){

                    // On donne une fatigue a chaque cycliste présent sur la case de base
                    foreach($case_actuel->getCyclistes() as $cycliste){
                        if(!$cycliste->getCrevaison()){
                            giveFatigue($pdo, $room, $cycliste->getId());
                        }
                    }

                }
            }

            $i--;
        }
    }



    function calculGeneral(){
        global $list_case;
        global $pdo;
        global $room;

        $nbCase = count($list_case);

        // On parcours les cases à partir du début
        $i = 1;
        while($i < $nbCase){

            // Case en cours de traitement
            $case = getCase($i);
            
            // Test si un cycliste est présent sur la case
            if(count($case->getCyclistes()) > 0){

                // Pour chaque cycliste
                foreach($case->getCyclistes() as $cycliste){
                    // On lui ajoute 1 min au temps général
                    setClsmtGeneral($pdo, $room, $cycliste->getId(), 60);
                }

            }

            $i++;
        }
    }



    function testFinish(){
        global $list_case;
        global $pdo;
        global $room;

        $nbCase = count($list_case);

        // Case null pour les Finishers
        global $case_null;

        // On parcours les cases à partir de la fin
        $i = $nbCase;
        while($i > 0){

            // Case en cours de traitement
            $case = getCase($i);
            
            // Test si c'est une case arrivée
            if($case->testFinish()){

                // Test si des cyclistes sont présent sur la case
                if(count($case->getCyclistes()) > 0){

                    // Pour chaque cycliste
                    foreach($case->getCyclistes() as $cycliste){

                        // On déplace le cycliste vers une case null
                        $case->removeCycliste($cycliste);
                        $case_null->addCycliste($cycliste);

                        // On l'ajoute au classemnt de l'étape
                        setClsmtEtape($pdo, $room, $cycliste->getId());

                        // On attribut les bonifications
                        $pos = getClsmtEtapeByIdCycliste($pdo, $room, $cycliste->getId())["position"];
                        switch($pos){
                            case 1:
                                $bonif = -10;
                                break;
                            case 2:
                                $bonif = -8;
                                break;
                            case 3:
                                $bonif = -6;
                                break;
                            default:
                                $bonif = 0;
                                break;
                        }

                        // On met à jour le classemnt Général
                        setClsmtGeneral($pdo, $room, $cycliste->getId(), $bonif);

                        // Récup clsmt général apres finish
                        $nbToursFin = getClsmtGeneralByCyclisteId($pdo, $room, $cycliste->getId())["nbTours"];

                        // Update avec clsmt général avant
                        updateClsmtEtape($pdo, $room, $cycliste->getId(), $nbToursFin);

                        // On met à jour le classemnt du sprint
                        setClsmtSprintGeneral($pdo, $room, $cycliste->getId(), $pos);

                        // On met à jour le classemennt de la montagne
                        setClsmtMontagneGeneral($pdo, $room, $cycliste->getId());
                    }

                }

            }

            $i--;
        }
    }



    function calculEcart(){
        global $list_case;
        global $pdo;
        global $room;
    
        // On vide la table Ecart
        deleteEcart($pdo, $room);
    
        $nbCase = count($list_case);
        $trouve = false;
        $ecart = 0;
        $num_groupe = 1;

        // On parcours les cases à partir de la fin
        $i = $nbCase;
        while($i > 0){

            // Case en cours de traitement
            $case = getCase($i);

            // Test si il y a un cycliste sur la case
            if(count($case->getCyclistes()) > 0){

                // Liste des cyclistes de la case
                $cyclisteInGroupe = "";
                foreach($case->getCyclistes() as $cycliste){
                    $cyclisteInGroupe .= $cycliste->getId().";";
                }

                if($trouve){
                    // Test si personne ne se trouve devant lui
                    if(count(getCase($i+1)->getCyclistes()) == 0){
                        // Nouveau groupe
                        addEcart($pdo, $room, $num_groupe, $ecart*15, "Temps");
                        $num_groupe++;
                    }
                }
                else{
                    // Tete de course
                    addEcart($pdo, $room, $num_groupe, $nbCase-$i-8, "Distance");
                    $trouve = true;
                    $num_groupe++;
                }

                addGroupeToEcart($pdo, $room, $num_groupe-1, $cyclisteInGroupe);

            }

            if($trouve){
                $ecart++;
            }

            $i--;
        }
    }




    function testEnd(){
        global $pdo;
        global $room;
        global $list_cycliste;
        global $partie;

        if(countClsmtEtape($pdo, $room) == count($list_cycliste)){
            // Fin de l'étape

            // On met l'étape comme fait
            updateEtape($pdo, $room);

        }
    }



    function bot(){
        global $pdo;
        global $room;
        global $list_cycliste;

        $list_bot = array();

        $list_joueur = getJouer($pdo, $room);

        // On détermine la liste des bots
        foreach($list_cycliste as $cycliste){
            $trouve = false;

            foreach($list_joueur as $joueur){

                // Si le cycliste correspond à un vrai joueur
                if($joueur["cycliste_id"] == $cycliste->getId()){
                    $trouve = true;
                    break;
                }

            }

            // Si le cycliste ne correspond à aucun vrai joueur
            if(!$trouve){
                array_push($list_bot, $cycliste);
            }
        }

        // Chaque bot joue une carte
        foreach($list_bot as $bot){

            // Insert une ligne jouer
            setJouer($pdo, $room, $bot->getId());

            // Récupération du deck
            $deck = getDeck($pdo, $room, $bot->getId());

            // On determine son choix selon plusieurs critère

            $choix = null;
            // Si il a terminé
            if($bot->getCase()->getNumero() == 0){
                // Choix random car pas d'importance
                $choix = rand(0,3);
            }
            // Si il est en descente
            elseif($bot->getCase()->testDescente()){
                // Il joue sa plus petite carte
                $min = 100;
                foreach($deck as $key => $carte){
                    if($carte["valeur"] < $min){
                        $min = $carte["valeur"];
                        $choix = $key;
                    }
                }
            }
            // Si il est en montée
            elseif($bot->getCase()->testMontee()){
                // Il joue sa carte la plus forte inférieur ou égale à 5
                $max = -1;
                foreach($deck as $key => $carte){
                    if($carte["valeur"] > $max && $carte["valeur"] <= 5){
                        $max = $carte["valeur"];
                        $choix = $key;
                    }
                }
                // Si c'est pas possible il joue sa carte max
                if($choix == null || $max < 3){
                    foreach($deck as $key => $carte){
                        if($carte["valeur"] > $max){
                            $max = $carte["valeur"];
                            $choix = $key;
                        }
                    }
                }
            }
            // Si il sur le plat avec personne derrière
            elseif($bot->getCase()->testPlat() && count(getCase($bot->getCase()->getNumero()-1)->getCyclistes()) == 0){
                // Il joue sa carte la plus forte
                $max = -1;
                foreach($deck as $key => $carte){
                    if($carte["valeur"] > $max){
                        $max = $carte["valeur"];
                        $choix = $key;
                    }
                }
            }
            // Si il arrive en montée
            elseif(getCase($bot->getCase()->getNumero()+1)->testMontee() || 
            getCase($bot->getCase()->getNumero()+2)->testMontee() || 
            getCase($bot->getCase()->getNumero()+3)->testMontee()){
                // Il joue sa carte la plus forte inférieur ou égale à 5
                $max = -1;
                foreach($deck as $key => $carte){
                    if($carte["valeur"] > $max && $carte["valeur"] <= 5){
                        $max = $carte["valeur"];
                        $choix = $key;
                    }
                }
                // Si c'est pas possible il joue une carte random
                if($choix == null || $max < 3){
                    // Il ne joue pas de fatigue
                    $choix = rand(0,3);
                    if($deck[0]["valeur"] == 0 && $deck[1]["valeur"] == 0 && $deck[2]["valeur"] == 0 && $deck[3]["valeur"] == 0){
                        // Si que des fatigue
                        $choix = 0;
                    }
                    else{
                        while($deck[$choix]["valeur"] == 0){
                            $choix = rand(0,3);
                        }
                    }
                }
            }
            // Si il est sur le plat en peloton
            elseif($bot->getCase()->testPlat()){
                // Il ne joue pas de fatigue
                $choix = rand(0,3);
                if($deck[0]["valeur"] == 0 && $deck[1]["valeur"] == 0 && $deck[2]["valeur"] == 0 && $deck[3]["valeur"] == 0){
                    // Si que des fatigue
                    $choix = 0;
                }
                else{
                    while($deck[$choix]["valeur"] == 0){
                        $choix = rand(0,3);
                    }
                }
            }
            else{
                // Choix random car pas d'importance
                $choix = rand(0,3);
            }
                        

            // On joue la carte
            jouerCarte($pdo, $room, $bot->getId(), $deck[$choix]["valeur"]);

            // On recycle les autres
            if($choix != 0){
                recycleCarte($pdo, $room, $bot->getId(), $deck[0]["valeur"]);
            }
            if($choix != 1){
                recycleCarte($pdo, $room, $bot->getId(), $deck[1]["valeur"]);
            }
            if($choix != 2){
                recycleCarte($pdo, $room, $bot->getId(), $deck[2]["valeur"]);
            }
            if($choix != 3){
                recycleCarte($pdo, $room, $bot->getId(), $deck[3]["valeur"]);
            }
        }
    }




    function creationParcours(){
        global $pdo;
        global $room;

        $etapeSuivante = getEtape($pdo, $room)["codeParcours"];
        if($etapeSuivante != null){
            // Chargement de l'étape suivante
            switch($etapeSuivante){
                case "CorsoPaseo":
                    insertBoardCaseCorsoPaseo($pdo, $room);
                    break;
                case "LaClassicima":
                    insertBoardCaseLaClassicima($pdo, $room);
                    break;
                case "SurLesPaves":
                    insertBoardCaseSurLesPaves($pdo, $room);
                    break;
                case "PiegePourSprinteurs":
                    insertBoardCasePiegePourSprinteurs($pdo, $room);
                    break;
                case "HauteMontagne":
                    insertBoardHauteMontagne($pdo, $room);
                    break;
                case "PlateauDesGlieres":
                    insertBoardCasePlateauDesGlieres($pdo, $room);
                    break;
                case "Tourmalet":
                    insertBoardCaseTourmalet($pdo, $room);
                    break;
                case "MurDeBretagne":
                    insertBoardCaseMurDeBretagne($pdo, $room);
                    break;
                case "ChampsElysees":
                    insertBoardCaseChampsElysees($pdo, $room);
                    break;
                case "ColDeMenteMourtis":
                    insertBoardCaseColDeMenteMourtis($pdo, $room);
                    break;
                case "tdf_2021_etape1":
                    tdf_2021_etape1($pdo, $room);
                    break;
                case "tdf_2021_etape2":
                    tdf_2021_etape2($pdo, $room);
                    break;
                case "tdf_2021_etape3":
                    tdf_2021_etape3($pdo, $room);
                    break;
                case "tdf_2021_etape4":
                    tdf_2021_etape4($pdo, $room);
                    break;
                case "tdf_2021_etape5":
                    tdf_2021_etape5($pdo, $room);
                    break;
                case "tdf_2021_etape6":
                    tdf_2021_etape6($pdo, $room);
                    break;
                case "tdf_2021_etape7":
                    tdf_2021_etape7($pdo, $room);
                    break;
                case "tdf_2021_etape8":
                    tdf_2021_etape8($pdo, $room);
                    break;
                case "tdf_2021_etape9":
                    tdf_2021_etape9($pdo, $room);
                    break;
                case "tdf_2021_etape10":
                    tdf_2021_etape10($pdo, $room);
                    break;
                case "tdf_2021_etape11":
                    tdf_2021_etape11($pdo, $room);
                    break;
                case "tdf_2021_etape12":
                    tdf_2021_etape12($pdo, $room);
                    break;
                case "tdf_2021_etape13":
                    tdf_2021_etape13($pdo, $room);
                    break;
                case "tdf_2021_etape14":
                    tdf_2021_etape14($pdo, $room);
                    break;
                case "tdf_2021_etape15":
                    tdf_2021_etape15($pdo, $room);
                    break;
                case "tdf_2021_etape16":
                    tdf_2021_etape16($pdo, $room);
                    break;
                case "tdf_2021_etape17":
                    tdf_2021_etape17($pdo, $room);
                    break;
                case "tdf_2021_etape18":
                    tdf_2021_etape18($pdo, $room);
                    break;
                case "tdf_2021_etape19":
                    tdf_2021_etape19($pdo, $room);
                    break;
                case "tdf_2021_etape20":
                    tdf_2021_etape20($pdo, $room);
                    break;
                case "tdf_2021_etape21":
                    tdf_2021_etape21($pdo, $room);
                    break;
                case "paris_nice_2021_etape1":
                    paris_nice_2021_etape1($pdo, $room);
                    break;
                case "paris_nice_2021_etape2":
                    paris_nice_2021_etape2($pdo, $room);
                    break;
                case "paris_nice_2021_etape3":
                    paris_nice_2021_etape3($pdo, $room);
                    break;
                case "paris_nice_2021_etape4":
                    paris_nice_2021_etape4($pdo, $room);
                    break;
                case "paris_nice_2021_etape5":
                    paris_nice_2021_etape5($pdo, $room);
                    break;
                case "paris_nice_2021_etape6":
                    paris_nice_2021_etape6($pdo, $room);
                    break;
                case "paris_nice_2021_etape7":
                    paris_nice_2021_etape7($pdo, $room);
                    break;
                case "paris_nice_2021_etape8":
                    paris_nice_2021_etape8($pdo, $room);
                    break;
                case "criterium_du_dauphine_2021_etape1":
                    criterium_du_dauphine_2021_etape1($pdo, $room);
                    break;
                case "criterium_du_dauphine_2021_etape2":
                    criterium_du_dauphine_2021_etape2($pdo, $room);
                    break;
                case "criterium_du_dauphine_2021_etape3":
                    criterium_du_dauphine_2021_etape3($pdo, $room);
                    break;
                case "criterium_du_dauphine_2021_etape4":
                    criterium_du_dauphine_2021_etape4($pdo, $room);
                    break;
                case "criterium_du_dauphine_2021_etape5":
                    criterium_du_dauphine_2021_etape5($pdo, $room);
                    break;
                case "criterium_du_dauphine_2021_etape6":
                    criterium_du_dauphine_2021_etape6($pdo, $room);
                    break;
                case "criterium_du_dauphine_2021_etape7":
                    criterium_du_dauphine_2021_etape7($pdo, $room);
                    break;
                case "criterium_du_dauphine_2021_etape8":
                    criterium_du_dauphine_2021_etape8($pdo, $room);
                    break;
                case "TourDeLombardie_Etendu":
                    tour_de_lombardie_etendu($pdo, $room);
                    break;
                case "ParisRoubaix_Etendu":
                    paris_roubaix_etendu($pdo, $room);
                    break;
                case "LiegeBastogneLiege_Etendu":
                    liege_bastogne_liege_etendu($pdo, $room);
                    break;
                case "TourDesFlandres_Etendu":
                    tour_des_flandres_etendu($pdo, $room);
                    break;
                case "MilanSanRemo_Etendu":
                    milan_san_remo_etendu($pdo, $room);
                    break;
                case "StradeBianche_Etendu":
                    strade_bianche_etendu($pdo, $room);
                    break;
                case "SanSebastian_Etendu":
                    san_sebastian_etendu($pdo, $room);
                    break;
            }
            return true;
        }
        else{
            return false;
        }
    }



?>