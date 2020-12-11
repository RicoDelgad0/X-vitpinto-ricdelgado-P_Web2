<?php
/**
 * Auteur : Vitor Silva & Ricardo Delgado
 * Date : 30.11.2020
 * Description : Page pour faire fonctionner le formulaire de contact par mail
 **/ 

// On récupère les informations entrées dans le formulaire et les envoie sous forme de mail au 'support'
if(isset($_POST["userMail"]) && isset($_POST["userProblem"])){
    mail("ricprt2000@gmail.com", "Support Letche", $_POST["userProblem"]. 'From : $_POST["userMail"]');
}

header("Location : http://localhost:8080/view/homePage.php");

?>