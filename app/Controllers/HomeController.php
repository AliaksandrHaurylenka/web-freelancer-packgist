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


  function index()
  {
    $slides = $this->database->all('slide');
//    dd($slides);
    echo $this->views->render('index', compact('slides'));
  }

  function children()
  {
    echo $this->views->render('children');
  }

  function contact()
  {
    echo $this->views->render('contact');
  }

  function life_1()
  {
    echo $this->views->render('life_1');
  }

  function life_2()
  {
    echo $this->views->render('life_2');
  }

  function pension_1()
  {
    echo $this->views->render('pension_1');
  }

  function pension_2()
  {
    echo $this->views->render('pension_2');
  }

  function autokasko()
  {
    echo $this->views->render('autokasko');
  }

  function property()
  {
    echo $this->views->render('property');
  }

  function health()
  {
    echo $this->views->render('health');
  }

  function tourism()
  {
    echo $this->views->render('tourism');
  }
} 