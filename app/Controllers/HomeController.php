<?php
/**
 * Created by PhpStorm.
 * User: Александр
 * Date: 30.04.2018
 * Time: 16:38
 */

namespace App\Controllers;


use App\Models\Database;
use League\Plates\Engine;

class HomeController {

  private $views;
  private $database;

  function __construct(Engine $views, Database $database)
  {
    $this->views = $views;
    $this->database = $database;
  }


  function main()
  {
    $slides = $this->database->all('slide');
//    dd($services);
    echo $this->views->render('pages/main', compact('slides'));
  }

  function contact()
  {
    echo $this->views->render('pages/contact');
  }

  function page()
  {
    echo $this->views->render('pages/page');
  }
} 