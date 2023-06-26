<?php 
$title="La fiche détaillée";
require "view/parts/header.php"; ?>
<div class=" m-4 d-flex justify-content-center">
  <div class="card bg-dark">
    <img src="public/img/<?php echo ($moto->getPicture()); ?>" height=250 class="card-img-top" alt="card-img-top">
    <div class="card-body">
      <h3 class="card-title text-light">La <?php echo ($moto->getBrand()); ?> <?php echo ($moto->getModel()); ?></h3>
      <p class="card-text text-light">Marque:<?php echo ($moto->getBrand()); ?></p>
      <p class="card-text text-light">Modèle:<?php echo ($moto->getModel()); ?></p>
      <p class="card-text text-light">Type:<?php echo ($moto->getType()); ?></p>
    </div>
  </div>
</div>
<div class="d-flex justify-content-center mt-5 me-2">
  <a href="index.php?controller=moto&action=list" class="btn btn-secondary fw-semibold"> retour à la liste des motos</a>
</div>

<?php require "view/parts/footer.php"; ?>