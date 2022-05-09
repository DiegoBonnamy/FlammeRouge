<?php
    include("fragments/head.php");

    $message = null;

    $list_parties = getListeParties($pdo);

    // Reset des sessions
    $_SESSION["room"] = null;
    $_SESSION["team"] = null;

    if($joueur != null){
        $joueurBDD = getJoueur($pdo, $joueur["login"]);
        $_SESSION["joueur"] = $joueurBDD;
        $joueur = $_SESSION["joueur"];
    }

    if(isset($_POST["start"])){
        $_SESSION["room"] = $_POST["room"];

        // Redirection
        echo "<script>document.location.replace('choixEquipe');</script>";
    }

    if(isset($_POST["delete"])){
        $room = $_POST["room"];

        /* SUPPRESSION DE LA PARTIE */

        // InGame
        resetInGame($pdo, $room);

        // BoardCase
        deleteBoardCase($pdo, $room);

        // Cartes
        deleteCartes($pdo, $room);

        // Clsmt Etape
        resetClsmtEtape($pdo, $room);

        // Clsmt General
        resetClsmtGeneral($pdo, $room);

        // Clsmt Sprint
        resetClsmtSprintGeneral($pdo, $room);
        resetClsmtSprint($pdo, $room);

        // Clsmt Montagne
        resetClsmtMontagneGeneral($pdo, $room);
        resetClsmtMontagne($pdo, $room);

        // Ecart
        deleteEcart($pdo, $room);

        // Jouer
        resetJouer($pdo, $room);

        // Liste Parcours
        deleteAllEtapes($pdo, $room);

        // Position
        deletePositionBDD($pdo, $room);

        // Partie
        deletePartie($pdo, $room);


        // On recharge la liste
        $list_parties = getListeParties($pdo);

        $message = '<div width="50%" class="alert alert-success" role="alert">Partie n°'.$room.' suprimée avec succès</div>';
        
    }

?>

<body class="text-center text-white">

    <img src="Images/menu/logo.png" style="margin: 50px;"/>

    <?php echo $message; ?>

    <div class="container">
        <div class="row">

            <!-- LISTE DES PARTIES -->
            <div class="col-lg-4">
                <div style="background-color:rgba(110, 110, 110, 0.9); padding:15px; border: 3px solid black; border-radius: 25px;">
                    <h3>Listes des parties</h3>
                    <hr/>
                    <?php
                        foreach($list_parties as $partie){
                    ?>

                        <form method="POST" style="margin-bottom:25px;">
                            <input type="hidden" name="room" class="form-control" value="<?php echo $partie["room"]; ?>" />
                            <div class="input-group">
                                <input type="text" name="nom" class="form-control width100" value="<?php echo $partie["nom"]; ?>" style="height:50px;" readonly />
                                <span class="input-group-btn">
                                    <?php
                                        if(!testBoardCase($pdo, $partie["room"])){
                                    ?>
                                        <button class="btn text-dark" style="background-color: #c2c2c2; margin:0; height:50px;"><i class="fas fa-lg fa-hourglass-start"></i></button>
                                    <?php
                                        }
                                        elseif(getEtape($pdo, $partie["room"]) == null){
                                    ?>
                                        <button class="btn btn-danger text-dark" style="margin:0; height:50px;"><i class="fas fa-lg fa-times"></i></button>
                                    <?php
                                        }
                                        else{
                                    ?>
                                        <button type="submit" name="start" class="btn btn-success text-dark" style="margin:0; height:50px;"><i class="fas fa-lg fa-play"></i></button>
                                    <?php
                                        }
                                    ?>
                                    <?php
                                        if(isset($_GET["root"])){
                                            echo '<button type="submit" name="delete" class="btn btn-danger text-dark" style="margin:0; height:50px;"><i class="fas fa-lg fa-trash"></i></button>';
                                        }
                                    ?>
                                </span>
                            </div>
                        </form>

                    <?php
                        }
                    ?>
                </div>
            </div>

            <!-- OPTIONS -->
            <div class="col-lg-4">
                <div style="background-color:rgba(110, 110, 110, 0.9); padding:15px; border: 3px solid black; border-radius: 25px;">
                    <h3>Options</h3>
                    <hr/>

                    <!-- CREER UNE PARTIE -->
                    <a href="choixMode" class="btn btn-lg btn-warning text-dark" style="border-radius:25px; width:100%;"><b>Créer une partie</b></a>

                    <hr/>

                    <!-- CLASSEMENT -->
                    <a href="classement" class="btn btn-lg btn-warning text-dark" style="border-radius:25px; width:100%;"><b>Classement</b></a>

                    <!-- REGLES -->
                    <a href="regles" class="btn btn-lg btn-warning text-dark" style="border-radius:25px; width:100%;"><b>Règles du jeu</b></a>

                    <!-- NOUVEAUTES -->
                    <a href="nouveautes" class="btn btn-lg btn-warning text-dark" style="border-radius:25px; width:100%;"><b>Nouveautées</b></a>

                    <hr/>

                    <div class="text-right" style="margin-top:15px;">
                        <span>v 3.3.0</span>
                    </div>
                </div>
            </div>

            <!-- COMPTE -->
            <div class="col-lg-4">
                <div style="background-color:rgba(110, 110, 110, 0.9); padding:15px; border: 3px solid black; border-radius: 25px;">
                    <?php
                        if($joueur != null){
                    ?>

                        <!-- INFOS -->
                        <h3>Bienvenue <?php echo $joueur["login"]; ?></h3>
                        <hr/>

                        <!-- NIVEAU -->
                        <div width="100%" class="text-left">
                            Niveau <?php echo getNiveau($joueur["xp"]); ?>
                        </div>

                        <!-- BARRE D'XP -->
                        <?php echo getProgressBarXp($joueur["xp"]); ?>

                        <hr/>

                        <!-- RANG EQUIPE -->
                        <h4><?php echo getRang($joueur["rang"]); ?></h4>

                        <!-- BARRE RANG -->
                        <?php echo getProgressBarRang($joueur["rang"]); ?>

                        <!-- NOMBRE PARTIE -->
                        <div width="100%" class="text-right" style="margin-top:25px;">
                            Etapes jouées : <?php echo $joueur["nbParties"]; ?><br/>
                            Etapes gagnées : <?php echo $joueur["nbVictoires"]; ?>
                        </div>

                        <!-- WINRATE -->
                        <div width="100%" class="text-center" style="margin-top:25px;">
                            <h5>Winrate : <?php echo round($joueur["nbVictoires"]/$joueur["nbParties"]*100,2)."%"; ?></h5>
                        </div>

                        <hr/>

                        <!-- DECONNEXION -->
                        <a href="deconnexion" class="btn btn-lg btn-danger text-dark" style="border-radius:25px; width:100%;"><b>Déconnexion</b></a>

                    <?php
                        }
                        else{
                    ?>

                        <h3>Se Connecter</h3>
                        <hr/>

                        <!-- CONNEXION -->
                        <a href="connexion" class="btn btn-lg btn-warning text-dark" style="border-radius:25px; width:100%;"><b>Connexion</b></a>

                        <!-- CREER UN COMPTE -->
                        <a href="creerCompte" class="btn btn-lg btn-warning text-dark" style="border-radius:25px; width:100%;"><b>Créer un compte</b></a>

                    <?php
                        }
                    ?>
                </div>
            </div>

        </div>
    </div>

</body>
</html>