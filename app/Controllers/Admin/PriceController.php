<?php

namespace App\Controllers\Admin;

use App\Controllers\MainController;

class PriceController extends MainController
{

  public function index()
  {
    $price=$this->database->all("price");
    echo $this->views->render('admin/price/index', ['price'=>$price]);
  }

  public function create()
  {
    echo $this->views->render('admin/price/create');
  }


  public function store()
  {
    $data=
      [
        "works"=>trim(strip_tags($_POST['works'])),
        "price"=>$_POST['price'],
        "time"=>$_POST['time'],
        "service"=>$_POST['service'],
      ];
    $this->database->create('price', $data);
    flash()->success(['Запись успешно добавлена']);
    return back();
  }


  public function edit($id)
  {
    $price=$this->database->find('price', $id);
    echo $this->views->render('/admin/price/edit', compact('price'));
  }


  public function update($id)
  {
    $data=
      [
        "works"=>trim(strip_tags($_POST['works'])),
        "price"=>$_POST['price'],
        "time"=>$_POST['time'],
        "service"=>$_POST['service'],
      ];
    $this->database->update('price', $id, $data);
    flash()->success(['Запись успешно обновлена']);
    return back();
  }


  public function delete($id)
  {
    $this->database->delete('price', $id);
    return back();
  }

}