<?php
    include("fragments/head.php");

    if(isset($_POST["ajouter"])){
        addEtape($pdo, $room, $_POST["etape"], $_POST["etape"]);
    }

    if(isset($_POST["jouer"])){

        // Test si la prochaine étape est un jour de repos
        if(getEtape($pdo, $room)["codeParcours"] == "Repos"){
            updateEtape($pdo, $room);
        }

        // Création de l'étape 1
        $load = creationParcours();
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

        // Redirection
        if($load){
            echo "<script>document.location.replace('board');</script>";
        }
        else{
            echo "<script>document.location.replace('index');</script>";
        }

    }

    if(isset($_POST["jouer_parcours"])){

        // Création du parcours
        $parcours = $_POST["parcours"];

        switch($parcours){
            case "TDF2021":
                loadTDF2021($pdo, $room);
                break;
            case "PARISNICE2021":
                loadParisNice2021($pdo, $room);
                break;
            case "CRITERIUMDUDAUPHINE2021":
                loadCriteriumDuDauphine2021($pdo, $room);
                break;
        }
        

        // Création de l'étape 1
        $load = creationParcours();
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

        // Redirection
        if($load){
            echo "<script>document.location.replace('board');</script>";
        }
        else{
            echo "<script>document.location.replace('index');</script>";
        }

    }

    $list_etape = getListeAllEtape($pdo, $mode);
?>

<body class="text-center text-white" style="padding:10%;">

    <div class="container">
        <div class="row">

            <!-- CREATION DU PARCOURS -->
            <div class="col-lg-6">
                <div style="background-color:rgba(110, 110, 110, 0.9); padding:15px; border: 3px solid black; border-radius: 25px;">
                    <h3>Création du parcours</h3>
                    <hr/>

                    <form method="POST">

                        <!-- LISTE DES ETAPES -->
                        <div class="form-group">
                            <label for="etape">Liste des étapes : </label>
                            <select class="form-control" name="etape" id="etape">
                                <?php
                                    foreach($list_etape as $etape){
                                        echo "<option value='".$etape["code"]."'>".$etape["nom"]."</option>";
                                    }
                                ?>
                            </select>
                        </div>

                        <!-- SUBMIT -->
                        <button type="submit" name="ajouter" class="btn btn-warning text-dark" style="width:50%; border-radius:25px;"><b>Ajouter</b></button>

                    </form>

                    <hr/>

                    <!-- Liste des étapes -->
                    <h3>Liste des étapes</h3>
                    <ul>
                        <?php
                            $list_etape = getListeEtape($pdo, $room);
                            foreach($list_etape as $etape){
                                echo "<li>".$etape["nom"]."</li>";
                            }
                        ?>
                    </ul>

                    <hr/>

                    <!-- JOUER -->
                    <form method="POST">
                        <button type="submit" name="jouer" class="btn btn-warning text-dark" style="width:50%; border-radius:25px;"><b>Jouer</b></button>
                    </form>

                </div>
            </div>


            <!-- CHOIX DU PARCOURS -->
            <?php if($mode == "classique"){ ?>
            <div class="col-lg-6">
                <div style="background-color:rgba(110, 110, 110, 0.9); padding:15px; border: 3px solid black; border-radius: 25px;">
                    <h3>Choix du parcours</h3>
                    <hr/>

                    <form method="POST">

                        <!-- LISTE DES ETAPES -->
                        <div class="form-group">
                            <label for="parcours">Liste des parcours : </label>
                            <select class="form-control" name="parcours" id="parcours">
                                <option value='TDF2021'>Tour de France 2021</option>
                                <option value='PARISNICE2021'>Paris Nice 2021</option>
                                <option value='CRITERIUMDUDAUPHINE2021'>Critérium du Dauphiné 2021</option>
                            </select>
                        </div>

                        <!-- SUBMIT -->
                        <button type="submit" name="jouer_parcours" class="btn btn-warning text-dark" style="width:50%; border-radius:25px;"><b>Jouer</b></button>

                    </form>

                </div>
            </div>
            <?php } ?>

        </div>
    </div>

</body>
</html>