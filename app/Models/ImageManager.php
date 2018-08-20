<?php

namespace App\Models;

use Intervention\Image\ImageManagerStatic as Image;

class ImageManager
{
  private $folder;

  public function __construct()
  {
    $this->folder=config('uploadsFolder');
  }

  public function uploadImage($image)
  {
    $filename=strtolower(str_random(10)).'.'.pathinfo(strtolower($image['name']), PATHINFO_EXTENSION);
    $image=Image::make($image['tmp_name']);
    $image->save($this->folder.$filename);
    return $filename;
  }

  public function checkImageExists($path)
  {
    if($path!=null && is_file($this->folder.$path) && file_exists($this->folder.$path)){
      return true;
    }
  }

  public function deleteImage($image)
  {
    if($this->checkImageExists($image)){
      unlink($this->folder.$image);
    }
  }

  public function getDimensions($file)
  {
    if($this->checkImageExists($file)){
      list($width, $height)=getimagesize($this->folder.$file);
      return $width."x".$height;
    }
  }

  function getImage($image)
  {

    if($this->checkImageExists($image)){
      return '/'.$this->folder.$image;
    }

    return '/img/no-user.png';
  }
}