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
  $r->get('/', ['App\Controllers\HomeController', 'main']);
  $r->get('/contact', ['App\Controllers\HomeController', 'contact']);
  $r->get('/page', ['App\Controllers\HomeController', 'page']);
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
