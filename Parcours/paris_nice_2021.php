<?php

    function loadParisNice2021($pdo, $room){
        addEtape($pdo, $room, "paris_nice_2021_etape1", "paris_nice_2021");
        addEtape($pdo, $room, "paris_nice_2021_etape2", "paris_nice_2021");
        addEtape($pdo, $room, "paris_nice_2021_etape3", "paris_nice_2021");
        addEtape($pdo, $room, "paris_nice_2021_etape4", "paris_nice_2021");
        addEtape($pdo, $room, "paris_nice_2021_etape5", "paris_nice_2021");
        addEtape($pdo, $room, "paris_nice_2021_etape6", "paris_nice_2021");
        addEtape($pdo, $room, "paris_nice_2021_etape7", "paris_nice_2021");
        addEtape($pdo, $room, "paris_nice_2021_etape8", "paris_nice_2021");
    }

    /* LISTE DES ETAPES */

    function paris_nice_2021_etape1($pdo, $room){

        $req="DELETE FROM `BoardCase` WHERE room=$room";
        $pdo->exec($req);

        $req="
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,1,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,2,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,3,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,4,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,5,2,'Start','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,6,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,7,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,8,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,9,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,10,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,11,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,12,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,13,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,14,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,15,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,16,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,17,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,18,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,19,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,20,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,21,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,22,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,23,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,24,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,25,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,26,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,27,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,28,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,29,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,30,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,31,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,32,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,33,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,34,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,35,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,36,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,37,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,38,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,39,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,40,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,41,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,42,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,43,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,44,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,45,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,46,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,47,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,48,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,49,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,50,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,51,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,52,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,53,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,54,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,55,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,56,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,57,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,58,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,59,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,60,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,61,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,62,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,63,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,64,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,65,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,66,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,67,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,68,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,69,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,70,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,71,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,72,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,73,2,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,74,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,75,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,76,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,77,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,78,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,79,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,80,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,81,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,82,2,'Finish','Plat');
        ";
        $pdo->exec($req);
    }

    function paris_nice_2021_etape2($pdo, $room){

        $req="DELETE FROM `BoardCase` WHERE room=$room";
        $pdo->exec($req);

        $req="
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,1,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,2,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,3,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,4,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,5,2,'Start','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,6,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,7,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,8,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,9,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,10,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,11,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,12,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,13,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,14,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,15,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,16,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,17,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,18,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,19,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,20,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,21,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,22,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,23,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,24,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,25,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,26,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,27,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,28,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,29,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,30,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,31,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,32,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,33,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,34,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,35,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,36,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,37,1,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,38,1,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,39,1,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,40,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,41,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,42,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,43,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,44,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,45,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,46,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,47,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,48,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,49,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,50,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,51,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,52,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,53,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,54,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,55,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,56,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,57,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,58,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,59,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,60,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,61,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,62,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,63,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,64,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,65,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,66,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,67,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,68,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,69,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,70,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,71,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,72,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,73,2,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,74,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,75,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,76,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,77,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,78,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,79,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,80,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,81,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,82,2,'Finish','Plat');
        ";
        $pdo->exec($req);
    }

    function paris_nice_2021_etape3($pdo, $room){

        $req="DELETE FROM `BoardCase` WHERE room=$room";
        $pdo->exec($req);

        $req="
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,1,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,2,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,3,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,4,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,5,2,'Start','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,6,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,7,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,8,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,9,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,10,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,11,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,12,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,13,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,14,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,15,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,16,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,17,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,18,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,19,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,20,1,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,21,1,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,22,1,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,23,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,24,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,25,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,26,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,27,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,28,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,29,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,30,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,31,2,'Finish','Plat');
        ";
        $pdo->exec($req);
    }

    function paris_nice_2021_etape4($pdo, $room){

        $req="DELETE FROM `BoardCase` WHERE room=$room";
        $pdo->exec($req);

        $req="
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,1,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,2,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,3,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,4,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,5,2,'Start','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,6,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,7,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,8,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,9,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,10,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,11,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,12,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,13,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,14,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,15,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,16,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,17,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,18,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,19,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,20,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,21,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,22,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,23,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,24,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,25,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,26,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,27,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,28,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,29,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,30,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,31,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,32,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,33,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,34,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,35,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,36,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,37,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,38,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,39,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,40,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,41,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,42,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,43,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,44,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,45,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,46,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,47,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,48,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,49,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,50,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,51,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,52,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,53,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,54,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,55,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,56,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,57,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,58,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,59,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,60,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,61,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,62,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,63,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,64,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,65,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,66,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,67,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,68,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,69,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,70,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,71,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,72,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,73,2,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,74,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,75,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,76,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,77,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,78,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,79,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,80,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,81,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,82,2,'Finish','Plat');
        ";
        $pdo->exec($req);
    }

    function paris_nice_2021_etape5($pdo, $room){

        $req="DELETE FROM `BoardCase` WHERE room=$room";
        $pdo->exec($req);

        $req="
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,1,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,2,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,3,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,4,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,5,2,'Start','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,6,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,7,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,8,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,9,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,10,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,11,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,12,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,13,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,14,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,15,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,16,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,17,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,18,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,19,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,20,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,21,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,22,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,23,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,24,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,25,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,26,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,27,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,28,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,29,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,30,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,31,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,32,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,33,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,34,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,35,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,36,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,37,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,38,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,39,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,40,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,41,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,42,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,43,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,44,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,45,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,46,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,47,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,48,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,49,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,50,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,51,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,52,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,53,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,54,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,55,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,56,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,57,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,58,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,59,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,60,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,61,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,62,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,63,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,64,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,65,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,66,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,67,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,68,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,69,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,70,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,71,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,72,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,73,2,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,74,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,75,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,76,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,77,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,78,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,79,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,80,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,81,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,82,2,'Finish','Plat');
        ";
        $pdo->exec($req);
    }

    function paris_nice_2021_etape6($pdo, $room){

        $req="DELETE FROM `BoardCase` WHERE room=$room";
        $pdo->exec($req);

        $req="
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,1,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,2,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,3,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,4,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,5,2,'Start','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,6,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,7,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,8,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,9,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,10,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,11,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,12,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,13,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,14,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,15,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,16,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,17,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,18,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,19,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,20,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,21,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,22,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,23,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,24,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,25,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,26,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,27,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,28,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,29,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,30,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,31,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,32,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,33,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,34,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,35,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,36,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,37,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,38,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,39,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,40,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,41,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,42,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,43,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,44,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,45,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,46,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,47,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,48,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,49,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,50,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,51,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,52,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,53,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,54,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,55,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,56,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,57,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,58,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,59,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,60,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,61,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,62,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,63,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,64,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,65,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,66,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,67,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,68,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,69,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,70,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,71,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,72,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,73,2,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,74,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,75,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,76,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,77,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,78,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,79,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,80,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,81,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,82,2,'Finish','Plat');
        ";
        $pdo->exec($req);
    }

    function paris_nice_2021_etape7($pdo, $room){

        $req="DELETE FROM `BoardCase` WHERE room=$room";
        $pdo->exec($req);

        $req="
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,1,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,2,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,3,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,4,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,5,2,'Start','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,6,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,7,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,8,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,9,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,10,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,11,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,12,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,13,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,14,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,15,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,16,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,17,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,18,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,19,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,20,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,21,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,22,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,23,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,24,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,25,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,26,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,27,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,28,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,29,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,30,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,31,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,32,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,33,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,34,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,35,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,36,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,37,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,38,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,39,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,40,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,41,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,42,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,43,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,44,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,45,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,46,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,47,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,48,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,49,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,50,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,51,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,52,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,53,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,54,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,55,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,56,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,57,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,58,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,59,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,60,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,61,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,62,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,63,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,64,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,65,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,66,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,67,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,68,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,69,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,70,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,71,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,72,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,73,2,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,74,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,75,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,76,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,77,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,78,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,79,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,80,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,81,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,82,2,'Finish','Plat');
        ";
        $pdo->exec($req);
    }

    function paris_nice_2021_etape8($pdo, $room){

        $req="DELETE FROM `BoardCase` WHERE room=$room";
        $pdo->exec($req);

        $req="
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,1,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,2,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,3,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,4,2,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,5,2,'Start','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,6,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,7,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,8,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,9,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,10,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,11,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,12,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,13,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,14,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,15,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,16,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,17,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,18,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,19,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,20,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,21,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,22,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,23,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,24,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,25,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,26,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,27,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,28,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,29,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,30,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,31,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,32,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,33,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,34,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,35,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,36,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,37,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,38,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,39,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,40,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,41,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,42,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,43,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,44,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,45,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,46,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,47,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,48,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,49,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,50,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,51,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,52,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,53,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,54,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,55,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,56,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,57,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,58,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,59,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,60,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,61,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,62,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,63,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,64,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,65,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,66,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,67,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,68,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,69,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,70,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,71,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,72,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,73,2,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,74,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,75,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,76,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,77,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,78,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,79,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,80,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,81,2,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,82,2,'Finish','Plat');
        ";
        $pdo->exec($req);
    }

    /* MODELE */

    /*
        function paris_nice_2021_etape0($pdo, $room){

            $req="DELETE FROM `BoardCase` WHERE room=$room";
            $pdo->exec($req);

            $req="
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,1,2,'Start','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,2,2,'Start','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,3,2,'Start','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,4,2,'Start','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,5,2,'Start','Plat');

                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,6,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,7,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,8,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,9,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,10,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,11,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,12,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,13,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,14,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,15,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,16,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,17,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,18,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,19,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,20,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,21,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,22,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,23,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,24,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,25,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,26,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,27,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,28,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,29,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,30,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,31,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,32,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,33,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,34,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,35,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,36,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,37,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,38,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,39,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,40,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,41,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,42,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,43,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,44,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,45,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,46,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,47,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,48,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,49,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,50,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,51,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,52,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,53,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,54,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,55,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,56,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,57,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,58,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,59,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,60,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,61,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,62,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,63,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,64,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,65,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,66,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,67,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,68,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,69,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,70,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,71,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,72,2,'Asphalte','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,73,2,'Asphalte','Plat');

                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,74,2,'Finish','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,75,2,'Finish','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,76,2,'Finish','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,77,2,'Finish','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,78,2,'Finish','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,79,2,'Finish','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,80,2,'Finish','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,81,2,'Finish','Plat');
                INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,82,2,'Finish','Plat');
            ";
            $pdo->exec($req);
        }
    */

?>