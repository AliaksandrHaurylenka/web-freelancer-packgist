<?php
use App\Models\Database;

function db()
{
  global $container;
  $sql = $container->get('Aura\SqlQuery\QueryFactory');
  $pdo = $container->get('PDO');
  $result = new Database($sql, $pdo);
  return $result;
}

function menu()
{
  $menu = db();
  return $menu->all('menu');
}

function menuDrop($table, $col, $company)
{
  $menu = db();
  return $menu->allWhere($table, $col,  $company);
}

function config($field)
{
  $config = require '../app/config.php';
  return array_get($config, $field);
}