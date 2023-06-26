<?php require "view/parts/header.php"; ?>
<div class="container">

    <h1 class="text-center text-light text-decoration-underline">Connexion</h1>
    <div class="d-flex justify-content-end">
        <a href="index.php?controller=default&action=home" class="btn btn-secondary fw-semibold"> retour à l'accueil</a>
    </div>
    <form method="post">
        <div class="col-md-12">
            <label class="text-light fs-4" for="username">Username *</label>
            <input id="username" type="text" name="username" class=" mb-2 form-control 
                    <?php if (array_key_exists('username', $errors)) {
                        echo ('is-invalid');
                    } ?>" value="<?php if (array_key_exists("username", $_POST)) {
                                        echo ($_POST["username"]);
                                    } ?>">
            <div class="invalid-feedback">
                <?php if (array_key_exists("username", $errors)) {
                    echo ($errors["username"]);
                } ?>
            </div>
        </div>
        <div class="col-md-12">
            <label class="text-light fs-4" for="password">Mot de passe *</label>
            <input id="password" type="password" name="password" class="mb-4 form-control  <?php if (array_key_exists('password', $errors)) {
                                                                                            echo ('is-invalid');
                                                                                        } ?>">
            <div class="invalid-feedback">
                <?php if (array_key_exists("password", $errors)) {
                    echo ($errors["password"]);
                } ?>
            </div>
        </div>
        <div class="d-flex justify-content-center">
        <input type="submit" class="btn btn-light m-2 col-2 fw-semibold">
            </div>
    </form>
    <?php require "view/parts/footer.php"; ?>