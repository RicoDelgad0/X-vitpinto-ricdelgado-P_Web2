<!--
Auteurs : Vitor Silva & Ricardo Delgado
Date : 02.01.21
Description : Contenu de la page d'ajout d'une recette
-->

<div class="d-flex justify-content-center mt-3">
        <h1>Ajouter une Recette</h1>
    </div>

    <div class="descriptionFormContainer d-flex justify-content-center">
        <p class="descriptionForm text-muted mt-2 d-flex justify-content-center">N'hésitez pas à être le plus précis possible lors de l'ajout de la recette !</p>
    </div>

    <div class="addRecipeFormContainer mt-3 d-flex justify-content-center">
        <!-- Début du formulaire -->
        <form class="addRecipeForm" action="index.php?controller=recipes&action=addRecipe" method="POST" style="width : 40% !important;" >
        <div class="form-group">
            <strong><label for="recName">Nom de la Recette : </label></strong>
            <input type="text" class="form-control" id="recName" name="recName" placeholder="Ex. Poulet aux carottes">
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
            <strong><label for="recTime">Temps de préparation de la Recette : </label></strong>
            <input type="text" class="form-control" id="recTime" name="recTime" placeholder="Ex. 30'">
        </div>
        <div class="form-group">
            <strong><label class="mt-2" for="recRegion">Origine de la recette</label></strong><br>
            <select name="recRegion">
                <option value="Europe">Europe</option>
                <option value="Amérique du Nord">Amérique du Nord</option>
                <option value="Amérique du Sud">Amérique du Sud</option>
                <option value="Afrique">Afrique</option>
                <option value="Asie">Asie</option>
            </select>
        </div>
        <div class="form-group">
            <strong><label class="mt-2" for="recIngredient">Ingrédients nécessaires à la recette</label></strong>
            <textarea class="form-control" id="recIngredient" name="recIngredient" placeholder="Ex. Poulet, carottes, ..." rows="7"></textarea>
        </div>
        <div class="form-group">
            <strong><label class="mt-2" for="recPreparation">Préparation de la Recette</label></strong>
            <textarea class="form-control" id="recPreparation" name="recPreparation" placeholder="Ex. Commencer par découper..." rows="7"></textarea>
        </div>
        <div class="form-group">
            <strong><label for="recImage">Photo de la Recette : </label></strong>
            <input type="text" class="form-control" id="recImage" name="recImage" placeholder="Ex. spaghettiAuxMorilles">
        </div>
        <button type="submit" class="mt-2 mb-5 btn btn-primary">Soumettre</button>
        </form> 
    </div>