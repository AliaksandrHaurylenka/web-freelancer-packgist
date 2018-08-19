<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 17.08.2018
 * Time: 14:54
 */

namespace App\Controllers;


class RegisterController extends MainController
{
  public function showForm()
  {
    echo $this->views->render('auth/register');
  }

  // Register user
  function register()
  {
    $this->database->create('users', [
        'name' => $_POST['admin'],
        'password' => md5($_POST['pass']),
    ]);

    return redirect('/login');
  }
}