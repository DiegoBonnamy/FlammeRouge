<?php include("Fonctions/init.php"); ?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Board</title>
  <link rel="icon" type="image/png" href="https://diegobonnamy.fr/projets/projetsPerso/FlammeRougeV2/Images/menu/icon.png" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/css/mdb.min.css" rel="stylesheet">

  <!-- JQuery -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/js/mdb.min.js"></script>

</head>

<style>
  body{
    background-image: url('https://cutewallpaper.org/21/tour-de-france-wallpapers/Tour-De-France-2016-wallpaper-Gallery.jpg');
    background-size: cover;
  }

  progress {
    width: 250px;
    height: 25px;
    -webkit-appearance: none;
    -moz-progress-barbackground-color: red;
    border-radius: 25px;
  }

  .hover{
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
    -webkit-transition: .3s ease-in-out;
    transition: .3s ease-in-out; 
  }
  .hover:hover{
    -webkit-filter: grayscale(0);
    filter: grayscale(0);
  }

</style>