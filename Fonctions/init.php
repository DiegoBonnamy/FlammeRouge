<?php
    session_start();
    //error_reporting(E_ALL);

    /* Récupération joueur */
    if(isset($_SESSION["joueur"])){
        $joueur = $_SESSION["joueur"];
    }
    else{
        $joueur = null;
    }

    /* Récupération de la room */
    if(isset($_SESSION["room"])){
        $room = $_SESSION["room"];
    }
    else{
        $room = null;
    }

    /* Récupération Equipe */
    if(isset($_SESSION["team"])){
        $team = $_SESSION["team"];
    }
    else{
        $team = null;
    }

    include("Donnees/fonctionsBDD.php");
    $pdo = seConnecter();

    include("Parcours/tdf_2021.php");
    include("Parcours/paris_nice_2021.php");
    include("Parcours/criterium_du_dauphine_2021.php");
    
    include("Parcours/etendu/classiques.php");

    include("Fonctions/fonctions.php");
    include("Fonctions/engine.php");

    require "Classes/BoardCase.php";
    require "Classes/Cycliste.php";

    

    /*  Création des cyclistes  */
    $list_cycliste = array();

    // Verts
    $RV1 = new Cycliste("RV1", "Rouleur", "Vert", 1);  
    $SV1 = new Cycliste("SV1", "Sprinteur", "Vert", 1);  
    array_push($list_cycliste, $RV1, $SV1);

    // Rouges
    $RR1 = new Cycliste("RR1", "Rouleur", "Rouge", 1);  
    $SR1 = new Cycliste("SR1", "Sprinteur", "Rouge", 1);  
    array_push($list_cycliste, $RR1, $SR1);

    // Bleus
    $RB1 = new Cycliste("RB1", "Rouleur", "Bleu", 1);   
    $SB1 = new Cycliste("SB1", "Sprinteur", "Bleu", 1); 
    array_push($list_cycliste, $RB1, $SB1);

    // Noirs
    $RN1 = new Cycliste("RN1", "Rouleur", "Noir", 1);    
    $SN1 = new Cycliste("SN1", "Sprinteur", "Noir", 1);
    array_push($list_cycliste, $RN1, $SN1);

    if($room != null){
        /*  Nombre de joueurs  */
        $partie = getPartie($pdo, $room);

        $mode = $partie["mode"];
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
    }
    
    if($room != null && $team != null){
        
        /*  Listes  */
        $list_case = array();    

        /*  Création des BoardCases  */
        setBoardCase($pdo, $room);

        /* Case null pour les Finishers */
        $case_null = new BoardCase(0, 100, null, null);
    }

?>