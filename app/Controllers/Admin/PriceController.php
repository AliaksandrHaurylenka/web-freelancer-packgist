<?php
namespace App\Controllers\Admin;

/*use App\Services\ImageManager;
use Respect\Validation\Exceptions\ValidationException;
use Respect\Validation\Validator as v;*/

use App\Controllers\MainController;

class PriceController extends MainController
{

    public function index()
    {
        $price = $this->database->all("price");

        echo $this->views->render('admin/price/index', ['price' =>  $price]);
    }

    public function create()
    {
        echo $this->views->render('admin/price/create');
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

        return redirect('/admin/price');
    }


    public function edit($id)
    {
        $price = $this->database->find('price', $id);
        echo $this->views->render('admin/price/edit', compact('price'));
    }


    public function update($id)
    {
        $data = [
            "works" =>  $_POST['works'],
            "price" =>  $_POST['price'],
            "time" =>  $_POST['time'],
            "service" =>  $_POST['service'],
        ];

        $this->database->update('price', $id, $data);

        return redirect('/admin/price');
    }


    public function delete($id)
    {
        $this->database->delete('price', $id);
        return back();
    }

//    private function validate($validator, $data, $message)
//    {
//        try {
//            $validator->assert($data);
//
//        } catch (ValidationException $exception) {
//            $exception->findMessages($message);
//            flash()->error($exception->getMessages());
//
//            return back();
//        }
//    }
}