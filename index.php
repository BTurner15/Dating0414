
<?php
// Bruce Turner, Professor Ostrander, Spring 2019 -->
// IT 328 Full STack Web Development -->
// Dating 1 Assignment -->
// file: index.php  --> default landing page, defines default route
//
//
ini_set('display_errors', 1);
error_reporting(E_ALL);
require_once('vendor/autoload.php');
$f3 = Base::instance();
$f3->set('DEBUG',3);
//Define a default route
$f3->route('GET /', function(){
    //echo '<h1>Hola!</h1>';
    //display a view
    $view = new View();
    echo $view->render('views/home.html');

});
//Run fat free
$f3->run();