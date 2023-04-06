<?php
    if (isset($_POST["email"]) && isset($_POST["mdp"])) {
        try {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            $bdd = new PDO('mysql:host=localhost;dbname=gmail', 'root', '', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', $pdo_options));
            $reponse = $bdd->query('SELECT email, mdp FROM  connexion Where login = "'.$_POST["email"].'"');
            $data = $reponse->fetch();
            $reponse->closeCursor();
        }
        catch (Exception $e) {
             die('Erreur : '.$e->getMessage());
        }            
        $email = $_POST["email"];
        $mdp = $_POST["mdp"];
        if (!$email || !$mdp) {
            echo "<p class=\"warning\">Vous avez oubliez votre mail ou password?</p>";
        }
        else if($data) {
            if (password_verify($mdp, $data["mdp"])){
                print "<p class=\"success\">Votre login est " . $email . "votre mot de passe est  " . md5($mdp);
                header("Location: connection.inc.php");
                exit;
            }
        }
        else{
            echo "<p class=\"warning\">Erreur login ou mot de passe?</p>";
        }
    }