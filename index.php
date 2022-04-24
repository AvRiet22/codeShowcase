<?php

$route = $_GET['route'] ?? 'common';

include 'controller/controllerController.php';

$controller = new controllerController();
$controller->routeAction($route);


 ?>
