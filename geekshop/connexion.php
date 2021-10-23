<?php

include_once 'connexionbd.php';
include_once 'traitement_connexion.php';



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

    <title>Document</title>

</head>

<body>
  
    <form method="post" class=" col-md-4 offset-4 mt-5"  action="">
        <h2 class="text-center ">CONNEXION</h2>
        <hr>
        <h2> <?php echo $alert; ?> </h2>

        <div class="bg-color mb-3 mt-3">
            <label for="login" class="form-label"> login :</label><br>
            <input type="text" id="login" class="form-control" name="login" maxlength="10" placeholder="ex: mxi_jnt">
        </div>

        <div class="mb-3 mt-3">
            <label for="mdp"  class="form-label"> mot de passe:</label><br>
            <input type="password" id="mdp" class="form-control" placeholder="Enter password " name="mdp">
        </div><br>
        
        <div class="form-action justify-content">
           <div> <button type="submit" class="btn btn-primary" name="connecter">Se connecter</button></div> <br>
           <div><a class="btn btn-success"  href="index.php"> creer compte</a></div>
        </div>
    </form>

  

</body>

</html>


?>