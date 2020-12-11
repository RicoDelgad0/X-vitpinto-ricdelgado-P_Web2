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
    <script src="https://kit.fontawesome.com/a3d242c9b3.js" crossorigin="anonymous"></script> <!-- Pack d'icones en ligne: https://fontawesome.com -->
</head>

<body>

    <nav class="navigation sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="wlink py-2 d-none d-md-inline-block" href="homePage.php" >Page d'accueil</a>
        <a class="wlink py-2 d-none d-md-inline-block" href="recipes.php" >Recettes</a>
        <a class="wlink py-2 d-none d-md-inline-block" href="contact.php" >Contact</a>
        <a class="wlink py-2 d-none d-md-inline-block" href="addRecipe.php">Ajouter une recette</a>
        <a class="wlink py-2 d-none d-md-inline-block" href="#" >Crédits</a>
        </div>  
    </nav>

    <div class="d-flex justify-content-center mt-5">
        <h1>Ajouter une Recette</h1>
    </div>

    <div class="descriptionFormContainer d-flex justify-content-center">
        <p class="descriptionForm text-muted mt-2 d-flex justify-content-center">N'hésitez pas à être le plus précis possible lors de l'ajout de la recette !</p>
    </div>

    <div class="addRecipeFormContainer mt-4 d-flex justify-content-center">    
        <form class="addRecipeForm" action="mailto:ricprt2000@gmail.com" method="POST" >
        <div class="form-group">
            <strong><label for="recName">Nom de la Recette : </label></strong>
            <input type="text" class="form-control" id="recName" placeholder="Ex. Poulet aux carottes">
        </div>
        <div class="form-group">
            <strong><label class="mt-2" for="recDifficulty">Difficulté de la Recette</label></strong><br>
            <select name="recDifficulty">
                <option value="1">Facile</option>
                <option value="2">Moyenne</option>
                <option value="3">Difficile</option>
            </select>
        </div>
        <div class="form-group">
            <strong><label class="mt-2" for="recOrigin">Origine de la recette</label></strong><br>
            <select name="recOrigin">
                <option value="1">Europe</option>
                <option value="2">Amérique du Nord</option>
                <option value="3">Amérique du Sud</option>
                <option value="4">Afrique</option>
                <option value="5">Asie</option>
            </select>
        </div>
        <div class="form-group">
            <strong><label class="mt-2" for="recIngredient">Ingrédients nécessaires à la recette</label></strong>
            <textarea class="form-control" id="recIngredient" placeholder="Ex. Poulet, carottes, ..." rows="7"></textarea>
        </div>
        <div class="form-group">
            <strong><label class="mt-2" for="recPreparation">Préparation de la Recette</label></strong>
            <textarea class="form-control" id="recPreparation" placeholder="Ex. Commencer par découper..." rows="7"></textarea>
        </div>
            <button type="submit" class="mt-2 mb-5 btn btn-primary">Soumettre</button>
        </form> 
    </div>

    <!-- Pied de page avec le copyright et les différents liens vers les réseaux sociaux -->
    <footer class="page-footer font-small d-inline-flex justify-content-between">
  <div></div>
  <div class="footer-copyright text-center py-2">© 2020 Copyright:
    <a target="blank" class="wlink" href="https://etml.ch/">ETML.ch</a>
  </div>
  <div class="d-flex text-center">
    <a target="blank" href="https://instagram.com"><i class="fab fa-instagram wlink"></i></a>
    <a target="blank" href="https://twitter.com"><i class="fab fa-twitter wlink"></i></a>
    <a target="blank" href="https://twitch.tv"><i class="fab fa-twitch wlink"></i></a>
    <a target="blank" href="https://twitch.tv"><i class="fab fa-apple wlink"></i></a>
  </div>
</footer>
</body>

<footer>
</footer>

</html>