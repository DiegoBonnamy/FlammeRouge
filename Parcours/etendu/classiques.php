<?php

    /* LISTE DES ETAPES */

    function tour_de_lombardie_etendu($pdo, $room){

        $req="DELETE FROM `BoardCase` WHERE room=$room";
        $pdo->exec($req);

        $req="
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,1,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,2,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,3,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,4,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,5,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,6,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,7,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,8,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,9,3,'Start','Plat');



            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,10,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,11,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,12,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,13,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,14,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,15,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,16,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,17,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,18,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,19,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,20,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,21,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,22,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,23,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,24,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,25,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,26,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,27,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,28,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,29,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,30,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,31,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,32,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,33,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,34,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,35,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,36,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,37,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,38,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,39,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,40,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,41,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,42,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,43,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,44,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,45,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,46,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,47,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,48,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,49,3,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,50,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,51,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,52,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,53,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,54,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,55,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,56,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,57,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,58,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,59,3,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,60,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,61,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,62,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,63,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,64,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,65,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,66,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,67,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,68,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,69,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,70,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,71,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,72,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,73,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,74,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,75,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,76,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,77,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,78,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,79,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,80,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,81,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,82,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,83,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,84,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,85,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,86,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,87,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,88,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,89,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,90,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,91,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,92,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,93,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,94,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,95,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,96,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,97,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,98,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,99,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,100,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,101,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,102,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,103,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,104,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,105,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,106,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,107,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,108,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,109,3,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,110,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,111,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,112,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,113,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,114,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,115,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,116,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,117,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,118,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,119,3,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,120,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,121,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,122,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,123,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,124,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,125,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,126,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,127,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,128,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,129,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,130,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,131,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,132,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,133,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,134,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,135,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,136,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,137,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,138,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,139,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,140,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,141,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,142,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,143,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,144,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,145,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,146,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,147,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,148,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,149,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,150,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,151,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,152,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,153,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,154,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,155,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,156,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,157,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,158,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,159,3,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,160,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,161,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,162,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,163,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,164,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,165,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,166,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,167,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,168,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,169,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,170,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,171,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,172,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,173,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,174,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,175,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,176,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,177,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,178,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,179,3,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,180,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,181,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,182,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,183,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,184,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,185,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,186,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,187,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,188,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,189,3,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,190,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,191,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,192,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,193,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,194,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,195,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,196,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,197,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,198,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,199,3,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,200,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,201,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,202,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,203,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,204,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,205,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,206,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,207,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,208,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,209,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,210,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,211,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,212,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,213,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,214,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,215,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,216,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,217,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,218,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,219,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,220,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,221,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,222,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,223,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,224,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,225,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,226,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,227,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,228,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,229,3,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,230,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,231,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,232,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,233,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,234,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,235,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,236,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,237,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,238,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,239,3,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,240,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,241,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,242,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,243,3,'Asphalte','Descente');
            


            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,244,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,245,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,246,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,247,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,248,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,249,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,250,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,251,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,252,3,'Finish','Plat');

        ";
        $pdo->exec($req);
    }

    function paris_roubaix_etendu($pdo, $room){

        $req="DELETE FROM `BoardCase` WHERE room=$room";
        $pdo->exec($req);

        $req="
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,1,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,2,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,3,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,4,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,5,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,6,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,7,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,8,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,9,3,'Start','Plat');



            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,10,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,11,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,12,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,13,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,14,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,15,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,16,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,17,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,18,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,19,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,20,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,21,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,22,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,23,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,24,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,25,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,26,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,27,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,28,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,29,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,30,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,31,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,32,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,33,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,34,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,35,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,36,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,37,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,38,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,39,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,40,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,41,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,42,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,43,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,44,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,45,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,46,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,47,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,48,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,49,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,50,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,51,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,52,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,53,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,54,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,55,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,56,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,57,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,58,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,59,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,60,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,61,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,62,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,63,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,64,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,65,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,66,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,67,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,68,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,69,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,70,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,71,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,72,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,73,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,74,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,75,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,76,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,77,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,78,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,79,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,80,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,81,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,82,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,83,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,84,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,85,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,86,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,87,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,88,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,89,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,90,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,91,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,92,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,93,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,94,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,95,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,96,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,97,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,98,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,99,2,'Paves','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,100,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,101,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,102,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,103,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,104,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,105,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,106,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,107,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,108,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,109,2,'Paves','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,110,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,111,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,112,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,113,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,114,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,115,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,116,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,117,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,118,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,119,3,'Paves','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,120,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,121,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,122,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,123,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,124,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,125,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,126,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,127,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,128,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,129,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,130,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,131,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,132,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,133,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,134,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,135,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,136,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,137,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,138,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,139,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,140,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,141,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,142,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,143,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,144,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,145,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,146,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,147,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,148,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,149,2,'Paves','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,150,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,151,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,152,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,153,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,154,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,155,1,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,156,1,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,157,1,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,158,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,159,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,160,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,161,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,162,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,163,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,164,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,165,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,166,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,167,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,168,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,169,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,170,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,171,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,172,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,173,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,174,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,175,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,176,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,177,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,178,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,179,2,'Paves','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,180,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,181,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,182,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,183,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,184,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,185,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,186,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,187,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,188,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,189,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,190,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,191,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,192,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,193,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,194,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,195,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,196,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,197,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,198,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,199,2,'Paves','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,200,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,201,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,202,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,203,1,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,204,1,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,205,1,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,206,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,207,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,208,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,209,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,210,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,211,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,212,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,213,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,214,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,215,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,216,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,217,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,218,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,219,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,220,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,221,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,222,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,223,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,224,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,225,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,226,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,227,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,228,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,229,2,'Paves','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,230,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,231,1,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,232,1,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,233,1,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,234,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,235,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,236,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,237,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,238,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,239,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,240,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,241,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,242,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,243,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,244,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,245,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,246,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,247,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,248,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,249,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,250,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,251,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,252,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,253,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,254,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,255,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,256,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,257,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,258,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,259,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,260,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,261,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,262,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,263,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,264,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,265,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,266,3,'Asphalte','Plat');
            


            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,267,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,268,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,269,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,270,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,271,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,272,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,273,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,274,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,275,3,'Finish','Plat');

        ";
        $pdo->exec($req);
    }

    function milan_san_remo_etendu($pdo, $room){

        $req="DELETE FROM `BoardCase` WHERE room=$room";
        $pdo->exec($req);

        $req="
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,1,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,2,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,3,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,4,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,5,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,6,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,7,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,8,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,9,3,'Start','Plat');



            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,10,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,11,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,12,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,13,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,14,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,15,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,16,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,17,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,18,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,19,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,20,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,21,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,22,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,23,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,24,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,25,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,26,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,27,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,28,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,29,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,30,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,31,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,32,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,33,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,34,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,35,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,36,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,37,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,38,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,39,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,40,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,41,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,42,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,43,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,44,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,45,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,46,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,47,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,48,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,49,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,50,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,51,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,52,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,53,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,54,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,55,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,56,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,57,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,58,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,59,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,60,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,61,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,62,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,63,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,64,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,65,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,66,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,67,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,68,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,69,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,70,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,71,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,72,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,73,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,74,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,75,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,76,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,77,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,78,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,79,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,80,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,81,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,82,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,83,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,84,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,85,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,86,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,87,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,88,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,89,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,90,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,91,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,92,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,93,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,94,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,95,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,96,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,97,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,98,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,99,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,100,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,101,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,102,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,103,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,104,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,105,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,106,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,107,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,108,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,109,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,110,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,111,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,112,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,113,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,114,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,115,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,116,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,117,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,118,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,119,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,120,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,121,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,122,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,123,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,124,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,125,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,126,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,127,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,128,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,129,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,130,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,131,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,132,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,133,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,134,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,135,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,136,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,137,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,138,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,139,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,140,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,141,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,142,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,143,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,144,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,145,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,146,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,147,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,148,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,149,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,150,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,151,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,152,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,153,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,154,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,155,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,156,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,157,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,158,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,159,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,160,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,161,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,162,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,163,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,164,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,165,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,166,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,167,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,168,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,169,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,170,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,171,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,172,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,173,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,174,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,175,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,176,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,177,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,178,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,179,3,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,180,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,181,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,182,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,183,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,184,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,185,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,186,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,187,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,188,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,189,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,190,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,191,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,192,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,193,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,194,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,195,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,196,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,197,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,198,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,199,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,200,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,201,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,202,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,203,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,204,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,205,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,206,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,207,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,208,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,209,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,210,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,211,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,212,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,213,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,214,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,215,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,216,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,217,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,218,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,219,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,220,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,221,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,222,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,223,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,224,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,225,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,226,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,227,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,228,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,229,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,230,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,231,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,232,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,233,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,234,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,235,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,236,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,237,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,238,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,239,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,240,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,241,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,242,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,243,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,244,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,245,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,246,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,247,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,248,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,249,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,250,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,251,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,252,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,253,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,254,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,255,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,256,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,257,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,258,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,259,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,260,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,261,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,262,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,263,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,264,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,265,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,266,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,267,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,268,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,269,3,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,270,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,271,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,272,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,273,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,274,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,275,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,276,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,277,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,278,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,279,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,280,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,281,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,282,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,283,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,284,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,285,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,286,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,287,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,288,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,289,3,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,290,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,291,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,292,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,293,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,294,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,295,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,296,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,297,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,298,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,299,3,'Asphalte','Montee');
            
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,300,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,301,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,302,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,303,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,304,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,305,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,306,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,307,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,308,3,'Asphalte','Plat');
            


            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,309,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,310,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,311,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,312,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,313,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,314,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,315,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,316,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,317,3,'Finish','Plat');

        ";
        $pdo->exec($req);
    }

    function tour_des_flandres_etendu($pdo, $room){

        $req="DELETE FROM `BoardCase` WHERE room=$room";
        $pdo->exec($req);

        $req="
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,1,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,2,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,3,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,4,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,5,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,6,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,7,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,8,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,9,3,'Start','Plat');



            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,10,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,11,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,12,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,13,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,14,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,15,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,16,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,17,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,18,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,19,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,20,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,21,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,22,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,23,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,24,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,25,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,26,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,27,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,28,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,29,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,30,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,31,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,32,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,33,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,34,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,35,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,36,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,37,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,38,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,39,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,40,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,41,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,42,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,43,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,44,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,45,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,46,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,47,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,48,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,49,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,50,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,51,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,52,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,53,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,54,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,55,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,56,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,57,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,58,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,59,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,60,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,61,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,62,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,63,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,64,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,65,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,66,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,67,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,68,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,69,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,70,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,71,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,72,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,73,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,74,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,75,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,76,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,77,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,78,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,79,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,80,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,81,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,82,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,83,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,84,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,85,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,86,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,87,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,88,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,89,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,90,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,91,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,92,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,93,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,94,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,95,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,96,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,97,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,98,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,99,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,100,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,101,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,102,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,103,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,104,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,105,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,106,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,107,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,108,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,109,2,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,110,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,111,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,112,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,113,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,114,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,115,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,116,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,117,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,118,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,119,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,120,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,121,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,122,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,123,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,124,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,125,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,126,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,127,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,128,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,129,2,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,130,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,131,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,132,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,133,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,134,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,135,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,136,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,137,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,138,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,139,3,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,140,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,141,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,142,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,143,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,144,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,145,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,146,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,147,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,148,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,149,2,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,150,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,151,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,152,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,153,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,154,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,155,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,156,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,157,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,158,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,159,3,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,160,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,161,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,162,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,163,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,164,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,165,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,166,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,167,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,168,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,169,3,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,170,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,171,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,172,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,173,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,174,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,175,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,176,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,177,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,178,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,179,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,180,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,181,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,182,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,183,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,184,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,185,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,186,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,187,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,188,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,189,3,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,190,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,191,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,192,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,193,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,194,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,195,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,196,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,197,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,198,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,199,3,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,200,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,201,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,202,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,203,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,204,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,205,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,206,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,207,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,208,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,209,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,210,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,211,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,212,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,213,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,214,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,215,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,216,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,217,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,218,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,219,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,220,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,221,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,222,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,223,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,224,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,225,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,226,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,227,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,228,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,229,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,230,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,231,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,232,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,233,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,234,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,235,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,236,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,237,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,238,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,239,3,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,240,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,241,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,242,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,243,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,244,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,245,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,246,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,247,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,248,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,249,3,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,250,1,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,251,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,252,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,253,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,254,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,255,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,256,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,257,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,258,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,259,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,260,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,261,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,262,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,263,3,'Asphalte','Plat');
            


            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,264,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,265,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,266,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,267,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,268,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,269,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,270,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,271,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,272,3,'Finish','Plat');

        ";
        $pdo->exec($req);
    }

    function liege_bastogne_liege_etendu($pdo, $room){

        $req="DELETE FROM `BoardCase` WHERE room=$room";
        $pdo->exec($req);

        $req="
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,1,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,2,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,3,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,4,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,5,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,6,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,7,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,8,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,9,3,'Start','Plat');



            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,10,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,11,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,12,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,13,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,14,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,15,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,16,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,17,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,18,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,19,3,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,20,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,21,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,22,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,23,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,24,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,25,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,26,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,27,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,28,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,29,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,30,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,31,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,32,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,33,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,34,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,35,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,36,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,37,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,38,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,39,3,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,40,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,41,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,42,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,43,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,44,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,45,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,46,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,47,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,48,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,49,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,50,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,51,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,52,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,53,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,54,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,55,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,56,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,57,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,58,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,59,3,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,60,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,61,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,62,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,63,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,64,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,65,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,66,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,67,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,68,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,69,3,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,70,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,71,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,72,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,73,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,74,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,75,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,76,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,77,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,78,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,79,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,80,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,81,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,82,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,83,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,84,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,85,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,86,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,87,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,88,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,89,3,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,90,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,91,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,92,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,93,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,94,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,95,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,96,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,97,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,98,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,99,3,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,100,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,101,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,102,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,103,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,104,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,105,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,106,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,107,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,108,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,109,3,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,110,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,111,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,112,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,113,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,114,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,115,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,116,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,117,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,118,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,119,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,120,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,121,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,122,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,123,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,124,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,125,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,126,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,127,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,128,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,129,3,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,130,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,131,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,132,1,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,133,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,134,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,135,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,136,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,137,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,138,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,139,3,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,140,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,141,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,142,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,143,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,144,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,145,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,146,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,147,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,148,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,149,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,150,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,151,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,152,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,153,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,154,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,155,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,156,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,157,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,158,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,159,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,160,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,161,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,162,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,163,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,164,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,165,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,166,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,167,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,168,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,169,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,170,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,171,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,172,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,173,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,174,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,175,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,176,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,177,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,178,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,179,2,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,180,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,181,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,182,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,183,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,184,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,185,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,186,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,187,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,188,1,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,189,1,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,190,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,191,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,192,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,193,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,194,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,195,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,196,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,197,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,198,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,199,3,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,200,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,201,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,202,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,203,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,204,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,205,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,206,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,207,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,208,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,209,3,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,210,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,211,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,212,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,213,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,214,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,215,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,216,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,217,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,218,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,219,2,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,220,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,221,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,222,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,223,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,224,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,225,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,226,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,227,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,228,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,229,3,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,230,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,231,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,232,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,233,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,234,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,235,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,236,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,237,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,238,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,239,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,240,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,241,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,242,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,243,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,244,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,245,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,246,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,247,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,248,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,249,3,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,250,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,251,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,252,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,253,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,254,1,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,255,1,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,256,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,257,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,258,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,259,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,260,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,261,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,262,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,263,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,264,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,265,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,266,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,267,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,268,3,'Asphalte','Plat');
            


            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,269,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,270,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,271,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,272,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,273,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,274,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,275,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,276,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,277,3,'Finish','Plat');

        ";
        $pdo->exec($req);
    }

    function strade_bianche_etendu($pdo, $room){

        $req="DELETE FROM `BoardCase` WHERE room=$room";
        $pdo->exec($req);

        $req="
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,1,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,2,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,3,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,4,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,5,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,6,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,7,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,8,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,9,3,'Start','Plat');



            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,10,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,11,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,12,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,13,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,14,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,15,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,16,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,17,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,18,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,19,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,20,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,21,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,22,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,23,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,24,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,25,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,26,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,27,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,28,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,29,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,30,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,31,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,32,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,33,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,34,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,35,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,36,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,37,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,38,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,39,3,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,40,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,41,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,42,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,43,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,44,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,45,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,46,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,47,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,48,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,49,3,'Paves','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,50,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,51,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,52,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,53,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,54,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,55,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,56,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,57,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,58,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,59,3,'Paves','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,60,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,61,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,62,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,63,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,64,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,65,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,66,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,67,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,68,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,69,3,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,70,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,71,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,72,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,73,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,74,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,75,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,76,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,77,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,78,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,79,3,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,80,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,81,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,82,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,83,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,84,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,85,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,86,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,87,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,88,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,89,3,'Paves','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,90,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,91,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,92,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,93,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,94,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,95,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,96,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,97,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,98,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,99,2,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,100,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,101,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,102,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,103,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,104,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,105,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,106,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,107,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,108,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,109,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,110,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,111,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,112,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,113,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,114,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,115,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,116,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,117,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,118,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,119,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,120,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,121,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,122,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,123,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,124,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,125,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,126,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,127,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,128,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,129,2,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,130,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,131,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,132,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,133,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,134,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,135,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,136,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,137,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,138,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,139,2,'Paves','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,140,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,141,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,142,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,143,1,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,144,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,145,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,146,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,147,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,148,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,149,2,'Paves','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,150,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,151,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,152,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,153,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,154,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,155,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,156,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,157,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,158,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,159,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,160,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,161,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,162,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,163,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,164,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,165,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,166,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,167,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,168,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,169,2,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,170,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,171,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,172,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,173,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,174,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,175,2,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,176,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,177,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,178,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,179,3,'Paves','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,180,3,'Paves','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,181,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,182,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,183,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,184,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,185,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,186,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,187,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,188,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,189,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,190,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,191,1,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,192,1,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,193,3,'Asphalte','Plat');
            


            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,194,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,195,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,196,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,197,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,198,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,199,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,200,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,201,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,202,3,'Finish','Plat');

        ";
        $pdo->exec($req);
    }

    function san_sebastian_etendu($pdo, $room){

        $req="DELETE FROM `BoardCase` WHERE room=$room";
        $pdo->exec($req);

        $req="
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,1,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,2,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,3,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,4,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,5,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,6,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,7,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,8,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,9,3,'Start','Plat');



            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,10,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,11,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,12,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,13,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,14,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,15,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,16,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,17,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,18,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,19,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,20,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,21,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,22,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,23,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,24,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,25,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,26,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,27,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,28,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,29,3,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,30,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,31,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,32,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,33,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,34,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,35,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,36,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,37,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,38,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,39,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,40,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,41,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,42,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,43,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,44,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,45,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,46,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,47,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,48,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,49,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,50,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,51,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,52,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,53,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,54,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,55,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,56,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,57,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,58,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,59,3,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,60,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,61,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,62,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,63,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,64,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,65,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,66,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,67,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,68,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,69,3,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,70,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,71,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,72,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,73,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,74,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,75,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,76,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,77,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,78,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,79,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,80,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,81,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,82,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,83,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,84,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,85,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,86,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,87,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,88,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,89,2,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,90,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,91,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,92,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,93,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,94,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,95,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,96,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,97,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,98,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,99,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,100,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,101,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,102,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,103,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,104,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,105,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,106,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,107,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,108,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,109,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,110,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,111,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,112,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,113,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,114,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,115,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,116,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,117,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,118,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,119,3,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,120,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,121,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,122,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,123,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,124,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,125,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,126,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,127,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,128,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,129,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,130,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,131,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,132,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,133,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,134,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,135,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,136,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,137,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,138,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,139,2,'Asphalte','Montee');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,140,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,141,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,142,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,143,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,144,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,145,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,146,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,147,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,148,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,149,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,150,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,151,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,152,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,153,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,154,2,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,155,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,156,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,157,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,158,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,159,2,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,160,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,161,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,162,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,163,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,164,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,165,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,166,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,167,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,168,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,169,3,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,170,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,171,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,172,3,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,173,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,174,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,175,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,176,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,177,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,178,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,179,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,180,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,181,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,182,3,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,183,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,184,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,185,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,186,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,187,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,188,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,189,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,190,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,191,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,192,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,193,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,194,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,195,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,196,2,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,197,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,198,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,199,2,'Asphalte','Descente');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,200,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,201,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,202,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,203,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,204,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,205,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,206,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,207,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,208,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,209,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,210,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,211,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,212,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,213,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,214,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,215,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,216,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,217,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,218,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,219,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,220,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,221,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,222,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,223,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,224,1,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,225,1,'Asphalte','Montee');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,226,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,227,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,228,2,'Asphalte','Descente');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,229,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,230,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,231,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,232,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,233,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,234,3,'Asphalte','Plat');
            


            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,235,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,236,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,237,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,238,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,239,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,240,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,241,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,242,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,243,3,'Finish','Plat');

        ";
        $pdo->exec($req);
    }

    /* MODELE */

    /*
    function modele_etendu($pdo, $room){

        $req="DELETE FROM `BoardCase` WHERE room=$room";
        $pdo->exec($req);

        $req="
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,1,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,2,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,3,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,4,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,5,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,6,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,7,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,8,3,'Start','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,9,3,'Start','Plat');



            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,10,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,11,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,12,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,13,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,14,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,15,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,16,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,17,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,18,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,19,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,20,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,21,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,22,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,23,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,24,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,25,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,26,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,27,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,28,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,29,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,30,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,31,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,32,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,33,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,34,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,35,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,36,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,37,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,38,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,39,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,40,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,41,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,42,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,43,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,44,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,45,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,46,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,47,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,48,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,49,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,50,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,51,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,52,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,53,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,54,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,55,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,56,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,57,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,58,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,59,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,60,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,61,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,62,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,63,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,64,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,65,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,66,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,67,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,68,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,69,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,70,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,71,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,72,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,73,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,74,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,75,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,76,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,77,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,78,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,79,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,80,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,81,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,82,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,83,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,84,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,85,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,86,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,87,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,88,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,89,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,90,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,91,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,92,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,93,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,94,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,95,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,96,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,97,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,98,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,99,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,100,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,101,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,102,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,103,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,104,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,105,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,106,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,107,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,108,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,109,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,110,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,111,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,112,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,113,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,114,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,115,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,116,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,117,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,118,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,119,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,120,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,121,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,122,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,123,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,124,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,125,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,126,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,127,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,128,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,129,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,130,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,131,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,132,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,133,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,134,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,135,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,136,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,137,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,138,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,139,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,140,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,141,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,142,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,143,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,144,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,145,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,146,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,147,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,148,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,149,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,150,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,151,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,152,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,153,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,154,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,155,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,156,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,157,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,158,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,159,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,160,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,161,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,162,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,163,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,164,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,165,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,166,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,167,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,168,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,169,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,170,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,171,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,172,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,173,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,174,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,175,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,176,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,177,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,178,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,179,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,180,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,181,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,182,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,183,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,184,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,185,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,186,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,187,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,188,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,189,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,190,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,191,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,192,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,193,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,194,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,195,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,196,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,197,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,198,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,199,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,200,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,201,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,202,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,203,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,204,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,205,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,206,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,207,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,208,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,209,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,210,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,211,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,212,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,213,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,214,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,215,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,216,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,217,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,218,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,219,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,220,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,221,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,222,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,223,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,224,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,225,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,226,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,227,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,228,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,229,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,230,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,231,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,232,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,233,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,234,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,235,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,236,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,237,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,238,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,239,3,'Asphalte','Plat');

            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,240,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,241,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,242,3,'Asphalte','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,243,3,'Asphalte','Plat');
            


            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,244,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,245,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,246,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,247,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,248,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,249,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,250,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,251,3,'Finish','Plat');
            INSERT INTO `BoardCase`(`room`, `numero`, `taille`, `surface`, `pente`) VALUES ($room,252,3,'Finish','Plat');

        ";
        $pdo->exec($req);
    }
    */


?>