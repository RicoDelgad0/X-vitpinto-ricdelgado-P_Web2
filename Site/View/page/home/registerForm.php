<!--
    Auteur: Vitor Silva & Ricardo Delgado
    Date: 11.12.2020
    Description : Contenu différent à afficher dans la page register
-->

<!-- TODO: Ajout de commentaires -->

<!-- FIXME: Rendre l'enregistrement de nouveaux utilisateurs opérationnel -->
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