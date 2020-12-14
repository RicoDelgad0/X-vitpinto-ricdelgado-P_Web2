<!-- TODO: vérifier que l'envoie de mail fonctionne et qu'il est okay en MVC  -->
<!-- TODO: Ajouter l'entête de l'ETML et les commentaires -->

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