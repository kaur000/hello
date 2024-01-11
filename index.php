<?php
// this is my controller


// turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);


// require the autoload file
require_once ('vendor/autoload.php');
// instantiate the F3 base class
$f3 = Base :: instance ();
//Base f3  = new Base ();

// Define a default route
$f3->route ('GET /', function (){
    echo "<h1>hello</h1>";
});

//Tun fat-free
$f3->run();