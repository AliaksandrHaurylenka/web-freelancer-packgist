<?php

namespace App\Controllers\Admin;

use App\Models\Database;
use League\Plates\Engine;

class HomeController
{
  private $views;
  private $database;

  function __construct(Engine $views, Database $database)
  {
    $this->views = $views;
    $this->database = $database;
  }


    public function index()
    {
        echo $this->views->render('admin/dashboard');
    }


}