<?php

namespace App\Controllers;


class LoginController extends MainController
{

  public function showForm()
  {
    echo $this->views->render('auth/login');
  }

  //Проверка на наличие пользователя в базе
  function login()
  {
    $user=$this->database->selectUser('users', $_POST['admin'], $_POST['pass']);

    if($user){
      $_SESSION['admin']=$user;
      echo $this->views->render('admin/dashboard');
    } else{
      flash()->error(['Неверный логин или пароль']);
      return back();
    }
  }

  /*public function logout()
  {
      $this->auth->logOut();
      return redirect('/');
  }*/


}