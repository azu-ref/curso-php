<?php

ini_set('display_errors', 1);
ini_set('display_starup_errors', 1);
error_reporting(E_ALL);

require_once '../vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'cursoPhp',
    'username'  => 'root',
    'password'  => '',
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();

// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);

$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();
$map->get('index', '/cursophp/', '../index.php');
$map->get('addJobs', '/cursophp/jobs/add', '../addJobs.php');

$matcher = $routerContainer->getMatcher();

$route = $matcher->match($request);
if(!$route) {
    echo 'No route match';
}

var_dump($route);

/*
$route = $_GET['route'] ?? '/';

if($route === '/') { //esto es un ruteo un poco feo pero funcional
	require '../index.php';
}elseif ($route === 'addJob') {
	require '../addJob.php';
}
*/

