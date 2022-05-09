<?php
    include("fragments/head.php");

    $code = getLastEtape($pdo, $room)["codeParcours"];
    $etape = getEtapeByCode($pdo, $code)["nom"];

    // Get leader clsmts
    $leader = getLeader($pdo, $room);
    $leader_montagne = getCyclisteById(getClsmtMontagneGeneral($pdo, $room)[0]["cycliste_id"]);
    $leader_sprint = getCyclisteById(getClsmtSprintGeneral($pdo, $room)[0]["cycliste_id"]);

    $redirect = false;

    if(isset($_POST["next"])){

        // Si vous etes le createur
        if($partie["createur"] == $team){

            // Gives des points
            $list_joueur = getAllInGame($pdo, $room);

            foreach($list_joueur as $j){

                $j_object = getJoueurById($pdo, $j["joueur_id"]);

                $clsmt_rouleur = 8;
                $clsmt_sprinteur = 8;
                $is_leader = false;
                $is_leader_montagne = false;
                $is_leader_sprint = false;
                $lastEtape = false;
                $nbJoueurs = $partie["nbJoueurs"];

                $clsmt = getClsmtEtape($pdo, $room);
                foreach($clsmt as $key => $e){
                    $c = getCyclisteById($e["cycliste_id"]);

                    if($c->getCouleur() == $j["team"]){

                        if($c->getType() == "Rouleur"){
                            $clsmt_rouleur = $key+1;
                        }
                        else{
                            $clsmt_sprinteur = $key+1;
                        }

                    }

                }

                if($leader->getCouleur() == $j["team"]){
                    $is_leader = true;
                }

                if($leader_montagne->getCouleur() == $j["team"]){
                    $is_leader_montagne = true;
                }

                if($leader_sprint->getCouleur() == $j["team"]){
                    $is_leader_sprint = true;
                }

                $lastEtape = testLastEtape($pdo, $room);

                updateLevelJoueur($j_object, $clsmt_rouleur, $clsmt_sprinteur, $is_leader, $is_leader_montagne, $is_leader_sprint, $lastEtape, $nbJoueurs);

            }

            // On reset les cartes
            resetCartesV2($pdo, $room);

            // Recup de la liste des bots
            $list_bot = getListBotsId();

            $difficulte = $partie["difficulte"];

            // On redistribue les fatigues
            foreach($list_cycliste as $cycliste){

                $nbFatigue = getClsmtEtapeByIdCycliste($pdo, $room, $cycliste->getId())["nbFatigue"];

                // Test si bot
                if(in_array($cycliste->getId(), $list_bot)){
                    // nbFatigue determiné selon la difficulté
                    switch($difficulte){
                        case 2:
                            // Moyen
                            $nbFatigue = round($nbFatigue/2);
                            break;
                        case 3:
                            // Difficile
                            $nbFatigue = round($nbFatigue/4);
                            break;
                        case 4:
                            // Légende
                            $nbFatigue = 0;
                            break;
                        default:
                            // Facile
                            $nbFatigue = $nbFatigue;
                            break;
                    }
                }

                $i = 1;
                while($i <= $nbFatigue){

                    giveFatigue($pdo, $room, $cycliste->getId());

                    $i++;
                }
            }

            // On reset les positions
            resetPositionBDD($pdo, $room);

            // Test si la prochaine étape est un jour de repos
            if(getEtape($pdo, $room)["codeParcours"] == "Repos"){
                repos($pdo, $room);
                updateEtape($pdo, $room);
            }

            // Reset du classement de l'étape
            resetClsmtEtape($pdo, $room);

            // Init Clsmt Etape
            initClsmtEtape($pdo, $room);

            // Reset du classement montagne de l'étape
            resetClsmtMontagne($pdo, $room);

            // Reset du classement sprint de l'étape
            resetClsmtSprint($pdo, $room);

            // Reset Jouer
            resetJouer($pdo, $room);

            // Chargement de l'étape suivante
            $load = creationParcours();
            $list_case = array();
            setBoardCase($pdo, $room);
            setMeteo($pdo, $room, $partie["mode_meteo"]);

            // Initialisation des cartes
            if($mode == "etendu"){
                $repeat = round(count($list_case)/80);
            }
            else{
                $repeat = 1;   
            }
            for($i=0;$i<$repeat;$i++){
                foreach($list_cycliste as $c){
                    initCartesV2($pdo, $room, $c->getId(), $c->getType());
                }
            }


            $redirect = true;
        }
        else{
            // Si le classement a été reset
            if(countClsmtEtape($pdo, $room) == 0){
                $redirect = true;
                $load = true;
            }
        }

    }

    if($redirect){

        // Redirection
        if($load){
            // Si un parcours est chargé
            echo "<script>document.location.replace('board');</script>";
        }
        else{
            // Si aucun parcours est chargé
            echo "<script>document.location.replace('index');</script>";
        }
    }
?>

<body class="text-center" style="padding:5%;">

    <div class="container">
        <div class="row">

            <!-- CLASSEMENTS -->
            <div class="col">
            <div class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">

                    <!-- CLASSEMENT ETAPE -->
                    <div class="carousel-item active">
                        <table class="table">
                            <thead class="thead">
                                <tr style="background-color:#262626">
                                    <td rowspan="2" style="width:100px;"><br/><img src="Images/menu/logo.png" width="100px" style="transform: rotate(-15deg);" /></td>
                                    <td colspan="2" class="text-left text-white" style='font-size: 1.2em;'><b><?php echo $etape; ?></b></td>
                                </tr>
                                <tr style="background-image: linear-gradient(to right, #b0b0b0 , #d9d9d9);">
                                    <td colspan="2" class="text-left text-dark">Classement de l'étape</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $clsmt = getClsmtEtape($pdo, $room);
                                    $i = 1;
                                    foreach($clsmt as $e){
                                        $c = getCyclisteById($e["cycliste_id"]);


                                        $tps_cycliste = $e["nbToursFin"] - $e["nbToursDebut"];
                                        
                                        if($i == 1){
                                            $tps = date("i's",$tps_cycliste);
                                            $nbToursLeader = $tps_cycliste;
                                        }
                                        else{
                                            $ecart = $tps_cycliste - $nbToursLeader;
                                            $tps = "+".date("i's",$ecart);
                                        }
                                        $i++;


                                        echo "<tr>";

                                            echo "<th scope='row' style='background-color:#262626' class='text-white'>";
                                                echo "<span style='font-size: 1.2em;'><b>".$e['position']."</b></span>";
                                                echo " <img src='".$c->getDrapeau()."' width='35px' />";
                                            echo "</th>";

                                            echo "<td style='background-image: linear-gradient(to right, #262626 , #6e6e6e);' class='text-left text-white'>";
                                                echo "<span style='font-size: 1.1em; margin-right: 70%;'> ".$c->getType()." ".$c->getCouleur()."</span>";
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
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- CLASSEMENT GENERAL -->
                    <div class="carousel-item">
                        <table class="table">
                            <thead class="thead">
                                <tr style="background-color:#262626">
                                    <td rowspan="2" style="width:100px;"><br/><img src="Images/menu/logo.png" width="100px" style="transform: rotate(-15deg);" /></td>
                                    <td colspan="2" class="text-left text-white" style='font-size: 1.2em;'><b><?php echo $etape; ?></b></td>
                                </tr>
                                <tr style="background-image: linear-gradient(to right, #b0b0b0 , #d9d9d9);">
                                    <td colspan="2" class="text-left text-dark">Classement général</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $clsmt = getClsmtGeneralASC($pdo, $room);
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
                                                echo "<span style='font-size: 1.1em; margin-right: 70%;'> ".$c->getType()." ".$c->getCouleur()."</span>";
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
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- CLASSEMENT MONTAGNE -->
                    <div class="carousel-item">
                        <table class="table">
                            <thead class="thead">
                                <tr style="background-color:#262626">
                                    <td rowspan="2" style="width:100px;"><br/><img src="Images/menu/logo.png" width="100px" style="transform: rotate(-15deg);" /></td>
                                    <td colspan="2" class="text-left text-white" style='font-size: 1.2em;'><b><?php echo $etape; ?></b></td>
                                </tr>
                                <tr style="background-image: linear-gradient(to right, #b0b0b0 , #d9d9d9);">
                                    <td colspan="2" class="text-left text-dark">Classement de la montagne</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $clsmt = getClsmtMontagneGeneral($pdo, $room);
                                    $i=1;
                                    foreach($clsmt as $e){
                                        $c = getCyclisteById($e["cycliste_id"]);

                                        echo "<tr>";

                                            echo "<th scope='row' style='background-color:#262626' class='text-white'>";
                                                echo "<span style='font-size: 1.2em;'><b>".$i."</b></span>";
                                                echo " <img src='".$c->getDrapeau()."' width='35px' />";
                                            echo "</th>";

                                            echo "<td style='background-image: linear-gradient(to right, #262626 , #6e6e6e);' class='text-left text-white'>";
                                                echo "<span style='font-size: 1.1em; margin-right: 70%;'> ".$c->getType()." ".$c->getCouleur()."</span>";
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
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- CLASSEMENT SPRINT -->
                    <div class="carousel-item">
                        <table class="table">
                            <thead class="thead">
                                <tr style="background-color:#262626">
                                    <td rowspan="2" style="width:100px;"><br/><img src="Images/menu/logo.png" width="100px" style="transform: rotate(-15deg);" /></td>
                                    <td colspan="2" class="text-left text-white" style='font-size: 1.2em;'><b><?php echo $etape; ?></b></td>
                                </tr>
                                <tr style="background-image: linear-gradient(to right, #b0b0b0 , #d9d9d9);">
                                    <td colspan="2" class="text-left text-dark">Classement par points</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $clsmt = getClsmtSprintGeneral($pdo, $room);
                                    $i=1;
                                    foreach($clsmt as $e){
                                        $c = getCyclisteById($e["cycliste_id"]);

                                        echo "<tr>";

                                            echo "<th scope='row' style='background-color:#262626' class='text-white'>";
                                                echo "<span style='font-size: 1.2em;'><b>".$i."</b></span>";
                                                echo " <img src='".$c->getDrapeau()."' width='35px' />";
                                            echo "</th>";

                                            echo "<td style='background-image: linear-gradient(to right, #262626 , #6e6e6e);' class='text-left text-white'>";
                                                echo "<span style='font-size: 1.1em; margin-right: 70%;'> ".$c->getType()." ".$c->getCouleur()."</span>";
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
                                ?>
                            </tbody>
                        </table>
                    </div>

                    <!-- CLASSEMENT EQUIPE -->
                    <div class="carousel-item">
                        <table class="table">
                            <thead class="thead">
                                <tr style="background-color:#262626">
                                    <td rowspan="2" style="width:100px;"><br/><img src="Images/menu/logo.png" width="100px" style="transform: rotate(-15deg);" /></td>
                                    <td colspan="2" class="text-left text-white" style='font-size: 1.2em;'><b><?php echo $etape; ?></b></td>
                                </tr>
                                <tr style="background-image: linear-gradient(to right, #b0b0b0 , #d9d9d9);">
                                    <td colspan="2" class="text-left text-dark">Classement par équipe</td>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $clsmtEquipe = array();
                                    $pair = false;
                                    $tps_team = 0;
                                    foreach($list_cycliste as $cycliste){

                                        if($pair){
                                            $tps_team += getClsmtGeneralByCyclisteId($pdo, $room, $cycliste->getId())["nbTours"];
                                            $pair = false;

                                            // Push
                                            $clsmtEquipe[$cycliste->getCouleur()] = $tps_team;
                                            $tps_team = 0;
                                        }
                                        else{
                                            $tps_team = getClsmtGeneralByCyclisteId($pdo, $room, $cycliste->getId())["nbTours"];
                                            $pair = true;
                                        }

                                    }

                                    asort($clsmtEquipe);

                                    $i=1;
                                    $nbToursLeader = 0;
                                    foreach($clsmtEquipe as $key => $e){

                                        if($i == 1){
                                            $tps = date("H:i:s",$e);
                                            $nbToursLeader = $e;
                                        }
                                        else{
                                            $ecart = $e - $nbToursLeader;
                                            $tps = "+".date("i's",$ecart);
                                        }

                                        echo "<tr>";

                                            echo "<th scope='row' style='background-color:#262626' class='text-white'>";
                                                echo "<span style='font-size: 1.2em;'><b>".$i."</b></span>";
                                                echo " <img src='".getDrapeau($key)."' width='35px' />";
                                            echo "</th>";

                                            echo "<td style='background-image: linear-gradient(to right, #262626 , #6e6e6e);' class='text-left text-white'>";
                                                echo "<span style='font-size: 1.1em; margin-right: 70%;'> Equipe ".$key."</span>";
                                            echo "</td>";

                                            echo "<td style='background-color:#d9d9d9; width:150px;' class='text-dark text-right'>";
                                                echo "<span style='font-size: 1.1em;'>".$tps."</span>";
                                            echo "</td>";

                                        echo "</tr>";

                                        $i++;
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            </div>

        </div>


        <!-- ETAPE SUIVANTE -->
        <div class="row">
            <div class="col">
                <form method="POST">
                    <button type="submit" name="next" class="btn btn-warning text-dark">Etape suivante</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>