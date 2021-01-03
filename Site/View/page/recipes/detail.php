<!--
    Auteur: Vitor Silva & Ricardo Delgado
    Date: 11.12.2020
    Description : Contenu différent à afficher dans la page détail
-->
<div class="d-flex flex-row flex-nowrap justify-content-center w-75 m-auto box">
    <div class="mt-5 w-50">
        <img src="../images/<?php echo $recipe[0]['recImage']; ?>Xl.jpg" alt="<?php echo $recipe[0]['recName']; ?>" class="img-thumbnail"> <!-- Image recette -->
        <p>
            <h5>Ingrédients</h5>
            <?php echo $recipe[0]['recIngredients'] ?> <!-- Ingrédients recette -->
        </p>
    </div>
    <div class="ml-4 mt-5 w-50">
        <h4>Détail recette <?php echo $recipe[0]['recName']; ?></h4> <!-- Nom de la recette -->
        <p>
            <h5>Préparation</h5>
            <?php echo $recipe[0]['recPreparation'] ?> <!-- Préparation de la recette -->
            <h6 class="mt-3">Temps de préparation</h6>
            <?php echo $recipe[0]['recTime'] . ' minutes de préparation';?>
            <h6>Difficultée</h6>
            <?php echo $recipe[0]['recDifficulty'];?>
        </p>
    </div>
</div>