<?php

    function getCase($numero){
        global $list_case;
        return $list_case[$numero-1];
    }




    function getCyclisteById($cycliste_id){
        global $list_cycliste;

        foreach($list_cycliste as $cycliste){
            if($cycliste->getId() == $cycliste_id){
                return $cycliste;
            }
        }

        return null;
    }




    function getCyclisteId($team, $type, $numero){      
        return substr($type, 0, 1).substr($team, 0, 1).$numero;
    }




    function getListBotsId(){
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
                array_push($list_bot, $cycliste->getId());
            }
        }

        return $list_bot;
    }




    function getLeader($pdo, $room){
        global $list_cycliste;
    
        $idLeader = getLeaderId($pdo, $room)["cycliste_id"];
        $leader = getCyclisteById($idLeader);
    
        return $leader;
    }



    function getDrapeau($team){
        switch($team){

            case "Vert":
                // Italie
                return "Images/plateau/drapeau_italie.png";
                break;

            case "Bleu":
                // France
                return "Images/plateau/drapeau_france.png";
                break;

            case "Rouge":
                // Espagne
                return "Images/plateau/drapeau_espagne.png";
                break;

            case "Noir":
                // Colombie
                return "Images/plateau/drapeau_colombie.png";
                break;

            case "Orange":
                // Australie
                return "Images/plateau/drapeau_australie.png";
                break;

            case "Rose":
                // Royaume-Uni
                return "Images/plateau/drapeau_uk.png";
                break;

            case "Blanc":
                // Slovénie
                return "Images/plateau/drapeau_slovenie.png";
                break;

            case "Violet":
                // Portugal
                return "Images/plateau/drapeau_portugal.png";
                break;

            case "Gris":
                // Estonie
                return "Images/plateau/drapeau_estonie.png";
                break;

            case "Turquoise":
                // Pays-Bas
                return "Images/plateau/drapeau_paysbas.png";
                break;

            case "Marron":
                // Allemagne
                return "Images/plateau/drapeau_allemagne.png";
                break;

            case "Cyan":
                // Belge
                return "Images/plateau/drapeau_belge.png";
                break;
        }
    }




    function affichageBasCote(){
        global $list_case;

        foreach($list_case as $case){
            $modulo = $case->getNumero() % 5 + 1;
            echo "<td style='background-color:#1b3815; width:100px; height:50px;'>";
                echo "<img src='Images/decor/".$modulo.".png' width='100px' height='50px' />";
            echo "</td>";
        }
    }

    function affichageBasCoteV2(){
        global $list_case;
        global $pdo;
        global $room;
        global $partie;

        $code = getEtape($pdo, $room)["codeParcours"];
        $etape = getEtapeByCode($pdo, $code);
        $type_etape = $etape["type"];

        foreach($list_case as $case){

            $background = "Images/decor/v2/".$type_etape."/fond_".$partie["meteo_actuel"].".png";

            echo "<td style='background-color:#1b3815; background-image:url(\"".$background."\"); background-size: cover; width:162px; height:100px; border:none;'>";
            echo "</td>";
        }
    }




    function affichageRoute(){
        global $list_case;
        global $pdo;
        global $room;

        // Get position sprint + montagne
        $code = getEtape($pdo, $room)["codeParcours"];
        $etape = getEtapeByCode($pdo, $code);

        $sprint = $etape["position_sprint"];
        $montagne = $etape["liste_montagne"];
        $type_etape = $etape["type"];


        // Get leader clsmts
        $leader = getLeader($pdo, $room);
        $leader_montagne = getCyclisteById(getClsmtMontagneGeneral($pdo, $room)[0]["cycliste_id"]);
        $leader_sprint = getCyclisteById(getClsmtSprintGeneral($pdo, $room)[0]["cycliste_id"]);

        $tailleMax = 0;
        foreach($list_case as $case){
            if($case->getTaille() > $tailleMax){
                $tailleMax = $case->getTaille();
            }
        }

        $nbCycliste = 0;
        $count_case = 0;    
        $i = 1;
        while($i <= $tailleMax){

            $finish = false;  

            if($i == 1){
                $road = "road3";
            }
            else{
                $road = "road4";
            }

            echo "<tr>";

            foreach($list_case as $case){

                if($i <= $case->getTaille()){

                    $nbCycliste += count($case->getCyclistes());

                    if($nbCycliste > 0){
                        $count_case++;
                    }

                    if($count_case == 11){
                        $centrer = "id='centrer'";
                    }

                    switch($case->getSurface()){
                        case "Start":
                            $color = "#ffe640";
                            break;
                        case "Finish":
                            $color = "#ffe640";
                            break;
                        case "Asphalte":
                            $color = "#757575";
                            break;
                        case "Paves":
                            $color = "#4f3100";
                            break;
                    }

                    switch($case->getPente()){
                        case "Plat":
                            $contour = "#000000";
                            break;
                        case "Montee":
                            $contour = "#eb0505";
                            break;
                        case "Descente":
                            $contour = "#037ffc";
                            break;
                    }

                    $strEvent = null;
                    if($sprint == $case->getNumero()){
                        $strEvent = "_Sprint";
                    }
                    elseif($montagne == $case->getNumero()){
                        $strEvent = "_Montagne";
                    }

                    if($case->testStart() && !getCase($case->getNumero()+1)->testStart()){
                        $number = 2;
                    }
                    elseif($case->testFinish() && !$finish){
                        $number = 2;
                        $finish = true;
                    }
                    else{
                        $number = 1;
                    }

                    $background = "Images/decor/v2/".$type_etape."/".$road."_".$case->getPente()."_".$case->getSurface().$strEvent."_".$number.".png";

                    echo "<td class='text-center' style='background-color:".$color."; background-image:url(\"".$background."\"); background-size: cover; width:162px; height:100px; border: none;'>";

                        echo "<div ".$centrer." style='width:162px; height:100px;'>";
                        // Test si un cycliste est présent sur la case
                        if(count($case->getCyclistes()) >= $i){

                            $cycliste = $case->getCyclistes()[$i-1];

                            // Test si le cycliste est chuté
                            $chute = null;
                            if($cycliste->getChute()){
                                //echo "<img src='Images/cyclistes/v2/".$cycliste->getId()."Chute.png' style='height:100%;' />";
                                $chute = "transform: rotate(65deg); width:50%;";
                            }

                            // Test si le cycliste a percé
                            $crevaison = null;
                            if($cycliste->getCrevaison()){
                                $crevaison = "class='hover'";
                            }
                            
                            // Test si le cyliste est leader
                            if($cycliste->getId() == $leader->getId()){
                                echo "<img ".$crevaison." src='Images/cyclistes/v2/".$cycliste->getId()."Leader.png' style='".$chute." height:100%;' />";
                            }
                            // Test si le cyliste est leader montagne
                            elseif($cycliste->getId() == $leader_montagne->getId()){
                                echo "<img ".$crevaison." src='Images/cyclistes/v2/".$cycliste->getId()."Montagne.png' style='".$chute." height:100%;' />";
                            }
                            // Test si le cyliste est leader sprint
                            elseif($cycliste->getId() == $leader_sprint->getId()){
                                echo "<img ".$crevaison." src='Images/cyclistes/v2/".$cycliste->getId()."Sprint.png' style='".$chute." height:100%;' />";
                            }
                            else{
                                echo "<img ".$crevaison." src='Images/cyclistes/v2/".$cycliste->getId().".png' style='".$chute." height:100%;' />";
                            }

                        }
                        // Test si une voiture est présente sur la case
                        elseif($i == 1 && !$case->testStart() && !$case->testFinish() && count(getCase($case->getNumero() + 1)->getCyclistes()[$i-1]) > 0 &&
                        getCase($case->getNumero() + 1)->getCyclistes()[$i-1]->getCrevaison() &&
                        count($case->getCyclistes()) == 0 && count(getCase($case->getNumero() - 1)->getCyclistes()) == 0){
                            echo "<img src='Images/cyclistes/v2/voiture.png' style='height:100%;' />";
                        }
                        
                        echo "</div>";

                    echo "</td>";
                }
                else{
                    echo "<td style='background-color:#1b3815; background-image:url(\"Images/decor/v2/".$type_etape."/herbe.png\"); background-size: cover; width:162px; height:100px; border:none;'>";
                    echo "</td>";
                }
            }

            echo "</tr>";

            $i++;
        }
    }




    function affichageDeck($cycliste_id){
        global $pdo;
        global $room;

        $deck = getDeck($pdo, $room, $cycliste_id);
        $_SESSION["deck_".$cycliste_id] = $deck;

        $cartePrefixe = substr($cycliste_id, 0, 2);

        echo '<input type="radio" id="carte'.$cycliste_id.'1" name="carte'.$cycliste_id.'" value="0" checked>';
        echo '<label for="carte'.$cycliste_id.'1"><img src="Images/cartes/'.$cartePrefixe.$deck[0]["valeur"].'.png" width="150px" /></label>';

        echo '<input type="radio" id="carte'.$cycliste_id.'2" name="carte'.$cycliste_id.'" value="1">';
        echo '<label for="carte'.$cycliste_id.'2"><img src="Images/cartes/'.$cartePrefixe.$deck[1]["valeur"].'.png" width="150px" /></label>';

        echo '<input type="radio" id="carte'.$cycliste_id.'3" name="carte'.$cycliste_id.'" value="2">';
        echo '<label for="carte'.$cycliste_id.'3"><img src="Images/cartes/'.$cartePrefixe.$deck[2]["valeur"].'.png" width="150px" /></label>';

        echo '<input type="radio" id="carte'.$cycliste_id.'4" name="carte'.$cycliste_id.'" value="3">';
        echo '<label for="carte'.$cycliste_id.'4"><img src="Images/cartes/'.$cartePrefixe.$deck[3]["valeur"].'.png" width="150px" /></label>';
    }




    function affichageForme($cycliste_id, $type){
        global $pdo;
        global $room;

        $nbCarte = countNbCarte($pdo, $room, $cycliste_id);
        $nbFatigue = countFatigue($pdo, $room, $cycliste_id);

        $forme = round(($nbCarte - $nbFatigue) / $nbCarte * 100);

        echo '<label for="forme'.$cycliste_id.'">Forme '.$type.' : </label><br/>';
        echo '<div class="progress">';
            echo '<div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: '.$forme.'%" aria-valuenow="'.$forme.'" aria-valuemin="0" aria-valuemax="100"></div>';
        echo '</div>';
        echo '<br/>';
    }




    function affichageEcart(){
        global $pdo;
        global $room;
        global $team;

        // Get leader clsmts
        $leader = getLeader($pdo, $room);
        $leader_montagne = getCyclisteById(getClsmtMontagneGeneral($pdo, $room)[0]["cycliste_id"]);
        $leader_sprint = getCyclisteById(getClsmtSprintGeneral($pdo, $room)[0]["cycliste_id"]);

        $ecarts = getEcart($pdo, $room);

        echo '<table class="text-white">';
        echo '<tr>';

        foreach($ecarts as $e){

            // Cyclistes présents dans le groupe
            $cyclistesInGroupe = explode(';', $e["cyclistes"]);

            $maillotsImgs = "";
            $bgColorStart = "#262626";
            $bgColorEnd = "#6e6e6e";

            foreach($cyclistesInGroupe as $cId){
                if($cId != "" && $cId != null){

                    // Tests leaders
                    if($cId == $leader->getId()){
                        $maillotsImgs .= "<img src='Images/plateau/maillot_jaune.png' width='20px' />";
                    }
                    if($cId == $leader_montagne->getId()){
                        $maillotsImgs .= "<img src='Images/plateau/maillot_a_pois.png' width='20px' />";
                    }
                    if($cId == $leader_sprint->getId()){
                        $maillotsImgs .= "<img src='Images/plateau/maillot_vert.png' width='20px' />";
                    }

                    // Tests si nos coureurs sont presents dans le groupe
                    if($team == getCyclisteById($cId)->getCouleur()){
                        $bgColorStart = "#808080";
                        $bgColorEnd = "#b3b3b3";
                    }

                }
            }

            echo "<td style='background-image: linear-gradient(to right, ".$bgColorStart." , ".$bgColorEnd."); border-radius:15px; padding:5px;'>";
                if($e["typeEcart"] == "Distance"){
                    echo "<h6>".$maillotsImgs." G".$e["numeroGroupe"]." : ".$e["ecart"]." km</h6>";
                }
                else{
                    $tps = date("i's", $e["ecart"]);
                    echo "<h6>".$maillotsImgs." G".$e["numeroGroupe"]." : ".$tps."</h6>";
                }
            echo "</td>";

            //echo "<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>";

        }

        echo '</tr>';
        echo '</table>';
    }


    function afficherClsmts(){
        global $pdo;
        global $room;

        // Get leader clsmts
        $leader = getLeader($pdo, $room);
        $leader_montagne = getCyclisteById(getClsmtMontagneGeneral($pdo, $room)[0]["cycliste_id"]);
        $leader_sprint = getCyclisteById(getClsmtSprintGeneral($pdo, $room)[0]["cycliste_id"]);

        echo '<div class="carousel slide" data-ride="carousel" data-interval="3500" style="margin-top:12px;">
            <div class="carousel-inner">';

                // CLASSEMENT GENERAL
                echo '<div class="carousel-item active">
                    <table class="table table-sm">
                        <thead class="thead">
                            <tr style="background-color:#262626;">
                                <td colspan="3" class="text-left text-white">Classement général</td>
                            </tr>
                        </thead>
                        <tbody>';
                                $clsmt = getClsmtGeneralASC($pdo, $room);
                                $clsmt = array_slice($clsmt, 0, 8);
                                $i=1;
                                $nbToursLeader = 0;
                                foreach($clsmt as $e){
                                    $c = getCyclisteById($e["cycliste_id"]);

                                    if($i == 1){
                                        $tps = date("H:i:s",$e["nbTours"]);
                                        $nbToursLeader = $e["nbTours"];
                                    }
                                    else{
                                        $ecart = $e["nbTours"] - $nbToursLeader;
                                        $tps = "+".date("i's",$ecart);
                                    }

                                    echo "<tr>";

                                        echo "<th scope='row' style='background-color:#262626' class='text-white'>";
                                            echo "<span style='font-size: 1.2em;'><b>".$i."</b></span>";
                                            echo " <img src='".$c->getDrapeau()."' width='35px' />";
                                        echo "</th>";

                                        echo "<td style='background-image: linear-gradient(to right, #262626 , #6e6e6e);' class='text-left text-white'>";
                                            echo "<span style='font-size: 1.1em; margin-right: 30%;'> ".$c->getType()." ".$c->getCouleur()."</span>";
                                            echo "<span>";
                                            if($c->getId() == $leader->getId()){
                                                echo "<img src='Images/plateau/maillot_jaune.png' width='30px' /> ";
                                            }
                                            if($c->getId() == $leader_montagne->getId()){
                                                echo "<img src='Images/plateau/maillot_a_pois.png' width='30px' /> ";
                                            }
                                            if($c->getId() == $leader_sprint->getId()){
                                                echo "<img src='Images/plateau/maillot_vert.png' width='30px' /> ";
                                            }
                                            echo "</span>";
                                        echo "</td>";

                                        echo "<td style='background-color:#d9d9d9; width:150px;' class='text-dark text-right'>";
                                            echo "<span style='font-size: 1.1em;'>".$tps."</span>";
                                        echo "</td>";

                                    echo "</tr>";

                                    $i++;
                                }
                            echo '</tbody>
                    </table>
                </div>';

                // CLASSEMENT MONTAGNE
                echo '<div class="carousel-item">
                    <table class="table table-sm">
                        <thead class="thead">
                            <tr style="background-color:#262626;">
                                <td colspan="3" class="text-left text-white">Classement de la montagne</td>
                            </tr>
                        </thead>
                        <tbody>';
                                $clsmt = getClsmtMontagneGeneral($pdo, $room);
                                $clsmt = array_slice($clsmt, 0, 8);
                                $i=1;
                                foreach($clsmt as $e){
                                    $c = getCyclisteById($e["cycliste_id"]);

                                    echo "<tr>";

                                        echo "<th scope='row' style='background-color:#262626' class='text-white'>";
                                            echo "<span style='font-size: 1.2em;'><b>".$i."</b></span>";
                                            echo " <img src='".$c->getDrapeau()."' width='35px' />";
                                        echo "</th>";

                                        echo "<td style='background-image: linear-gradient(to right, #262626 , #6e6e6e);' class='text-left text-white'>";
                                            echo "<span style='font-size: 1.1em; margin-right: 30%;'> ".$c->getType()." ".$c->getCouleur()."</span>";
                                            echo "<span>";
                                            if($c->getId() == $leader->getId()){
                                                echo "<img src='Images/plateau/maillot_jaune.png' width='30px' /> ";
                                            }
                                            if($c->getId() == $leader_montagne->getId()){
                                                echo "<img src='Images/plateau/maillot_a_pois.png' width='30px' /> ";
                                            }
                                            if($c->getId() == $leader_sprint->getId()){
                                                echo "<img src='Images/plateau/maillot_vert.png' width='30px' /> ";
                                            }
                                            echo "</span>";
                                        echo "</td>";

                                        echo "<td style='background-color:#d9d9d9; width:150px;' class='text-dark text-right'>";
                                            echo "<span style='font-size: 1.1em;'>".$e["points"]."</span>";
                                        echo "</td>";

                                    echo "</tr>";

                                    $i++;
                                }
                        echo '</tbody>
                    </table>
                </div>';

                // CLASSEMENT SPRINT
                echo '<div class="carousel-item">
                    <table class="table table-sm">
                        <thead class="thead">
                            <tr style="background-color:#262626;">
                                <td colspan="3" class="text-left text-white">Classement par points</td>
                            </tr>
                        </thead>
                        <tbody>';
                                $clsmt = getClsmtSprintGeneral($pdo, $room);
                                $clsmt = array_slice($clsmt, 0, 8);
                                $i=1;
                                foreach($clsmt as $e){
                                    $c = getCyclisteById($e["cycliste_id"]);

                                    echo "<tr>";

                                        echo "<th scope='row' style='background-color:#262626' class='text-white'>";
                                            echo "<span style='font-size: 1.2em;'><b>".$i."</b></span>";
                                            echo " <img src='".$c->getDrapeau()."' width='35px' />";
                                        echo "</th>";

                                        echo "<td style='background-image: linear-gradient(to right, #262626 , #6e6e6e);' class='text-left text-white'>";
                                            echo "<span style='font-size: 1.1em; margin-right: 30%;'> ".$c->getType()." ".$c->getCouleur()."</span>";
                                            echo "<span>";
                                            if($c->getId() == $leader->getId()){
                                                echo "<img src='Images/plateau/maillot_jaune.png' width='30px' /> ";
                                            }
                                            if($c->getId() == $leader_montagne->getId()){
                                                echo "<img src='Images/plateau/maillot_a_pois.png' width='30px' /> ";
                                            }
                                            if($c->getId() == $leader_sprint->getId()){
                                                echo "<img src='Images/plateau/maillot_vert.png' width='30px' /> ";
                                            }
                                            echo "</span>";
                                        echo "</td>";

                                        echo "<td style='background-color:#d9d9d9; width:150px;' class='text-dark text-right'>";
                                            echo "<span style='font-size: 1.1em;'>".$e["points"]."</span>";
                                        echo "</td>";

                                    echo "</tr>";

                                    $i++;
                                }
                            echo '</tbody>
                    </table>
                </div>

            </div>
        </div>';
        
    }








    /* JOUEURS */

    function getNiveau($xp){
        // Fonction : 0.314 * sqrt(x) + 1
        return floor(0.314 * sqrt($xp) + 1);
    }

    function getXpLevelUp($xp){
        $lvl = getNiveau($xp) + 1;
        return floor(pow((($lvl-1)/0.314),2));
    }

    function getXpLevelDown($xp){
        $lvl = getNiveau($xp) - 1;
        $res = floor((($lvl-1)/0.314)^2);
        if($res < 0){
            $res = 0;
        }
        return $res;
    }

    function getProgressBarXp($xp){
        $pourcent = round($xp/getXpLevelUp($xp)*100);
        echo '<div class="progress">';
            echo '<div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: '.$pourcent.'%" aria-valuenow="'.$pourcent.'" aria-valuemin="'.getXpLevelDown($xp).'" aria-valuemax="'.getXpLevelUp($xp).'"></div>';
        echo '</div>';
    }

    function getRang($rang){

        if($rang < 500){
            return "Equipe de village";
        }
        elseif($rang < 1250){
            return "Continental";
        }
        elseif($rang < 3000){
            return "Continental pro";
        }
        else{
            return "World Tour";
        }

    }

    function getProgressBarRang($rang){

        if($rang < 500){
            $rangDown = 0;
            $rangUp = 500;
        }
        elseif($rang < 1250){
            $rangDown = 500;
            $rangUp = 1250;
        }
        elseif($rang < 3000){
            $rangDown = 1250;
            $rangUp = 3000;
        }
        else{
            $rangDown = 3000;
            $rangUp = 3001;
        }

        $pourcent = round($rang/$rangUp*100);
        echo '<div class="progress">';
            echo '<div class="progress-bar bg-primary progress-bar-striped" role="progressbar" style="width: '.$pourcent.'%" aria-valuenow="'.$pourcent.'" aria-valuemin="'.$rangDown.'" aria-valuemax="'.$rangUp.'"></div>';
        echo '</div>';
    }


    function updateLevelJoueur($joueur, $clsmt_rouleur, $clsmt_sprinteur, $is_leader, $is_leader_montagne, $is_leader_sprint, $lastEtape, $nbJoueurs){
        global $pdo;
        global $mode;
        global $partie;

        $difficulte = $partie["difficulte"];

        $xp = 0;
        $rang = 0;
        $victoire = false;
        
        if($lastEtape){

            if($is_leader){
                $xp += 100;
            }

            if($is_leader_montagne){
                $xp += 50;
            }

            if($is_leader_sprint){
                $xp += 50;
            }

        }
        else{

            if($is_leader){
                $xp += 10;
            }

            if($is_leader_montagne){
                $xp += 5;
            }

            if($is_leader_sprint){
                $xp += 5;
            }

        }

        $rang_maillot += $xp * (($nbJoueurs-1)*0.5);

        if($mode == "classique"){
            switch($clsmt_rouleur){
                case 1:
                    $xp += 10;
                    $rang += 10;
                    $victoire = true;
                    break;
                case 2:
                    $xp += 8;
                    $rang += 8;
                    break;
                case 3:
                    $xp += 6;
                    $rang += 6;
                    break;
                case 4:
                    $xp += 4;
                    break;
                case 5:
                    $xp += 3;
                    break;
                case 6:
                    $xp += 2;
                    $rang -= 6;
                    break;
                case 7:
                    $xp += 1;
                    $rang -= 8;
                    break;
                default:
                    $xp += 0;
                    $rang -= 10;
                    break;
            }

            switch($clsmt_sprinteur){
                case 1:
                    $xp += 10;
                    $rang += 10;
                    $victoire = true;
                    break;
                case 2:
                    $xp += 8;
                    $rang += 8;
                    break;
                case 3:
                    $xp += 6;
                    $rang += 6;
                    break;
                case 4:
                    $xp += 4;
                    break;
                case 5:
                    $xp += 3;
                    break;
                case 6:
                    $xp += 2;
                    $rang -= 6;
                    break;
                case 7:
                    $xp += 1;
                    $rang -= 8;
                    break;
                default:
                    $xp += 0;
                    $rang -= 10;
                    break;
            }
        }else{
            switch($clsmt_rouleur){
                case 1:
                    $xp += 20;
                    $rang += 20;
                    $victoire = true;
                    break;
                case 2:
                    $xp += 18;
                    $rang += 18;
                    break;
                case 3:
                    $xp += 16;
                    $rang += 16;
                    break;
                case 4:
                    $xp += 12;
                    $rang += 12;
                    break;
                case 5:
                    $xp += 8;
                    $rang += 8;
                    break;
                case 6:
                    $xp += 4;
                    $rang += 4;
                    break;
                case 7:
                    $xp += 3;
                    $rang += 3;
                    break;
                case 8:
                    $xp += 2;
                    $rang += 2;
                    break;
                case 9:
                    $xp += 1;
                    $rang += 1;
                    break;
                case 10:
                    break;
                case 11:
                    break;
                case 12:
                    break;
                case 13:
                    break;
                case 14:
                    break;
                case 15:
                    break;
                case 16:
                    $rang -= 1;
                    break;
                case 17:
                    $rang -= 2;
                    break;
                case 18:
                    $rang -= 3;
                    break;
                case 19:
                    $rang -= 4;
                    break;
                case 20:
                    $rang -= 8;
                    break;
                case 21:
                    $rang -= 12;
                    break;
                case 22:
                    $rang -= 16;
                    break;
                case 23:
                    $rang -= 18;
                    break;
                case 24:
                    $rang -= 20;
                    break;
            }

            switch($clsmt_sprinteur){
                case 1:
                    $xp += 20;
                    $rang += 20;
                    $victoire = true;
                    break;
                case 2:
                    $xp += 18;
                    $rang += 18;
                    break;
                case 3:
                    $xp += 16;
                    $rang += 16;
                    break;
                case 4:
                    $xp += 12;
                    $rang += 12;
                    break;
                case 5:
                    $xp += 8;
                    $rang += 8;
                    break;
                case 6:
                    $xp += 4;
                    $rang += 4;
                    break;
                case 7:
                    $xp += 3;
                    $rang += 3;
                    break;
                case 8:
                    $xp += 2;
                    $rang += 2;
                    break;
                case 9:
                    $xp += 1;
                    $rang += 1;
                    break;
                case 10:
                    break;
                case 11:
                    break;
                case 12:
                    break;
                case 13:
                    break;
                case 14:
                    break;
                case 15:
                    break;
                case 16:
                    $rang -= 1;
                    break;
                case 17:
                    $rang -= 2;
                    break;
                case 18:
                    $rang -= 3;
                    break;
                case 19:
                    $rang -= 4;
                    break;
                case 20:
                    $rang -= 8;
                    break;
                case 21:
                    $rang -= 12;
                    break;
                case 22:
                    $rang -= 16;
                    break;
                case 23:
                    $rang -= 18;
                    break;
                case 24:
                    $rang -= 20;
                    break;
            }
        }

        $rang = $rang * ($nbJoueurs-1);
        $rang += $rang_maillot;

        //$rang += $xp*($nbJoueurs-1);

        $new_xp = $joueur["xp"] + ($xp*$difficulte);
        //$new_rang = floor($joueur["rang"] + ($rang - $joueur["rang"] / 100));
        $new_rang = $joueur["rang"] + $rang;

        if($new_rang < 0){
            $new_rang = 0;
        }

        updateJoueur($pdo, $joueur["id"], $new_xp, $new_rang, $victoire);

    }

?>