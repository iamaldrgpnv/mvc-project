<?php
require_once __DIR__ . '/../vendor/autoload.php';
use Web\Project\Core\Router;

$router = new Router;
$router::run();