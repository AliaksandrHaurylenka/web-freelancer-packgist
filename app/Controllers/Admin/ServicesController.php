<?php
namespace App\Controllers\Admin;

//use Respect\Validation\Exceptions\ValidationException;
//use Respect\Validation\Validator as v;

use App\Controllers\MainController;

class ServicesController extends MainController
{

    public function index()
    {
        $services = $this->database->all("services");
        echo $this->views->render('admin/services/index', ['services' =>  $services]);
    }

    public function create()
    {
        echo $this->views->render('admin/services/create');
    }


    public function store()
    {
        $data = [
            "works" =>  $_POST['works'],
            "price" =>  $_POST['price'],
            "time" =>  $_POST['time'],
            "service" =>  $_POST['service'],
        ];
//        dd($data);
        $this->database->create('price', $data);

        return redirect('/AliaksandrHaurylenka/price');
    }


    public function edit($id)
    {
        $services = $this->database->find('services', $id);
        echo $this->views->render('/admin/services/edit', compact('services'));
    }


    public function update($id)
    {
        $data = [
//            "name" =>  $_POST['title'],
//            "link" =>  $_POST['link'],
            "description" =>  $_POST['description'],
            "technology" =>  $_POST['technology'],
            "what_we_do" =>  $_POST['what_we_do'],
        ];

        $this->database->update('services', $id, $data);

        return redirect('/AliaksandrHaurylenka/services');
    }


    public function delete($id)
    {
        $this->database->delete('price', $id);
        return back();
    }

}