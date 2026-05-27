<?php

session_start();

$basePath = dirname($_SERVER['SCRIPT_NAME']);
$basePath = str_replace('\\', '/', $basePath);

define('BASE_URL', $basePath);

require_once '../app/middleware.php';

$middleware = new middleware();
$middleware->checklogin();

require_once '../app/core/App.php';

$app = new App();

?>