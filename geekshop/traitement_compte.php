<?php
$alert="";
if(isset($_POST['creer'])){
    if(!empty($_POST['login']) AND !empty($_POST['mdp'])){
        $login=htmlspecialchars($_POST['login']);//securise le login
        $mdp=sha1($_POST['mdp']);//hache le mot de passe
        $select_user-> execute(array());
        $nbre_user =$select_user-> rowCount();
        echo $nbre_user;
        if($nbre_user==0){
            $insert_user -> execute(array($login,$mdp));
            header('Location:connexion.php');
        }else{
            $alert="vous avez dejà un compte";
        }
    }else{
        $alert="Veuillez remplir tous les champs";
    }
}


?>