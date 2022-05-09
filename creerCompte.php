<?php
    include("fragments/head.php");

    $message = null;

    if(isset($_POST["creer"])){

        $login = $_POST["login"];
        $password = $_POST["password"];
        $confirmPassword = $_POST["confirmPassword"];

        if($password == $confirmPassword){
            createJoueur($pdo, $login, crypt($password));

            // Redirection
            echo "<script>document.location.replace('connexion');</script>";
        }
        else{
            $message = '<div width="50%" class="alert alert-danger" role="alert">Les mots de passes ne correspondent pas</div>';
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
                    <h3>Création du compte</h3>
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

                        <!-- CONFIRMATION -->
                        <div class="form-group">
                            <label for="confirmPassword">Confirmation : </label>
                            <input type="password" name="confirmPassword" class="form-control" id="confirmPassword" required>
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