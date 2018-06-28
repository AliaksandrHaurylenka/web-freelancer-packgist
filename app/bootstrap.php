<?php

use Aura\SqlQuery\QueryFactory;
use DI\ContainerBuilder;

$containerBuilder=new ContainerBuilder();
$containerBuilder->addDefinitions(
[
  QueryFactory::class=>function () {
    $driver = config('database.driver');
    return new QueryFactory($driver);
  },

  PDO::class=>function () {
    $driver = config('database.driver');
    $host = config('database.host');
    $database_name = config('database.database_name');
    $username = config('database.username');
    $password = config('database.password');

    return new PDO("$driver:host=$host;dbname=$database_name", $username, $password);
  },

  \League\Plates\Engine::class=>function () {
    $path = config('views_path');
    return new \League\Plates\Engine($path);
  }

]);

$container=$containerBuilder->build();


$dispatcher=FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
  $r->get('/', ['App\Controllers\HomeController', 'index']);
  $r->get('/contact', ['App\Controllers\HomeController', 'contact']);

  //Виды страхования
  $r->get('/children', ['App\Controllers\HomeController', 'children']);
  $r->get('/life_1', ['App\Controllers\HomeController', 'life_1']);
  $r->get('/life_2', ['App\Controllers\HomeController', 'life_2']);
  $r->get('/pension_1', ['App\Controllers\HomeController', 'pension_1']);
  $r->get('/pension_2', ['App\Controllers\HomeController', 'pension_2']);
  $r->get('/autokasko', ['App\Controllers\HomeController', 'autokasko']);
  $r->get('/property', ['App\Controllers\HomeController', 'property']);
  $r->get('/tourism', ['App\Controllers\HomeController', 'tourism']);
  $r->get('/health', ['App\Controllers\HomeController', 'health']);
});

// Fetch method and URI from somewhere
$httpMethod=$_SERVER['REQUEST_METHOD'];
$uri=$_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if(false!==$pos=strpos($uri, '?')){
  $uri=substr($uri, 0, $pos);
}
$uri=rawurldecode($uri);

$routeInfo=$dispatcher->dispatch($httpMethod, $uri);
switch($routeInfo[0]){
  case FastRoute\Dispatcher::NOT_FOUND:
    header('HTTP/1.1 404 Not Found', true, 404);
    include "404.php";
    break;
  case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
    $allowedMethods=$routeInfo[1];
    var_dump("405 Method Not Allowed");
    //dd($_SERVER);
    break;
  case FastRoute\Dispatcher::FOUND:
    $handler=$routeInfo[1];
    $vars=$routeInfo[2];

    //    dd($handler);
    //    dd($vars);
    //call_user_func($handler);

    $container->call($handler, $vars);
    break;
}
