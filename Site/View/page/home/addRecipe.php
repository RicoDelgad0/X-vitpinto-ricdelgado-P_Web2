<!-- TODO: Vérifier que les recettes sont bien ajoutée à la DB -->
<!-- TODO: Ajouter les commentaires et l'entête de l'Etml -->

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