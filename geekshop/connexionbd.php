<?php
    try{
        $bdd=new PDO('mysql:host=localhost;dbname=geekshop;charset=utf8','root','');//connexion à la base de donné
    }catch(Exception $e){
        die('erreur :'.$e->getMessage()); //affiche message en cas d'erreur

    }
    // mettre les requete php preparer

    $select_user=$bdd->prepare('SELECT * FROM users');
    $insert_user=$bdd->prepare('INSERT INTO users (login, motdepasse) VALUES (?,?)');

// REQUETE  PARTIE CONNEXION
    $select_user_exist=$bdd->prepare('SELECT * FROM users WHERE login=? AND motdepasse=?');
    
    $select_produit = $bdd -> prepare ('SELECT * FROM produit ORDER BY libelle ASC');
    
    // requete ajout de produit
    $ajout_produit = $bdd ->prepare ('INSERT INTO produit(libelle, quantite_minimale, quantite_en_stock) VALUES (?,?,?)');
    
    // VERIFICATION DE L'EXISTANCE DU PRODUIT 
    $verif_produit_exist = $bdd ->prepare('SELECT * FROM produit WHERE libelle=?');

    // SELECTION DES PRODUITS EN RUPTURE DE STOCK

    $select_produit_rupture = $bdd ->prepare('SELECT * FROM produit WHERE quantite_en_stock < quantite_minimale');

    // SUPPRESSION DE PRODUIT
    $sup= filter_input(INPUT_GET,"sup",FILTER_SANITIZE_NUMBER_INT);
    if($sup){
        $delete_produit= "DELETE FROM produit WHERE reference= $sup";
        $bdd ->prepare($delete_produit) -> execute();
    }

    // MODIFIER DONNE SAISIE
?>