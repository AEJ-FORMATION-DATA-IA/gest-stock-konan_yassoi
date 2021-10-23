<?php
include_once 'connexionbd.php';
include_once 'traitement_compte.php';



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

    <form method="post" action=""  class=" col-md-4 offset-4 mt-5">
        <h2 class ="text-center">CREER UN COMPTE</h2>
        <hr>
        <h2> <?php echo $alert; ?> </h2>

        <div class="bg-color mt-3 mb-3">
            <label for="login" class="form-label"> login :</label><br>
            <input type="text" id="login" name="login" class="form-control" maxlength="10" placeholder="ex: mxi_jnt">
        </div>

        <div>
            <label for="mdp" class="form-label"> mot de passe:</label><br>
            <input type="password" id="mdp" class="form-control" name="mdp">
        </div><br>
        
        <div class="form-action ">
            <div><button type="submit" name="creer"  class="btn btn-primary" >creer compte</button></div> <br>
            <div><a class="btn btn-success" href="connexion.php"> Se connecter</a></div>

        </div >
           
    </form>
</body>

</html>