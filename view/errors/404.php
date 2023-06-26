<?php require 'view/parts/header.php'; ?>
<div class="container text-light fs-2 mt-5">
    
    <h1 class="text-center">Oops ! Cette page n'existe pas ...</h1>
    <div class="text-center"><?php
    if ($_GET["scope"] == 'moto') {
        echo ('<h2>Cette moto a probablement été supprimée!</h2>');
    }
    ?>
    <?php
    if ($_GET["scope"] == 'type') {
        echo ("<h2>Il n'y a aucune moto de ce type!</h2>");
    }
    ?>
    </div>
    </div>
    <div class="d-flex justify-content-center mt-5 me-4 fs-4 fw-semibold">
    <button onclick="window.history.back()">Revenir en arrière</button>
    </div>
    <?php require 'view/parts/footer.php'; ?>
