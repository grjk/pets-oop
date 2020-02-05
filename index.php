<?php

session_start();

ini_set('display_errors', 1);
error_reporting(E_ALL);

require('vendor/autoload.php');

$f3 = Base::Instance();

$f3->set('DEBUG', 3);

$f3->route("GET /", function() {

    $pet1 = new Pet("Walrus", "blue");
    $pet1->eat();
    $pet1->talking();

    /*$view = new Template();
    echo $view-render('views/my-pets.html');*/
});

$f3->run();