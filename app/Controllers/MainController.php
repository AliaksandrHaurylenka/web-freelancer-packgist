<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.08.2018
 * Time: 14:03
 */

namespace App\Controllers;

use App\Models\Database;
use Delight\Auth\Auth;
use League\Plates\Engine;

class MainController
{
  protected $views;
  protected $database;
  protected $auth;

  function __construct()
  {
    $this->views = components(Engine::class);
    $this->database = components(Database::class);
    $this->auth = components(Auth::class);
  }
}