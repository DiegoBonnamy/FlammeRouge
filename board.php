<?php
    include("fragments/head.php");

    /* Initialisation des coureurs */
    updatePosition();

    // Si tout le monde est pret et si createur
    if(testJoueursPret($pdo, $room) && $partie["createur"] == $team){

        go();

        resetJouer($pdo, $room);

    }

    // Test si l'étape est terminée
    if(countClsmtEtape($pdo, $room) == count($list_cycliste)){

        // Redirection
        echo "<script>document.location.replace('recap');</script>";

    }

    $mesCyclistes = array("Rouleur", "Sprinteur");

    if(isset($_POST["jouer"])){

        foreach($mesCyclistes as $type){

            // On récupère le deck
            $cycliste_id = getCyclisteId($team, $type,1);
            $deck = $_SESSION["deck_".$cycliste_id];

            // On joue la carte choisie
            jouerCarte($pdo, $room, $cycliste_id, $deck[$_POST["carte".$cycliste_id]]["valeur"]);

            // On recycle les cartes pas jouées
            if($_POST["carte".$cycliste_id] != 0){
                recycleCarte($pdo, $room, $cycliste_id, $deck[0]["valeur"]);
            }
            if($_POST["carte".$cycliste_id] != 1){
                recycleCarte($pdo, $room, $cycliste_id, $deck[1]["valeur"]);
            }
            if($_POST["carte".$cycliste_id] != 2){
                recycleCarte($pdo, $room, $cycliste_id, $deck[2]["valeur"]);
            }
            if($_POST["carte".$cycliste_id] != 3){
                recycleCarte($pdo, $room, $cycliste_id, $deck[3]["valeur"]);
            }
        }

        echo "<script>document.location.replace('board?t='+(Date.now())+'#centrer');</script>";

    }

    // On test si on on a validé notre deck
    $jouer = false;
    foreach($mesCyclistes as $type){
        if(testJouer($pdo, $room, getCyclisteId($team, $type,1))){
            $jouer = true;
        }
    }

    // Si le deck n'a pas été validé
    if(!$jouer){
        $pret = false;
    }
    else{
        $pret = true;
    }

    $code = getEtape($pdo, $room)["codeParcours"];
    $etape = getEtapeByCode($pdo, $code)["nom"];

    switch($partie["meteo_actuel"]){
        case "beau":
            $icon = '<i class="fas fa-cloud-sun"></i>';
            break;
        case "pluie":
            $icon = '<i class="fas fa-cloud-showers-heavy"></i>';
            break;
        case "vent":
            $icon = '<i class="fas fa-wind"></i>';
            break;
    }

?>
<body class="text-center">

    <!-- Nom de l'étape -->
    <h1 class="text-white" style="font-size: 3em; -webkit-text-stroke: 2px black;"><b><?php echo $etape; ?></b> <?php echo $icon; ?></h1>

    <!-- Ecarts -->
    <?php affichageEcart(); ?>

    <!-- Plateau de jeu -->
    <?php
        $width = count($list_case)*100;

        $tailleMax = 0;
        foreach($list_case as $case){
            if($case->getTaille() > $tailleMax){
                $tailleMax = $case->getTaille();
            }
        }
        $height = (($tailleMax+1)*100)+40;
    ?>
    <div style="width:100%; height:<?php echo $height; ?>px; overflow-x:scroll; padding:5px; font-size:1.3em; margin-bottom:30px; background-color:rgba(0, 0, 0, 0);" class="text-left bg-white">
        <table style="width:<?php echo $width; ?>px;">

            <!-- Bas-coté -->
            <tr>
                <?php affichageBasCoteV2(); ?>
            </tr>

            <!-- Route -->
            <?php affichageRoute(); ?>

            <!-- Bas-coté -->
            <tr>
                <?php //affichageBasCote(); ?>
            </tr>

        </table>
    </div>

    <!-- Deck -->
    <?php
        // On affiche le deck si on est pas pret
        if(!$pret){
    ?>
    <div style="background-color:rgba(110, 110, 110, 0.9); padding:5px; border: 3px solid black; border-radius: 25px;">
        <form method="POST">
            <div class="row" style="width:99%;">

                <!-- Rouleur -->
                <div class="col">
                    <h3>Rouleur</h3>
                    <?php
                        affichageDeck(getCyclisteId($team, $mesCyclistes[0], 1));
                    ?>
                </div>

                <!-- Sprinteur -->
                <div class="col">
                    <h3>Sprinteur</h3>
                    <?php
                        affichageDeck(getCyclisteId($team, $mesCyclistes[1], 1));
                    ?>
                </div>

            </div>
            <div class="row" style="width:99%;">
                <div class="col">
                    <input type="submit" name="jouer" value="Jouer" class="btn btn-lg btn-dark text-light" />
                </div>
            </div>
        </form>
    </div>
    <?php
        }
    ?>

    <!-- Attente -->
    <?php
        // On affiche le message d'attente si on est pret
        if($pret){

            // Get leader clsmts
            $leader = getLeader($pdo, $room);
            $leader_montagne = getCyclisteById(getClsmtMontagneGeneral($pdo, $room)[0]["cycliste_id"]);
            $leader_sprint = getCyclisteById(getClsmtSprintGeneral($pdo, $room)[0]["cycliste_id"]);
    ?>
        <div class="row text-white" style="width:99%;">

            <div class="col">

                <div class="row">

                    <!-- Forme -->
                    <div class="col">
                        <div style="background-color:rgba(110, 110, 110, 0.9); padding:5px; border: 3px solid black; border-radius: 25px;">
                            <?php
                                foreach($mesCyclistes as $type){
                                    affichageForme(getCyclisteId($team, $type, 1), $type);
                                }
                            ?>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <!-- Rappel Maillot -->
                    <div class="col">
                        <div style="background-color:rgba(110, 110, 110, 0.9); padding:5px; border: 3px solid black; border-radius: 25px;">
                            
                            <table style="width:100%;">
                                <!-- Entete -->
                                <tr>
                                    <td colspan="3">Leader</td>
                                    <td>Rouleur</td>
                                    <td>Sprinteur</td>
                                </tr>
                                <!-- Jaune -->
                                <tr>
                                    <?php
                                        $leader_time = getClsmtGeneralByCyclisteId($pdo, $room, $leader->getId())["nbTours"];
                                    ?>
                                    <td><img width="75px" src="Images/plateau/maillot_jaune.png" /></td>
                                    <td><?php echo $leader->getType()." ".$leader->getCouleur(); ?></td>
                                    <td style="border-right: 1px solid white;"><?php echo date("H:i:s",$leader_time); ?></td>
                                    <td><?php echo "+".date("i's",getClsmtGeneralByCyclisteId($pdo, $room, getCyclisteId($team, "Rouleur", 1))["nbTours"]-$leader_time); ?></td>
                                    <td><?php echo "+".date("i's",getClsmtGeneralByCyclisteId($pdo, $room, getCyclisteId($team, "Sprinetur", 1))["nbTours"]-$leader_time); ?></td>
                                </tr>
                                <!-- Pois -->
                                <tr>
                                    <td><img width="75px" src="Images/plateau/maillot_a_pois.png" /></td>
                                    <td><?php  echo $leader_montagne->getType()." ".$leader_montagne->getCouleur(); ?></td>
                                    <td style="border-right: 1px solid white;"><?php echo getClsmtMontagneByCyclisteId($pdo, $room, $leader_montagne->getId())["points"]; ?></td>
                                    <td><?php echo getClsmtMontagneByCyclisteId($pdo, $room, getCyclisteId($team, "Rouleur", 1))["points"]; ?></td>
                                    <td><?php echo getClsmtMontagneByCyclisteId($pdo, $room, getCyclisteId($team, "Sprinetur", 1))["points"]; ?></td>
                                </tr>
                                <!-- Vert -->
                                <tr>
                                    <td><img width="75px" src="Images/plateau/maillot_vert.png" /></td>
                                    <td><?php echo $leader_sprint->getType()." ".$leader_sprint->getCouleur(); ?></td>
                                    <td style="border-right: 1px solid white;"><?php echo getClsmtSprintByCyclisteId($pdo, $room, $leader_sprint->getId())["points"]; ?></td>
                                    <td><?php echo getClsmtSprintByCyclisteId($pdo, $room, getCyclisteId($team, "Rouleur", 1))["points"]; ?></td>
                                    <td><?php echo getClsmtSprintByCyclisteId($pdo, $room, getCyclisteId($team, "Sprinetur", 1))["points"]; ?></td>
                                </tr>
                            </table>

                        </div>
                    </div>

                </div>

            </div>

            <!-- Attente -->
            <div class="col">
                <div style="background-color:rgba(110, 110, 110, 0.9); padding:5px; border: 3px solid black; border-radius: 25px;">
                    
                    <h2 style="margin-top:15px; margin-bottom:30px;">En attente des autres joueurs...</h2>

                    <img src="https://c.tenor.com/I6kN-6X7nhAAAAAj/loading-buffering.gif" width="50px" style="margin-bottom:15px;"/>

                    <hr/>

                    <div class="text-left" style="padding:15px;">
                        <?php
                            // Liste des joueurs en attente
                            $nbJoueurs = $partie["nbJoueurs"];
                            $inGame = getAllInGame($pdo, $room);

                            $team_list_complet = array("Vert", "Rouge", "Bleu", "Noir");
                            $team_list = array();
                            $i = 0;
                            foreach($inGame as $player){

                                $cycliste_id = getCyclisteId($player["team"], "Rouleur", 1);
                                $isOk = testPret($pdo, $room, $cycliste_id);

                                $pseudo = getJoueurById($pdo, $player["joueur_id"])["login"];

                                $strRang = getRang(getJoueurById($pdo, $player["joueur_id"])["rang"]);

                                if($isOk){
                                    echo '<span><i class="text-success fas fa-check-circle"></i> '.$pseudo.' ('.$player["team"].') - '.$strRang.'</span><br/>';
                                }
                                else{
                                    echo '<span><i class="text-danger fas fa-times-circle"></i> '.$pseudo.' ('.$player["team"].') - '.$strRang.'</span><br/>';
                                }

                                array_push($team_list, $player["team"]);
                                $i++;
                            }

                            $trouve = false;
                            $nb_invite = $nbJoueurs - $i;
                            while($i < $nbJoueurs){

                                foreach($team_list_complet as $t){

                                    if(!in_array($t, $team_list)){

                                        $cycliste_id = getCyclisteId($t, "Rouleur", 1);
                                        $isOk = testPret($pdo, $room, $cycliste_id);

                                        if($isOk){
                                            echo '<span><i class="text-success fas fa-check-circle"></i> Invité ('.$t.')</span><br/>';
                                            $trouve = true;
                                        }                         

                                    }
                                }

                                $i++;
                            }

                            if(!$trouve){
                                while($nb_invite < $nbJoueurs){
                                    echo '<span><i class="text-danger fas fa-times-circle"></i> Invité </span><br/>';
                                    $nb_invite++;
                                }
                            }
                        ?>
                    </div>

                </div>
            </div>

            <!-- Classement -->
            <div class="col">
                <div style="background-color:rgba(110, 110, 110, 0.9); padding:5px; border: 3px solid black; border-radius: 25px;">

                    <?php afficherClsmts(); ?>

                </div>
            </div>

            <!-- Refresh Automatique -->
            <script>
                refresh();
                function refresh() {
                    setTimeout(function(){
                        //document.location.replace('board');
                        //window.location.reload(true);
                        document.location.replace('board?t='+(Date.now())+'#centrer');
                    }, 10000);
                }
            </script>

        </div>
    <?php
        }
    ?>

</body>
</html>

<?php
    // On ajoute une ligne dans Jouer pour indiquer que le deck a été vu
    if(!$pret){
        foreach($mesCyclistes as $type){
            // Instanciation
            setJouer($pdo, $room, getCyclisteId($team, $type, 1));
        }
    }
    else{
        foreach($mesCyclistes as $type){
            if(!testJouerCarte($pdo, $room, getCyclisteId($team, $type, 1))){
                // Update
                reloadJouer($pdo, $room, getCyclisteId($team, $type, 1));
            }
        }
    }
?>