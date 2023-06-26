<?php
class MotoController extends SecurityController
{
    private $mm;
    public static $types = [
        "Enduro",
        "Custom",
        "Sport",
        "Roadster",
    ];
    public static $allowedFile = [
        "image/jpeg",
        "image/png"
    ];
    public function __construct()
    {
        parent::__construct();
        parent::isLoggedIn();
        $this->mm = new MotoManager();
    }
    public function displayAll()
    {
        $motos = $this->mm->getAll();
        require 'view/motos/list.php';
    }
    public function displayOne($id)
    {
        $moto = $this->mm->getOne($id);
        if (is_null($moto)) {
            header("Location:index.php?controller=default&action=not-found&scope=moto");
        }
        require 'view/motos/detail.php';
    }
    public function displayBytype($type)
    {
        $motos = $this->mm->getByType($type);
        if (count($motos) == 0) {
            header("Location:index.php?controller=default&action=not-found&scope=type");
        }
        require 'view/motos/list_type.php';
    }
    public function add()
    {
        $errors = [];

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["brand"])) {
                $errors["brand"] = 'Veuillez saisir la marque de la moto';
            }
            if (strlen($_POST["brand"]) > 250) {
                $errors["brand"] = 'Veuillez choisir une marque de moto';
            }
            if (empty($_POST["model"])) {
                $errors["model"] = 'Veuillez saisir un modèle de moto';
            }
            if (strlen($_POST["model"]) > 250) {
                $errors["model"] = 'Veuillez choisir un modèle moto';
            }
            if (!in_array($_POST["type"], self::$types)) {
                $errors["type"] = "Veuillez choisir un type de moto disponible";
            }
            if (count($errors) == 0) {
                $moto = new Moto(
                    null,
                    $_POST["brand"],
                    $_POST["model"],
                    $_POST["type"],
                    null
                );
                if ($_FILES["picture"]["error"] != 4) {
                    if (!in_array($_FILES["picture"]['type'], self::$allowedFile)) {
                        $errors["picture"] = "Nous acceptons seulement les JPEG / PNG";
                    }
                    if ($_FILES["picture"]['error'] != 0) {
                        $errors["picture"] = "Une erreur s'est produite pendant l'upload";
                    }
                    if ($_FILES["picture"]["size"] > 5000000) {
                        $errors["picture"] = "L'image est trop lourde elle doit faire moins de 5Mo";
                    }

                    if (count($errors) == 0) {
                        $filename = uniqid() . explode("/", $_FILES["picture"]['type'])[1];
                        move_uploaded_file($_FILES["picture"]["tmp_name"], 'public/img/' . $filename);
                        $moto->setPicture($filename);
                    }
                }
                if (count($errors) == 0) {
                    $this->mm->add($moto);
                    header("Location: index.php?controller=moto&action=list");
                    die();
                }
            }
        }
        require 'View/motos/form_add.php';
    }

    public function delete($id)
    {
        parent::isLoggedIn();
        $moto = $this->mm->getOne($id);

        if (is_null($moto)) {
            header('Location: index.php?controller=default&action=not-found&scope=moto');
        } else {
            $this->mm->delete($moto->getId());
            header("Location: index.php?controller=moto&action=list");
        }
    }
}
