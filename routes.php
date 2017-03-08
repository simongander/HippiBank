<?php

$router = new Router();
$routeList = [
    '' => 'app/Controllers/WelcomeController.php',
    'erfassen' => 'app/Controllers/CreateController.php',
    'bearbeiten' => 'app/Controllers/ManipulateController.php',
    'uebersicht' => 'app/Controllers/OverviewController.php'
];


$router->define($routeList);
