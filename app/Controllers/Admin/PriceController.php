<?php
namespace App\Controllers\Admin;

/*use App\Services\ImageManager;
use Respect\Validation\Exceptions\ValidationException;
use Respect\Validation\Validator as v;*/

use App\Models\Database;
use League\Plates\Engine;

class PriceController
{

  private $views;
  private $database;

  function __construct(Engine $views, Database $database)
  {
    $this->views = $views;
    $this->database = $database;
  }

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
        /*$validator = v::key('title', v::stringType()->notEmpty());
        $this->validate($validator, $_POST, [
            'title'   =>  'Заполните поле Название'
        ]);
        $image = $this->imageManager->uploadImage($_FILES['image']);
        $dimensions = $this->imageManager->getDimensions($image);*/
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

//    public function edit($id)
//    {
//        $photo = $this->database->find('photos', $id);
//        $categories = $this->database->all('categories');
//        echo $this->view->render('admin/photos/edit', ['categories'    =>  $categories, 'photo'  =>  $photo]);
//    }

//    public function update($id)
//    {
//        $validator = v::key('title', v::stringType()->notEmpty());
//        $this->validate($validator, $_POST, [
//            'title'   =>  'Заполните поле Название'
//        ]);
//        $photo = $this->database->find('photos',$id);
//
//        $image = $this->imageManager->uploadImage($_FILES['image'], $photo['image']);
//        $dimensions = $this->imageManager->getDimensions($image);
//
//        $data = [
//            "image" =>  $image,
//            "title" =>  $_POST['title'],
//            "description" =>  $_POST['description'],
//            "category_id" =>  $_POST['category_id'],
//            "user_id"   =>  $this->auth->getUserId(),
//            "dimensions"    =>  $dimensions
//        ];
//
//        $this->database->update('photos', $id, $data);
//
//        return redirect('/admin/photos');
//    }

//    public function delete($id)
//    {
//        $photo = $this->database->find('photos', $id);
//        $this->imageManager->deleteImage($photo['image']);
//        $this->database->delete('photos', $id);
//        return back();
//    }

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