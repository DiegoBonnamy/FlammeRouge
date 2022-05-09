<?php
    include("fragments/head.php");
?>

<body class="text-center text-white" style="padding:10%;">

    <div class="container">
        <div class="row">

            <!-- REGLES DU JEU -->
            <div class="col">
                <div style="background-color:rgba(110, 110, 110, 0.9); padding:15px; border: 3px solid black; border-radius: 25px; margin-left: 20%; margin-right: 20%;">
                    
                    <h3>Règles du jeu</h3>

                    <hr/>

                    <h5>But du jeu</h5>
                    <p class="text-justify">
                        Flamme Rouge est un jeu de course cycliste
                        dans lequel chaque joueur contrôle une équipe de deux coureurs :
                        un rouleur (n°1) et un sprinteur (n°2). Les joueurs déplacent leurs coureurs en
                        jouant des cartes qui indiquent de combien de cases ils avancent.
                        Le premier coureur à franchir la ligne d'arrivée gagne l'étape.
                    </p>

                    <h5>Droulement d'un tour</h5>
                    <p class="text-justify">
                        Au début du tour, chaque coureur reçoit 4 carte. Le joueur choisi une carte par
                        coureur qui définira de combien de case il va avancer. Une carte jouée et définitivement
                        retiré du jeu pour l'étape, les autres sont recyclées. Chaque coureur possède 15 cartes : <br/>
                        Rouleur (3, 4, 5, 6, 7)*3 / Sprinteur (2, 3, 4, 5, 9)*3<br/>
                    </p>
                    <p class="text-justify">
                        Une fois que tous les joueurs ont choisi leur cartes, les cyclistes sont avancé selon
                        la valeur de la carte joué. Le cycliste le plus avancé commence.
                    </p>
                    <p class="text-justify">
                        Quand tous les cyclistes ont été avancé on applique l'aspiration.
                        C'est à dire que si un cycliste se trouve à une case d'ecart
                        du cycliste qui le précède, alors on l'avance d'une case.
                    </p>
                    <p class="text-justify">
                        Maintenant que chaque cycliste est à sa place on applique la fatigue.
                        Chaque cycliste n'ayant personne devant lui recoit une carte fatigue
                        dans son deck (carte de valeur 2).
                    </p>

                    <h5>Les montées</h5>
                    <p class="text-justify">
                        Les montée sont indiquées par des cases rouges. Un cycliste démarrant, arrivant ou passant
                        sur une case rouge verra sa carte bridé à 5 si celle-ci est supérieur.
                        De plus un cycliste sur une case montée ne benificera pas et ne donnera pas d'aspiration.
                    </p>

                    <h5>Les descentes</h5>
                    <p class="text-justify">
                        Les descentes sont indiqués par des cases bleues. Un cyclistes démarrant d'une case bleue
                        verra ses cartes inférieurs à 5 devenir des 5. (Même les cartes fatigues).
                    </p>

                    <h5>Les pavées</h5>
                    <p class="text-justify">
                        Sur les pavés, l'aspiration n'est pas appliquée.
                        Si les crevaison sont actives alors vous avez une chance de perser.
                        En cas de crevaison vous devez attendre la voiture de dépannage qui
                        n'arrivera que si vous êtes en queue de groupe.
                    </p>

                    <h5>Les chutes</h5>
                    <p class="text-justify">
                        Ne s'applique que si elles ont été activées par le créateur de la partie.
                        Si un coureur arrive sur une case totalement pleine alors il sera placé
                        derrière. Il aura donc une chance de chuté selon la valeur défini par le créateur
                        de la partie. Si le coureur chute, lors de son prochain tour la valeur de sa carte se verra
                        diminée de 2. En revanche si les chutes sont en mode "réaliste" le coureur
                        a un risque de rester au sol !
                    </p>
                
                </div>
            </div>

        </div>
    </div>

</body>
</html>