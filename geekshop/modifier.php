<?php

include_once 'connexionbd.php';
include_once 'traitement_produit.php';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css.map">
    <title>Accueil</title>
</head>
<body>
   
    <div>GEEKSHOP</div>
    <div class="row">
        <div class="col-md-3">
    <?php
        include_once 'main.php';
    ?>    
        </div>
    <div class="col-md-9">
        
    </div>
    </div>
    
</body>
</html>