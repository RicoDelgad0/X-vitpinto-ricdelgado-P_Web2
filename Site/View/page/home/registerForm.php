<!--
    Auteur: Vitor Silva & Ricardo Delgado
    Date: 11.12.2020
    Description : Contenu différent à afficher dans la page register
-->

<h1 class="d-flex mt-5 justify-content-center">Création de compte</h1>

    <div class="descriptionFormContainer d-flex justify-content-center flex-column mt-3">
        <p>Connectez-vous sur notre site pour garder une trace de vos recettes à l'avenir !</p>
        <p>Déjà un compte ? Connectez-vous <a href="index.php?controller=login&action=loginForm">ICI</a></p>
    </div>

    <div class="d-flex justify-content-center w-100">
        <div class="d-flex justify-content-center border rounded w-25 bg-dark text-light">
            <form action="index.php?controller=register&action=userRegister" method="POST" class="m-4 w-75">
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
                <button type="submit" class="btn btn-primary mb-2">Créer</button>
                <input type="reset" class="btn btn-secondary mb-2"></input>
            </form>
        </div>
    </div>