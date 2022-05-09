<?php
    include("fragments/head.php");

    $message = null;

    if(isset($_GET["mode"]) && $_GET["mode"] == "etendu"){
        $mode = "etendu";
    }
    else{
        $mode = "classique";
    }

    if(isset($_POST["creer"])){

        $mode = $_POST["mode"];
        if($mode != "etendu"){
            $mode = "classique";
        }

        $nom = $_POST["nom"];
        $nbJoueur = $_POST["nbJoueurs"];
        $chute = $_POST["chute"];
        $mode_chute = $_POST["modeChute"];
        $crevaison = $_POST["crevaison"];
        $createur = $_POST["createur"];
        $meteo = $_POST["meteo"];
        $difficulte = $_POST["difficulte"];

        $correct = false;

        if($nom != "" && $nbJoueur >= 1 && $nbJoueur <= 4 && $chute >= 0 && $createur != null){
            $correct = true;
        }

        if($correct){
            // Création de la partie
            $room = setPartie($pdo, $nom, $nbJoueur, $chute, $mode_chute, $crevaison, $createur, $mode, $meteo, $difficulte);

            $_SESSION["room"] = $room;
            $_SESSION["team"] = $createur;

            if($mode == "etendu"){
                // Ajout des autres cyclistes
                array_push($list_cycliste, 
                    new Cycliste("RB2", "Rouleur", "Blanc", 2),
                    new Cycliste("SB2", "Sprinteur", "Blanc", 2),
                    new Cycliste("RC1", "Rouleur", "Cyan", 1),
                    new Cycliste("SC1", "Sprinteur", "Cyan", 1),
                    new Cycliste("RG1", "Rouleur", "Gris", 1),
                    new Cycliste("SG1", "Sprinteur", "Gris", 1),
                    new Cycliste("RM1", "Rouleur", "Marron", 1),
                    new Cycliste("SM1", "Sprinteur", "Marron", 1),
                    new Cycliste("RO1", "Rouleur", "Orange", 1),
                    new Cycliste("SO1", "Sprinteur", "Orange", 1),
                    new Cycliste("RR2", "Rouleur", "Rose", 2),
                    new Cycliste("SR2", "Sprinteur", "Rose", 2),
                    new Cycliste("RT1", "Rouleur", "Turquoise", 1),
                    new Cycliste("ST1", "Sprinteur", "Turquoise", 1),
                    new Cycliste("RV2", "Rouleur", "Violet", 2),
                    new Cycliste("SV2", "Sprinteur", "Violet", 2),
                );
            }

            if($joueur != null){
                insertInGame($pdo, $room, $joueur["id"], $createur);
            }

            // Initialisation des classements
            initClsmtGeneral($pdo, $room);
            initClsmtEtape($pdo, $room);
            initClsmtSprintGeneral($pdo, $room);
            initClsmtMontagneGeneral($pdo, $room);  

            // Initialisation des positions
            initPositionBDD($pdo, $room);

            // Redirection
            echo "<script>document.location.replace('choixParcours');</script>";
        }
        else{
            $message = '<div width="50%" class="alert alert-danger" role="alert">Impossible de creer la partie</div>';
        }
    }
?>

<body class="text-center text-white" style="padding:10%;">

    <?php echo $message; ?>

    <div class="container">
        <div class="row">

            <!-- CREATION DE LA PARTIE -->
            <div class="col">
                <div style="background-color:rgba(110, 110, 110, 0.9); padding:15px; border: 3px solid black; border-radius: 25px; margin-left: 20%; margin-right: 20%;">
                    <h3>Création de la partie</h3>
                    <hr/>

                    <form method="POST">

                        <input type="hidden" name="mode" class="form-control" id="mode" value="<?php echo $mode; ?>" required>

                        <!-- NOM -->
                        <div class="form-group">
                            <label for="nom">Nom : </label>
                            <input type="text" name="nom" class="form-control" id="nom" required>
                        </div>

                        <!-- NB JOUEURS -->
                        <div class="form-group">
                            <label for="nbJoueurs">Nombre de joueur : </label>
                            <input type="number" max="4" min="1" name="nbJoueurs" class="form-control" id="nbJoueurs" required>
                        </div>

                        <!-- POURCENTAGE CHUTE -->
                        <div class="form-group">
                            <label for="chute">Pourcentage chute : </label>
                            <input type="number" max="100" min="0" name="chute" class="form-control" id="chute" required>%
                        </div>

                        <!-- MODE CHUTE -->
                        <div class="form-group">
                            <label>Mode chute : </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="modeChute" id="modeChuteClassique" value="classique" checked>
                                <label class="form-check-label" for="modeChuteClassique">Classique</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="modeChute" id="modeChuteRealiste" value="realiste">
                                <label class="form-check-label" for="modeChuteRealiste">Réaliste</label>
                            </div>
                        </div>

                        <!-- CREVAISON -->
                        <div class="form-group">
                            <label>Crevaisons : </label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="crevaison" id="crevaisonActive" value="1" checked>
                                <label class="form-check-label" for="crevaisonActive">Activées</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="crevaison" id="crevaisonDesactive" value="0">
                                <label class="form-check-label" for="crevaisonDesactive">Désactivées</label>
                            </div>
                        </div>

                        <!-- METEO -->
                        <div class="form-group">
                            <label for="meteo">Météo : </label>
                            <select class="form-control" name="meteo" id="meteo">
                                <option value="random">Random</option>
                                <option value="beau">Beau</option>
                                <option value="pluie">Pluie</option>
                                <option value="vent">Vent</option>
                            </select>
                        </div>

                        <!-- CREATEUR -->
                        <div class="form-group">
                            <label for="createur">Vos coureurs : </label>
                            <select class="form-control" name="createur" id="createur">
                                <option value="Vert">Vert</option>
                                <option value="Rouge">Rouge</option>
                                <option value="Bleu">Bleu</option>
                                <option value="Noir">Noir</option>
                            </select>
                        </div>

                        <!-- DIFFICULTE -->
                        <div class="form-group">
                            <label for="difficulte">Difficulté des bots : </label>
                            <select class="form-control" name="difficulte" id="difficulte">
                                <option value="1">Facile</option>
                                <option value="2">Moyen</option>
                                <option value="3">Difficile</option>
                                <option value="4">Légende</option>
                            </select>
                        </div>

                        <!-- SUBMIT -->
                        <button type="submit" name="creer" class="btn btn-warning text-dark" style="width:50%; border-radius:25px;"><b>Creer</b></button>

                    </form>

                </div>
            </div>

        </div>
    </div>

</body>
</html>