<!--
    Auteur: Vitor Silva & Ricardo Delgado
    Date: 11.12.2020
    Description : Contenu différent à afficher dans la page détail
-->
<div class="d-flex flex-row flex-nowrap justify-content-center w-50 m-auto box">
    <div class="mr-4 mt-5">
        <img src="../images/<?php echo $recipe[0]['recImage']; ?>.jpg" alt="<?php echo $recipe[0]['recName']; ?>" class="img-thumbnail"> <!-- Image recette -->
        <p>
            <?php echo $recipe[0]['recIngredients'] ?> <!-- Ingrédients recette -->
        </p>
    </div>
    <div class="ml-4 mt-5">
        <h4>Détail recette <?php echo $recipe[0]['recName']; ?></h4> <!-- Nom de la recette -->
        <p>
            <?php echo $recipe[0]['recPreparation'] ?> <!-- Préparation de la recette -->
        </p>
    </div>
</div>