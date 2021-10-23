<?php
    include_once 'connexionbd.php';
    include_once 'traitment_produit.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
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
        <div class="col-md-9 ">
            <?php
             include_once 'formu_ajout_produit.php';
             $select_produit -> execute();
             include_once 'tabl_liste_produit.php';
           ?>
        </div>
    </div>

</body>

</html>