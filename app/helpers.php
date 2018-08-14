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

function all($table)
{
  $all = db();
  return $all->all($table);
}


function getOne($table, $col, $val)
{
  $services = db();
  return $services->getOne($table, $col, $val);
}


function limit($table, $col, $num)
{
  $all = db();
  return $all->limit($table, $col, $num);
}


function config($field)
{
  $config = require '../app/config.php';
  return array_get($config, $field);
}

function redirect($path)
{
  header("Location: $path");
  exit;
}

function back()
{
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}