<?php

namespace App\Controllers\Admin;

use App\Models\ImageManager;

use App\Controllers\MainController;

class ProjectController extends MainController
{
  private $imageManager;

  public function __construct(ImageManager $imageManager)
  {
    parent::__construct();
    $this->imageManager=$imageManager;
  }

  public function index()
  {
    $projects=$this->database->all("portfolio_full");
    echo $this->views->render('admin/project/index', ['project'=>$projects]);
  }

  public function create()
  {
    echo $this->views->render('admin/project/create');
  }

  public function store()
  {
    $image=$this->imageManager->uploadImage($_FILES['image'], 736, 330);
    $image_site=$this->imageManager->uploadImage($_FILES['image_site'], 1141, 967);
    $data=
      [
        "name"=>trim(strip_tags($_POST['title'])),
        "img"=>$image,
        "img_site"=>$image_site,
        "description"=>$_POST['description'],
        "type_project"=>trim(strip_tags($_POST['type_project'])),
        "technology"=>$_POST['technology'],
        "link"=>trim(strip_tags($_POST['link'])),
        "link_site"=>trim(strip_tags($_POST['link_site'])),
      ];

    $this->database->create('portfolio_full', $data);
    flash()->success(['Проект успешно добавлен']);
    return back();
  }

  public function edit($id)
  {
    $project=$this->database->find('portfolio_full', $id);
    echo $this->views->render('admin/project/edit', ['project'=>$project]);
  }

  public function update($id)
  {
    $project=$this->database->find('portfolio_full', $id);

    $image=$this->imageManager->uploadImage($_FILES['image'], 736, 330, $project['img']);
    $image_site=$this->imageManager->uploadImage($_FILES['image_site'], 1141, 967, $project['img_site']);

    $data=
      [
        "name"=>trim(strip_tags($_POST['title'])),
        "img"=>$image, "img_site"=>$image_site,
        "description"=>$_POST['description'],
        "type_project"=>trim(strip_tags($_POST['type_project'])),
        "technology"=>$_POST['technology'],
        "link"=>trim(strip_tags($_POST['link'])),
        "link_site"=>trim(strip_tags($_POST['link_site'])),
      ];

    $this->database->update('portfolio_full', $id, $data);
    flash()->success(['Проект успешно обнавлен']);
    return back();
  }

  public function delete($id)
  {
    $project=$this->database->find('portfolio_full', $id);
    $this->imageManager->deleteImage($project['img']);
    $this->imageManager->deleteImage($project['img_site']);
    $this->database->delete('portfolio_full', $id);
    flash()->success(['Проект успешно удален']);
    return back();
  }
}