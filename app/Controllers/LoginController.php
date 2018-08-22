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

        if ($user) {
            $_SESSION['admin'] = $user;
            echo $this->views->render('admin/dashboard');
        }else {

            flash()->error(['Неверный логин или пароль']);
            return back();
        }
    }

      /*try {
        $rememberDuration = null;
        if (isset($_POST['remember'])) {
          // keep logged in for one year
          $rememberDuration = (int) (60 * 60 * 24 * 365.25);
        }
        $this->auth->login($_POST['email'], $_POST['password'], $rememberDuration);
        return redirect('/');



        // user is logged in
      }
      catch (\Delight\Auth\InvalidEmailException $e) {
        flash()->error(['Email не верный']);
      }
      catch (\Delight\Auth\InvalidPasswordException $e) {
        flash()->error(['Неверный пароль']);
      }
      catch (\Delight\Auth\EmailNotVerifiedException $e) {
        flash()->error(['Email не подтвержден']);
      }
      catch (\Delight\Auth\TooManyRequestsException $e) {
        flash()->error(['КУда ломишься?!']);
      }

      return back();
    }*/


    /*public function logout()
    {
        $this->auth->logOut();
        return redirect('/');
    }*/


}