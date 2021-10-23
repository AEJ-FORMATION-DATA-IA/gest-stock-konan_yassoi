<?php
$alert="";
if(isset($_POST['connecter'])){
    if(!empty($_POST['login']) AND !empty($_POST['mdp'])){//si les variables sont vides§
        $login=htmlspecialchars($_POST['login']);//securité des donnés saisies
        $mdp=sha1($_POST['mdp']);// hachage mdp
        $select_user_exist->execute(array($login,$mdp));//execution ds variables
        $user_exist=$select_user_exist->rowCount();//coompter les compte saisies
        if($user_exist==1){
            header('Location: accueil.php');
        }else{
            $alert="mauvais login ou mot de passe";
        }
    }else{
        $alert="veuillez remplir tous les champs";
    }
}


?>