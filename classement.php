<?php
    include("fragments/head.php");
?>

<body class="text-center text-white" style="padding:10%;">

    <div class="container">
        <div class="row">

            <!-- REGLES DU JEU -->
            <div class="col">
                <div style="background-color:rgba(110, 110, 110, 0.9); padding:15px; border: 3px solid black; border-radius: 25px; margin-left: 10%; margin-right: 10%;">
                    
                    <h3>Classement</h3>

                    <hr/>

                    <table class="table table-striped table-dark">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Joueur</th>
                                <th scope="col">Niveau</th>
                                <th scope="col">Rang</th>
                                <th scope="col">Winrate</th>
                                <th scope="col">Nombre de parties jouées</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i = 1;
                                $list_joueurs = getAllJoueurs($pdo);
                                foreach($list_joueurs as $joueur){

                                    echo '<tr>';

                                        echo '<th scope="row">'.$i.'</th>';
                                        echo '<td>'.$joueur["login"].'</td>';
                                        echo '<td> lvl. '.getNiveau($joueur["xp"]).'</td>';
                                        echo '<td>'.getRang($joueur["rang"]).'</td>';
                                        echo '<td>'.round($joueur["nbVictoires"]/$joueur["nbParties"]*100,2).'%</td>';
                                        echo '<td>'.$joueur["nbParties"].'</td>';

                                    echo '</tr>';

                                    $i++;
                                }
                            ?>
                        </tbody>
                    </table>
                
                </div>
            </div>

        </div>
    </div>

</body>
</html>