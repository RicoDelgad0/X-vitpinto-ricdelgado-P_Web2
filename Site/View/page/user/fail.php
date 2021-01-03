<!--
Auteurs : Vitor Silva & Ricardo Delgado
Date : 02.01.21
Description : Contenu de la page d'erreur à la connexion
-->

<h1 class="d-flex mt-5 justify-content-center">Connexion échouée !</h1>

    <div class="descriptionFormContainer d-flex justify-content-center flex-column mt-3">
        <p class="text-muted">Veuillez corriger les erreurs listées ci-dessous.</p>
    </div>

    <div class="d-flex justify-content-center w-100">
        <div class="d-flex flex-column justify-content-center border rounded w-25 bg-dark text-light">
            <?php
            // Foreach qui affiche toutes les erreurs s'il y en a
            foreach($errors as $error) {
                if(!empty($error)) {
                    echo '<div class="form-group">';
                    echo '<li class="list-unstyled ml-3 mt-3"><spann class="text-danger">' . $error . '</spann></li>';
                    echo '</div>';
                }
            }
            ?>
        </div>
    </div>