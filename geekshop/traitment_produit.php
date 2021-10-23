<?php
$alert="";
if(isset($_POST['ajout'])){// CONDITION POUR FAIRE MARCHER
    if(!empty($_POST['libelle']) AND !empty($_POST['quantite_mini']) AND !empty($_POST['quantite_stock'])){// CONDITION POUR VERIFIER LES CASES SI VIDE 
        $libelle=htmlspecialchars($_POST['libelle']);// FILTRAGE DES DONNES SAISIES
        $quantite_mini=htmlspecialchars($_POST['quantite_mini']);
        $quantite_stock=htmlspecialchars($_POST['quantite_stock']);
        $verif_produit_exist -> execute (array($libelle));
        $nbre = $verif_produit_exist->rowCount();
        if($nbre == 0){
            $ajout_produit->execute(array($libelle,$quantite_mini,$quantite_stock));  
            header('Location: accueil.php');
        } else{
            $alert = "ce produit existe dejà";
        }
        
    }else{
        $alert = "veuillez remplir tous Les champs";
    }
}




?>