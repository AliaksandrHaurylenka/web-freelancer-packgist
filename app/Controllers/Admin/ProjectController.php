<?php
namespace App\Controllers\Admin;

/*use App\Services\ImageManager;
use Respect\Validation\Exceptions\ValidationException;
use Respect\Validation\Validator as v;*/

use App\Models\Database;
use League\Plates\Engine;

class ProjectController
{
    /*private $imageManager;

    public function __construct(ImageManager $imageManager)
    {
        parent::__construct();
        $this->imageManager = $imageManager;
    }*/

  private $views;
  private $database;

  function __construct(Engine $views, Database $database)
  {
    $this->views = $views;
    $this->database = $database;
  }

    public function index()
    {
        $projects = $this->database->all("portfolio_full");

        echo $this->views->render('admin/project/index', ['project' =>  $projects]);
    }

    public function create()
    {
        echo $this->views->render('admin/project/create');
    }

//    public function store()
//    {
//        $validator = v::key('title', v::stringType()->notEmpty());
//        $this->validate($validator, $_POST, [
//            'title'   =>  'Заполните поле Название'
//        ]);
//        $image = $this->imageManager->uploadImage($_FILES['image']);
//        $dimensions = $this->imageManager->getDimensions($image);
//        $data = [
//            "image" =>  $image,
//            "title" =>  $_POST['title'],
//            "description" =>  $_POST['description'],
//            "category_id" =>  $_POST['category_id'],
//            "user_id"   =>  $this->auth->getUserId(),
//            "dimensions" =>  $dimensions,
//            "date"  =>  time(),
//        ];
//
//        $this->database->create('photos', $data);
//
//        return redirect('/admin/photos');
//    }

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