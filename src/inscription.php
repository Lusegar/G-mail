<?php
try{
    $_bdd=new PDO('mysql:host=localhost;dbname=gmail;charset=utf8', 'root', '');
}
catch (Exception $e){
    die('Erreur : '.$e->getMessage());
}
if (isset($_POST['email']) || isset($_POST['mdp'])) {
    $_login = $_POST["email"];
    if (!$_POST['email'] || !$_POST['mdp']) {
        echo "<p class=\"warning\">Vous avez obliez votre login ou password?</p>";
        }
    else if (!filter_var($_login, FILTER_VALIDATE_EMAIL)) {
            echo "<p class=\"warning\">login invalide</p>";
    }
    else if (is_numeric($_login)) {
        echo "<p class=\"warning\">Vous devez saisir des caractères</p>";
    }
    else {
        $req = $_bdd->prepare('INSERT INTO inscription (prenom, nom, email, mdp)VALUES(?,?,?,?)');
        $req->execute(array($_POST['email'], password_hash($_POST['mdp'], PASSWORD_DEFAULT), $_POST['prenom'], $_POST['nom']));        
        echo "<p class=\"success\">Merci votre contenu est ajouté :
            <a href=\"connection.inc.php\" title=\"pub\">Connectez vous</a>                
         </p>";
    }
}