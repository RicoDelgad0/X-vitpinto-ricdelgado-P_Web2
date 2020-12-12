<div class="d-flex flex-row flex-nowrap justify-content-center w-50 m-auto box">
    <div class="mr-4">
        <img src="../images/<?php echo $recipe[0]['recImage']; ?>.jpg" alt="<?php echo $recipe[0]['recName']; ?>" class="img-thumbnail">
        <p>
            <?php echo $recipe[0]['recIngredients'] ?>
        </p>
    </div>
    <div class="ml-4">
        <h4>Détail recette <?php echo $recipe[0]['recName']; ?></h4>
        <p>
            <?php echo $recipe[0]['recPreparation'] ?>
        </p>
    </div>
</div>