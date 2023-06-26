<?php 
$title="Ajouter une moto";
require 'view/parts/header.php';
?>
<div class="container">
    <h1 class=" text-light text-center text-decoration-underline mb-5">Ajouter une moto</h1>
    <form method="post" enctype="multipart/form-data">
        <div class="col-md-12 mt-2">
            <label for="brand" class="text-light fw-semibold fs-5">
                Brand
            </label>
            <input class="form-control
        <?php
        if (array_key_exists("brand", $errors)) {
            echo ('is-invalid');
        } ?>" value="<?php if (array_key_exists("brand", $_POST)) {
                            echo ($_POST["brand"]);
                        } ?>" type="text" name="brand" id="brand">
            <div class="invalid-feedback">
                <?php
                if (array_key_exists("brand", $errors)) {
                    echo ($errors["brand"]);
                }
                ?>
            </div>
        </div>
        <div class="col-md-12 mt-2">
            <label for="model" class="text-light fw-semibold fs-5">
                Model
            </label>
            <input class="form-control
        <?php
        if (array_key_exists("model", $errors)) {
            echo ('is-invalid');
        } ?>" value="<?php if (array_key_exists("model", $_POST)) {
                            echo ($_POST["model"]);
                        } ?>" type="text" name="model" id="model">
            <div class="invalid-feedback">
                <?php
                if (array_key_exists("model", $errors)) {
                    echo ($errors["model"]);
                }
                ?>
            </div>
        </div>
        <div class="col-md-12 mt-2">
            <label for="type" class="text-light fw-semibold fs-5">Type</label>
            <select class="form-select
        <?php
        if (array_key_exists("type", $errors)) {
            echo ('is-invalid');
                } ?>" id="type" name="type">
                <option  value=""></option>
                <?php
                foreach (MotoController::$types as $type) {
                    echo ('<option value="' . $type . '">' . $type . '</option>');
                }
                ?>
            </select>
            <div class="invalid-feedback">
                <?php
                if (array_key_exists("type", $errors)) {
                    echo ($errors["type"]);
                }
                ?>
            </div>
        </div>
        <div class="col-md-12 mt-2">
            <label for="picture" class="text-light fw-semibold fs-5">
                Photo de la moto
            </label>
            <input class="form-control
            <?php if (array_key_exists("picture", $errors)) {
                echo ('is-invalid');
            } ?>" id="picture" type="file" name="picture">
            <div class="invalid-feedback">
                <?php
                if (array_key_exists("picture", $errors)) {
                    echo ($errors["picture"]);
                }
                ?>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-3">
            <input type="submit" class="btn btn-light m-2 col-2 fs-5 fw-semibold">
        </div>
    </form>
    <div class="d-flex justify-content-end mt-5 me-2">
        <a href="index.php?controller=moto&action=list" class="btn btn-secondary fw-semibold"> retour à la liste des motos</a>
    </div>
</div>
<?php require 'view/parts/footer.php'; ?>