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

    <nav class="navigation sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
        <a class="wlink py-2 d-none d-md-inline-block" href="homePage.php" >Page d'accueil</a>
        <a class="wlink py-2 d-none d-md-inline-block" href="recipes.php" >Recettes</a>
        <a class="wlink py-2 d-none d-md-inline-block" href="contact.php" >Contact</a>
        <a class="wlink py-2 d-none d-md-inline-block" href="#" >Ajouter une recette</a>
        <a class="wlink py-2 d-none d-md-inline-block" href="#" >Crédits</a>
        </div>  
    </nav>

    <h1 class="d-flex mt-5 justify-content-center">Contactez nous !</h1>

    <div class="descriptionFormContainer d-flex justify-content-center">
        <p class="descriptionForm text-muted mt-2 d-flex justify-content-center">Un souci avec l'une des recettes de notre site ? N'hésitez pas à nous soumettre votre requête par le formulaire en dessous pour que nous puissions vous aider !</p>
    </div>
    

    <div class="contactFormContainer mt-5 d-flex justify-content-center">    
        <form class="contactForm">
        <div class="form-group">
            <strong><label for="userMail">Adresse Mail</label></strong>
            <input type="email" class="form-control" id="userMail" placeholder="Renseignez votre adresse Mail">
            <small id="emailHelp" class="form-text text-muted">Vos données personelles ne seront jamais divulguées.</small>
        </div>
        <div class="form-group">
            <strong><label class="mt-2" for="userProblem">Problème</label></strong>
            <textarea type="password" class="form-control" id="exampleInputPassword1" placeholder="Expliquez-nous votre problème..." rows="7"></textarea>
        </div>
            <button type="submit" class="mt-2 btn btn-primary">Soumettre</button>
        </form> 
    </div>

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