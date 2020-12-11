<!doctype html>
<html lang="fr-ch">

<head>
    <!--
        Auteurs: Vitor Silva & Ricardo Delgado
        Date: 30.11.2020
        Description: Page pour s'enregistrer sur le site
    -->
    <title>Al Tajine</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../Src/css/bootstrap.min.css">
    <link rel="stylesheet" href="../Src/css/style.css">
    <script src="https://kit.fontawesome.com/a3d242c9b3.js" crossorigin="anonymous"></script>
</head>

<body>

    <nav class="navigation sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="wlink py-2 d-none d-md-inline-block" href="homePage.php">Page d'accueil</a>
            <a class="wlink py-2 d-none d-md-inline-block" href="recipes.php">Recettes</a>
            <a class="wlink py-2 d-none d-md-inline-block" href="contact.php">Contact</a>
            <a class="wlink py-2 d-none d-md-inline-block" href="#">Ajouter une recette</a>
            <a class="wlink py-2 d-none d-md-inline-block" href="register.php">Register</a>
            <a class="wlink py-2 d-none d-md-inline-block" href="#">Crédits</a>
        </div>
    </nav>

    <h1 class="d-flex mt-5 justify-content-center">Création de compte</h1>

    <div class="descriptionFormContainer d-flex justify-content-center">
        <p class="descriptionForm text-muted mt-2 d-flex justify-content-center">Connectez-vous sur notre site pour garder une trace de vos recettes à l'avenir !</p>
    </div>

    <div class="d-flex justify-content-center w-100">
        <div class="d-flex justify-content-center border rounded w-25 bg-dark text-light">
            <form action="../controller/addUser.php" method="POST" class="m-4 w-75">
                <h2 class="font-ligth">Register</h2><br>
                <div class="form-group">
                    <label for="userName">Username</label>
                    <input type="text" class="form-control" id="userName" name="userName" placeholder="Username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="confirmPassword">Confirm Password</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
                </div>
                <div class="form-group">
                    <label for="Admin">Admin</label>
                    <select name="admin" id="admin" class="form-control">
                        <option value="1">Oui</option>
                        <option value="2">Non</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary mb-2">Créer</button>
            </form>
        </div>
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