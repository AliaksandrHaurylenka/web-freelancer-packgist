<?php

namespace App\Controllers\Admin;

use App\Controllers\MainController;

class ServicesController extends MainController
{

  public function index()
  {
    $services=$this->database->all("services");
    echo $this->views->render('admin/services/index', ['services'=>$services]);
  }

  public function edit($id)
  {
    $services=$this->database->find('services', $id);
    echo $this->views->render('/admin/services/edit', compact('services'));
  }


  public function update($id)
  {
    $data=
      [
        "description"=>$_POST['description'],
        "technology"=>$_POST['technology'],
        "what_we_do"=>$_POST['what_we_do'],
      ];
    $this->database->update('services', $id, $data);
    flash()->success(['Услуга успешно обновлена']);
    return back();
  }

}