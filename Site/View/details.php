<!DOCTYPE html>
<html lang="fr-ch">

<head>
    <!--
    Auteur : Vitor Silva
    Date : 09.11.2020
    Description : Page détail d'une recette
-->
    <meta charset="UTF-8">
    <title>Détail Recette</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../Src/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Src/css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include('../Model/database.php');

    $database = new Database();
    $database->_construct();

    $id = $_GET['idRecettes'];

    $recipe = $database->getOneRecipe($id);
    ?>
    <header class="d-flex p-2 flex-column mt-5">
        <h1 class="display-4 text-danger align-self-center">Recettes</h1>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a href="recipes.php" class="navbar-brand">El Letche</a> <!-- Nom du site, qui sert de lien vers la page d'acceuil -->
        </nav>
    </header>

    <div class="d-flex flex-row flex-nowrap justify-content-center w-50 m-auto box">
        <div class="mr-4">
            <img src="../images/<?php echo $recipe[0]['recImage']; ?>.jpg" alt="<?php echo $recipe[0]['recName']; ?>" class="img-thumbnail">
            <p>
                <?php echo $recipe[0]['recIngredients']?>
            </p>
        </div>
        <div class="ml-4">
            <h4>Détail recette <?php echo $recipe[0]['recName']; ?></h4>
            <p>
                <?php echo $recipe[0]['recPreparation'] ?>
            </p>
        </div>
    </div>

</body>

</html>