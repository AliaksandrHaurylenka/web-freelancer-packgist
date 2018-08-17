<?php

namespace App\Controllers\Admin;


use App\Controllers\MainController;

class HomeController extends MainController
{

    public function index()
    {
        echo $this->views->render('admin/dashboard');
    }


}