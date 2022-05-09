<?php
    include("fragments/head.php");

    $message = null;

    if(isset($_POST["connexion"])){

        $login = $_POST["login"];
        $password = $_POST["password"];

        $joueurBDD = getJoueur($pdo, $login);

        if(hash_equals($joueurBDD["password"], crypt($password, $joueurBDD["password"]))){
            $_SESSION["joueur"] = $joueurBDD;
            // Redirection
            echo "<script>document.location.replace('index');</script>";
        }
        else{
            $message = '<div width="50%" class="alert alert-danger" role="alert">Pseudo ou mot de passe incorrect</div>';
        }

    }
?>

<body class="text-center text-white" style="padding:10%;">

    <?php echo $message; ?>

    <div class="container">
        <div class="row">

            <!-- CREATION DU COMPTE -->
            <div class="col">
                <div style="background-color:rgba(110, 110, 110, 0.9); padding:15px; border: 3px solid black; border-radius: 25px; margin-left: 20%; margin-right: 20%;">
                    <h3>Connexion</h3>
                    <hr/>

                    <form method="POST">

                        <!-- PSEUDO / LOGIN -->
                        <div class="form-group">
                            <label for="login">Pseudo : </label>
                            <input type="text" name="login" class="form-control" id="login" required>
                        </div>

                        <!-- PASSWORD -->
                        <div class="form-group">
                            <label for="password">Mot de passe : </label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>

                        <!-- SUBMIT -->
                        <button type="submit" name="connexion" class="btn btn-warning text-dark" style="width:50%; border-radius:25px;"><b>Creer</b></button>

                    </form>

                </div>
            </div>

        </div>
    </div>

</body>
</html>