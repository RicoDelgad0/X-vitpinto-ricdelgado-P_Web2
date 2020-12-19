<h1 class="d-flex mt-5 justify-content-center">Connexion échouée !</h1>

    <div class="descriptionFormContainer d-flex justify-content-center flex-column mt-3">
        <p class="text-muted">Veuillez corriger les erreurs listées ci-dessous.</p>
    </div>

    <div class="d-flex justify-content-center w-100">
        <div class="d-flex flex-column justify-content-center border rounded w-25 bg-dark text-light">
            <?php
            foreach($errors as $error) {
                if(!empty($error)) {
                    echo '<li><spann class="text-danger">' . $error . '</spann></li>';
                }
            }
            ?>
        </div>
    </div>