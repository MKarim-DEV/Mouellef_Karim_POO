<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,900;1,700&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/styles.css" rel="stylesheet">
    <title><?php echo isset($title) ? $title : "Full Stack Motos" ?></title>
</head>

<body>
    <nav class="navbar navbar-expand-xl navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse show" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                    <li class="nav-item">
                        <a class="nav-link active fw-semibold" aria-current="page" href="index.php?controller=default&action=home">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fw-semibold" href="index.php?controller=moto&action=list">Motos</a>
                    </li>
                </ul>
                <span class="navbar-text fw-semibold fs-5 text-light pe-5">
                    <?php
                    if ($this->currentUser) {
                        echo ('Bonjour ' . $this->currentUser->getUsername());
                    } ?>
                </span>
                <?php if ($this->connexion_status() == false) {
                    echo '<a class=" btn btn-outline-success nav-link  text-light p-2" href="index.php?controller=security&action=login">Connexion</a>';
                } else if ($this->connexion_status() == true) {
                    echo '<a class=" btn btn-outline-danger nav-link text-light p-2" href="index.php?controller=security&action=logout">Déconnexion</a>';
                }
                ?>
            </div>
        </div>
    </nav>