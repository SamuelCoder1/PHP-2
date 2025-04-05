<?php

class HomeController {

    public function home() {
        require_once "./views/home/home.php";
    }

    public function contact() {
        print "Hola mundo desde contacto";
    }
}

