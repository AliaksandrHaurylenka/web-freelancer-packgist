<?php

use Aura\SqlQuery\QueryFactory;
use DI\ContainerBuilder;
use Delight\Auth\Auth;
use FastRoute\RouteCollector;
use League\Plates\Engine;

$containerBuilder = new ContainerBuilder;
$containerBuilder -> addDefinitions(
    [


        PDO::class => function () {
            $driver = config('database.driver');
            $host = config('database.host');
            $database_name = config('database.database_name');
            $charset = config('database.charset');
            $username = config('database.username');
            $password = config('database.password');

            return new PDO("$driver:host=$host; dbname=$database_name; charset=$charset", $username, $password);
        },

        Engine::class => function () {
            $path = config('views_path');
            return new Engine($path);
        },

        Delight\Auth\Auth::class => function ($container) {
            return new Auth($container -> get('PDO'));
        },

        QueryFactory::class => function () {
          $driver = config('database.driver');
          return new QueryFactory($driver);
        },

    ]);

$container = $containerBuilder->build();


$dispatcher = FastRoute\simpleDispatcher(function (RouteCollector $r) {
    $r->get('/', ['App\Controllers\HomeController', 'main']);
    $r->get('/contact', ['App\Controllers\HomeController', 'contact']);
    $r->get('/service', ['App\Controllers\HomeController', 'service']);
    $r->get('/portfolio', ['App\Controllers\HomeController', 'portfolio']);
    $r->get('/site-analytics', ['App\Controllers\HomeController', 'analytics']);
    $r->get('/site-creation', ['App\Controllers\HomeController', 'creation']);
    $r->get('/site-design', ['App\Controllers\HomeController', 'design']);
    $r->get('/work/{name}', ['App\Controllers\HomeController', 'work']);

    $r->get('/register', ['App\Controllers\RegisterController', 'showForm']);
    $r->post('/register', ['App\Controllers\RegisterController', 'register']);


    $r->get('/login', ['App\Controllers\LoginController', 'showForm']);
    $r->post('/login', ['App\Controllers\LoginController', 'login']);
    $r->get('/logout', ['App\Controllers\LoginController', 'logout']);


    $r->addGroup('/AliaksandrHaurylenka', function (RouteCollector $r) {
        $r->get('', ['App\Controllers\Admin\HomeController', 'index']);

        $r->get('/project', ['App\Controllers\Admin\ProjectController', 'index']);
        $r->get('/project/create', ['App\Controllers\Admin\ProjectController', 'create']);
        $r->post('/project/store', ['App\Controllers\Admin\ProjectController', 'store']);
        $r->get('/project/{id:\d+}/delete', ['App\Controllers\Admin\ProjectController', 'delete']);
        $r->get('/project/{id:\d+}/edit', ['App\Controllers\Admin\ProjectController', 'edit']);
        $r->post('/project/{id:\d+}/update', ['App\Controllers\Admin\ProjectController', 'update']);

        $r->get('/price', ['App\Controllers\Admin\PriceController', 'index']);
        $r->get('/price/create', ['App\Controllers\Admin\PriceController', 'create']);
        $r->post('/price/store', ['App\Controllers\Admin\PriceController', 'store']);
        $r->get('/price/{id:\d+}/delete', ['App\Controllers\Admin\PriceController', 'delete']);
        $r->get('/price/{id:\d+}/edit', ['App\Controllers\Admin\PriceController', 'edit']);
        $r->post('/price/{id:\d+}/update', ['App\Controllers\Admin\PriceController', 'update']);

        $r->get('/services', ['App\Controllers\Admin\ServicesController', 'index']);
        $r->get('/services/create', ['App\Controllers\Admin\ServicesController', 'create']);
        $r->post('/services/store', ['App\Controllers\Admin\ServicesController', 'store']);
        $r->get('/services/{id:\d+}/delete', ['App\Controllers\Admin\ServicesController', 'delete']);
        $r->get('/services/{id:\d+}/edit', ['App\Controllers\Admin\ServicesController', 'edit']);
        $r->post('/services/{id:\d+}/update', ['App\Controllers\Admin\ServicesController', 'update']);
    });

});

// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);

$routeInfo = $dispatcher->dispatch($httpMethod, $uri);
switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        header('HTTP/1.1 404 Not Found', true, 404);
        include "404.php";
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        dd('Метод запроса не верный');
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

            //dd($handler);
        //    dd($vars);
        //call_user_func($handler);

        $container -> call($handler, $vars);
       //dd($container);
        break;
}
