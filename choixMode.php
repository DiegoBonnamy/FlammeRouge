<?php
    include("fragments/head.php");
?>

<body class="text-center text-white" style="padding:10%;">

    <div class="container">
        <div class="row">

            <!-- MODE DE JEU -->

            <div class="col-lg-6">
                <div style="background-color:rgba(110, 110, 110, 0.9); padding:15px; border: 3px solid black; border-radius: 25px;">
                    
                    <h3>Classique</h3>
                    <img src="Images/plateau/classique.png" width="100%" style="border 5px grey;" />
                    <a href="creerPartie?mode=classique" class="btn btn-lg btn-warning text-dark" style="border-radius:25px; width:100%;"><b>Jouer</b></a>
                
                </div>
            </div>

            <div class="col-lg-6">
                <div style="background-color:rgba(110, 110, 110, 0.9); padding:15px; border: 3px solid black; border-radius: 25px;">
                    
                    <h3>Etendu</h3>
                    <img src="Images/plateau/etendu.png" width="100%" style="border 5px grey;" />
                    <a href="creerPartie?mode=etendu" class="btn btn-lg btn-warning text-dark" style="border-radius:25px; width:100%;"><b>Jouer</b></a>
                
                </div>
            </div>

        </div>
    </div>

</body>
</html>