<?php
include("../Model/database.php");

$database = new Database();

/**
 * Variables qui stockent retour formulaire d'ajout
 */
$userName = $_POST["userName"];
$admin = $_POST["admin"];
$password = $_POST["password"];
$confPassword = $_POST["confirmPassword"];


$userNameOk = $passwordOk = false;

echo $userName . '<br>';
echo $admin . '<br>';
echo $password . '<br>';
echo $confPassword . '<br>';
echo "_________________________________________" . '<br>' . '<br>';


if (empty($_POST["userName"])) {
    echo 'test';
} else {
    $userName = test_input($_POST["userName"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $_POST["userName"])) {
        echo 'test';
    } else {
        echo $userName . '<br>';
    }
}

$passwordHash = password_hash($_POST["password"], PASSWORD_DEFAULT);
echo $passwordHash;
/*
if (empty($userName)) {
    echo 'test';
} else {
    $userName = test_input($_POST["userName"]);
    if (!preg_match("/^[a-zA-Z-' ]*$/", $userName)) {
        echo 'test';
    } else {
        echo 'done';
        $userNameOk = true;
    }
}
*/

/*
    $password = test_input($_POST["password"]);
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $passwordOk = true;
*/

/*
    $database->createUser($userName, $admin, $passwordHash);
    echo $userName;
    echo $passwordHash;
    echo $admin;
*/

?>