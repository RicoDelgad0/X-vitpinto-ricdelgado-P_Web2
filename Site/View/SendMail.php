<?php
/**
 * Auteur : Vitor Silva & Ricardo Delgado
 * Date : 30.11.2020
 * Description : Page pour faire fonctionner le formulaire de contact par mail
 **/ 

// On récupère les informations entrées dans le formulaire et les envoie sous forme de mail au 'support'
if(isset($_POST["userMail"]) && isset($_POST["userProblem"])){
    mail("elletche@cuisine.com, "Support Letche", $_POST["userProblem"]. 'From : $_POST["userMail"]');
}

header("refresh:0; url=index.php?controller=home&action=lastRecipes");
?>