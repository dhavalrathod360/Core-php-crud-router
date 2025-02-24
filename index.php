<?php
require ('functions.php');
require('Class/Database.php');
require('Class/Router.php');


$config = require('config.php');

$db= new Database($config);

$router = new Router;

$routes =require('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

$router->route($uri,$method);


?>