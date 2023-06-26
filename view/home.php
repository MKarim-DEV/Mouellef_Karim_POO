<?php require "view/parts/header.php"; ?>

    <h1 class="text-center text-decoration-underline text-light mb-4">Bienvenue chez Full Stack Motorcycles!!!</h1>
    <div class="d-flex justify-content-center">
    <a href="index.php?controller=moto&action=list" class="fs-3 fw-semibold btn btn-outline-light rounded mb-3">Voir les motos</a>
    </div>
    <div class="container-fluid row d-flex justify-content-center">
    <div id="carouselWithIndicators" class="carousel slide col-7" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselWithIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselWithIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselWithIndicators" data-bs-slide-to="2"></li>
            <li data-bs-target="#carouselWithIndicators" data-bs-slide-to="3"></li>
            <li data-bs-target="#carouselWithIndicators" data-bs-slide-to="4"></li>
            <li data-bs-target="#carouselWithIndicators" data-bs-slide-to="5"></li>
        </ol>
        <div class="carousel-inner rounded">
            <div class="carousel-item active">
                <img src="public/img/backgrounds/slider1.jpg" height=450 class="d-block w-100" alt="Slide 1">
            </div>
            <div class="carousel-item">
                <img src="public/img/backgrounds/slider2" height=450 class="d-block w-100" alt="Slide 2">
            </div>
            <div class="carousel-item">
                <img src="public/img/backgrounds/slider3" height=450 class="d-block w-100" alt="Slide 3">
            </div>
            <div class="carousel-item">
                <img src="public/img/backgrounds/slider4.jpg" height=450 class="d-block w-100" alt="Slide 4">
            </div>
            <div class="carousel-item">
                <img src="public/img/backgrounds/slider5" height=450 class="d-block w-100" alt="Slide 5">
            </div>
            <div class="carousel-item">
                <img src="public/img/backgrounds/slider6" height=450 class="d-block w-100" alt="Slide 6">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselWithIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselWithIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</div>
<?php require "view/parts/footer.php"; ?>