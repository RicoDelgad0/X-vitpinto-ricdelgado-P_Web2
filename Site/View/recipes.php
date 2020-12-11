<!doctype html>
<html lang="fr-ch">

<head>
    <!--
        Auteurs: Vitor Silva & Ricardo Delgado
        Date: 28.09.2020
        Description: Page affichants toutes les recettes du site internet
    -->
    <title>Al Tajine</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../Src/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Src/css/style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a3d242c9b3.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php
    include('../Controller/recipeController.php');

    /*
    $database = new recipeController();
    
    $database->_construct();

    $test = $database->getAllRecipes();
    */
    ?>
    <header class="d-flex p-2 flex-column mt-5">
        <h1 class="display-4 text-danger align-self-center">Recettes</h1>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a href="homePage.php" class="navbar-brand">El Letche</a> <!-- Nom du site, qui sert de lien vers la page d'acceuil -->

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link">Europa</a> <!-- Lien sur barre de recherche. Sert de filtre de recherche -->
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Africa</a> <!-- Lien sur barre de recherche. Sert de filtre de recherche -->
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">America</a> <!-- Lien sur barre de recherche. Sert de filtre de recherche -->
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Asia</a> <!-- Lien sur barre de recherche. Sert de filtre de recherche -->
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Flat earth</a> <!-- Lien sur barre de recherche. Sert de filtre de recherche -->
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Australia</a> <!-- Lien sur barre de recherche. Sert de filtre de recherche -->
                </li>
            </ul>
        </nav>
    </header>
        <div class="d-flex flex-row flex-wrap justify-content-around"> <!-- Div qui contient carte avec présentation d'une recette-->
        <?php
        /**
         * FIXME: Corriger le foreach pour qu'il récupère bien les informations
         */
        foreach ($test as $recipe) {
            echo '<div class="card m-5" style="width:400px">';
            echo '<img class="card-img-top" src="../images/' . $recipe['recImage'] .'.jpg" alt="Carbonara">';
            echo '<div class="card-body">';
            echo '<h4 class="card-title">' . $recipe['recName'] . '</h4>';
            echo '<p class="card-text">' . $recipe['recIngredients'] . '</p>';
            echo '<a href="details.php?idRecettes=' . $recipe['idRecipes'] . '"class="btn btn-primary">Détails</a>';
            echo '</div>';
            echo '</div>';
        } 
        ?>
        </div>
</body>

<footer>
</footer>

</html>