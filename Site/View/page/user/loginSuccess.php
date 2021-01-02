<!--
Auteurs : Vitor Silva & Ricardo Delgado
Date : 02.01.21
Description : Contenu de la page de succès à la connexion
-->

<h1 class="d-flex mt-5 justify-content-center">Connexion Réussie !</h1>
    <div class="d-flex justify-content-center w-100">
        <div class="d-flex flex-column justify-content-center border rounded w-25 bg-dark text-light">
            <p class="mt-3 ml-3">Vous serez redirigé(e) dans un instant</p>
            <?php
            header("refresh:2; url=index.php?controller=home&action=lastRecipes")
            ?>
        </div>
    </div>