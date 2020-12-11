<?php
/**
 * Auteur : Vitor Silva & Ricardo Delgado
 * Date : 05.10.2020
 * Description : Page pour se connecter à la base de données
 */

$servName = "localhost";
$userName = "root";
$password = "root";

try {
    $conn = new PDO('mysql:host=$servName; dbname=p_web2; charset=utf8', $userName, $password);
} catch (PDOException $e) {
    die('Erreur : ' . $e->getMessage());
}


$conn = null;

?>
