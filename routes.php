<?php

$router = new Router();
$routeList = [
    '' => 'app/Controllers/WelcomeController.php',
    'erfassen' => 'app/Controllers/CreateController.php',
    'bearbeiten' => 'app/Controllers/ManipulateController.php',
    'uebersicht' => 'app/Controllers/OverviewController.php',
    'riskStepSelected' => 'app/Controllers/returnDueTo.php',
    'borrowingSelected' => 'app/Controllers/ManipulateFormController.php'
    'validation' => 'app/Controllers/ValidateController.php'
];

$routeDescriptions = [
    'erfassen' => 'Verleihe erfassen',
    'bearbeiten' => 'Verleihe bearbeiten',
    'uebersicht' => 'Übersicht'
];

$router->define($routeList);
