<?php

$router = new Router();

$router->define([
    '' => 'app/Controllers/WelcomeController.php'
]);
$router->define($routeList);