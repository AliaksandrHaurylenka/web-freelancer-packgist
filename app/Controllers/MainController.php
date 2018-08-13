<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.08.2018
 * Time: 14:03
 */

namespace App\Controllers;

use App\Models\Database;
use League\Plates\Engine;

class MainController
{
  private $views;
  private $database;

  function __construct(Engine $views, Database $database)
  {
    /*$this->views = $views;
    $this->database = $database;*/
    $this->views = components(Engine::class);
    $this->database = components(Database::class);
  }
}