<?php 
$title="Liste des motos";
require "view/parts/header.php";
?>
<div class="container">
    <h1 class="text-center text-light mb-1 text-decoration-underline">La liste des motos</h1>
    <div class="d-flex justify-content-center">
        <a href="index.php?controller=moto&action=add" class="btn btn-outline-light fs-3 my-4 fw-semibold">Ajouter une moto</a>
    </div>
</div>
<table class="table table-striped table-dark mt-3 mb-3 container">
    <thead>
        <tr class=" text-light fs-5">
            <th scope="col">#</th>
            <th scope="col">Brand</th>
            <th scope="col">Model</th>
            <th scope="col">Type</th>
            <th scope="col">Picture</th>
            <th scope="col">Détail</th>
            <th scope="col">Suppression</th>
            
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($motos as $moto) {
        ?>
            <tr class="fw-semibold">
                <th scope="row"><?php echo ($moto->getId()) ?></th>
                <td><?php echo ($moto->getBrand()) ?></td>
                <td><?php echo ($moto->getModel()) ?></td>
                <td><a href="index.php?controller=moto&action=list_type&type=<?php echo ($moto->getType()); ?>" class="fw-semibold btn btn-outline-warning"><?php echo ($moto->getType()); ?></a></td>
                <td><img style="max-height: 50px" src="public/img/<?php echo ($moto->getPicture()) ?>" alt="une moto"></td>
                <td>
                    <a href="index.php?controller=moto&action=detail&id=<?php echo ($moto->getId()); ?>" class="fw-semibold btn btn-outline-info">
                        Voir la fiche <?php echo ($moto->getModel()); ?></a>
                </td>
                <td>
                    <a href="index.php?controller=moto&action=delete&id=<?php echo ($moto->getId()); ?>" class="fw-semibold btn btn-danger">Supprimer la moto</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
<div class="d-flex justify-content-end mt-5 me-4">
    <a href="index.php?controller=default&action=home" class="btn btn-secondary fw-semibold"> retour à l'accueil</a>
</div>
<?php require "view/parts/footer.php" ?>