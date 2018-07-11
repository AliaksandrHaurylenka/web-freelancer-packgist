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

  function service()
  {
    $services = $this->database->all('services');
//    dd($services);
    echo $this->views->render('pages/service', compact('services'));
  }

  function portfolio()
  {
    $works = $this->database->limit('portfolio_full', 'id DESC', 9);
    //    dd($services);
    echo $this->views->render('pages/portfolio', compact('works'));
  }
} 