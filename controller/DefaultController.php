<?php
   class DefaultController extends SecurityController {

    public function __construct()
    {
        parent::__construct();
        parent::isLoggedIn();
    }


        public function home(){
            require 'view/home.php';
        }
        public function notFound(){
            http_response_code(404);
            require 'view/errors/404.php';
        }

    }
?>
