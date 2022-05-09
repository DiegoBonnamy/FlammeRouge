<?php
    include("fragments/head.php");

    // Si joueur enregistré > redirection
    if($joueur != null){
        $inGame = inGame($pdo, $room, $joueur["id"]);
        if($inGame != null){
            $_SESSION["team"] = $inGame["team"];
            echo "<script>document.location.replace('board');</script>";
        }
    }

    $createur = null;
    $filtre = null;

    $lockVert = $lockRouge = $lockBleu = $lockNoir = false;
    $choix = false;

    // Récup des joueurs inGame
    $inGame = getAllInGame($pdo, $room);
    foreach($inGame as $e){
        if($e["team"] == "Vert" && $joueur["id"] != $e["joueur_id"]){
            $lockVert = true;
        }
        if($e["team"] == "Rouge" && $joueur["id"] != $e["joueur_id"]){
            $lockRouge = true;
        }
        if($e["team"] == "Bleu" && $joueur["id"] != $e["joueur_id"]){
            $lockBleu = true;
        }
        if($e["team"] == "Noir" && $joueur["id"] != $e["joueur_id"]){
            $lockNoir = true;
        }
    }

    if(isset($_POST["Vert"])){
        if(!$lockVert){
            $_SESSION["team"] = "Vert";
            $choix = true;
        }
    }
    if(isset($_POST["Rouge"])){
        if(!$lockRouge){
            $_SESSION["team"] = "Rouge";
            $choix = true;
        }
    }
    if(isset($_POST["Bleu"])){
        if(!$lockBleu){
            $_SESSION["team"] = "Bleu";
            $choix = true;
        }
    }
    if(isset($_POST["Noir"])){
        if(!$lockNoir){
            $_SESSION["team"] = "Noir";
            $choix = true;
        }     
    }

    if($choix && $joueur != null){
        insertInGame($pdo, $room, $joueur["id"], $_SESSION["team"]);
    }

    if(isset($_SESSION["team"])){
        if($team == getPartie($pdo, $room)["createur"]){
            // Création du parcours
            creationParcours();
        }

        // Redirection
        echo "<script>document.location.replace('board');</script>";
    }

?>

<body class="text-center">

    <br/><br/>

    <form method="POST">
        <div class="row" style="width:99%;">
            <div class="col">
                <button type="submit" name="Vert" style="background-color:rgba(110, 110, 110, 0); border:none;">
                    <?php
                        if($lockVert){
                            $filtre = 'style="filter: grayscale(100%);"';
                        }
                        else{
                            $filtre = null;
                        }
                    ?>
                    <img src="images/plateau/Vert.png" <?php echo $filtre; ?> />
                </button>
            </div>
            <div class="col">
                <button type="submit" name="Rouge" style="background-color:rgba(110, 110, 110, 0); border:none;">
                    <?php
                        if($lockRouge){
                            $filtre = 'style="filter: grayscale(100%);"';
                        }
                        else{
                            $filtre = null;
                        }
                    ?>
                    <img src="images/plateau/Rouge.png" <?php echo $filtre; ?> />
                </button>
            </div>
        </div>

        <br/><br/><br/>

        <div class="row" style="width:99%;">
            <div class="col">
                <button type="submit" name="Bleu" style="background-color:rgba(110, 110, 110, 0); border:none;">
                <?php
                        if($lockBleu){
                            $filtre = 'style="filter: grayscale(100%);"';
                        }
                        else{
                            $filtre = null;
                        }
                    ?>
                    <img src="images/plateau/Bleu.png" <?php echo $filtre; ?> />
                </button>
            </div>
            <div class="col">
                <button type="submit" name="Noir" style="background-color:rgba(110, 110, 110, 0); border:none;">
                    <?php
                        if($lockNoir){
                            $filtre = 'style="filter: grayscale(100%);"';
                        }
                        else{
                            $filtre = null;
                        }
                    ?>
                    <img src="images/plateau/Noir.png" <?php echo $filtre; ?> />
                </button>
            </div>
        </div>
    </form>

</body>
</html>