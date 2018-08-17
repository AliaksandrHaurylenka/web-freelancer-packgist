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
    $user = $this->database->selectUser('users', $_POST['admin'], $_POST['pass']);

    if($user) {
      echo $this->views->render('admin/dashboard');
    }
    //    return false;
    echo 'No';
  }

//    public function login()
//    {
//
//        try {
//            $rememberDuration = null;
//
//            if (isset($_POST['remember'])) {
//                // keep logged in for one year
//                $rememberDuration = (int) (60 * 60 * 24 * 365.25);
//            }
//
//            $this->auth->login($_POST['admin'], $_POST['pass'], $rememberDuration);
//
//            return redirect('/');
//            // user is logged in
//        }
//        catch (\Delight\Auth\InvalidEmailException $e) {
//            flash()->error(['Email не верный']);
//        }
//        catch (\Delight\Auth\InvalidPasswordException $e) {
//            flash()->error(['Неверный пароль']);
//        }
//        catch (\Delight\Auth\EmailNotVerifiedException $e) {
//            flash()->error(['Email не подтвержден']);
//        }
//        catch (\Delight\Auth\TooManyRequestsException $e) {
//            flash()->error(['КУда ломишься?!']);
//        }
//
//        return back();
//    }

    /*public function logout()
    {
        $this->auth->logOut();
        return redirect('/');
    }*/


}