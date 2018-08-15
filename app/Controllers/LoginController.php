<?php
namespace App\Controllers;

//use App\Services\Roles;
use Delight\Auth\Auth;
use App\Models\Database;
use League\Plates\Engine;

class LoginController
{
  private $views;
  private $database;
  private $auth;

  function __construct(Engine $views, Database $database, Auth $auth)
  {
    $this->views = $views;
    $this->database = $database;
    $this->auth = $auth;
  }

    public function showForm()
    {
//        $this->checkForAccess();

        echo $this->views->render('auth/login');
    }

    public function login()
    {
//        $this->checkForAccess();

        try {
            $rememberDuration = null;

            if (isset($_POST['remember'])) {
                // keep logged in for one year
                $rememberDuration = (int) (60 * 60 * 24 * 365.25);
            }

            $this->auth->login($_POST['admin'], $_POST['pass'], $rememberDuration);

//            $this->checkIsBanned();

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
    }

    /*public function logout()
    {
        $this->auth->logOut();
        return redirect('/');
    }*/


}