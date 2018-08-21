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

  public function uploadImage($image, $width, $height, $currentImage = null)
  {
    if(!is_file($image['tmp_name']) && !is_uploaded_file($image['tmp_name'])) { return $currentImage; }
    $this->deleteImage($currentImage);

    $filename=strtolower(str_random(10)).'.'.pathinfo(strtolower($image['name']), PATHINFO_EXTENSION);
//    $image=Image::make($image['tmp_name'])->resize($width, $height);
//    $image=Image::make($image['tmp_name'])->resizeCanvas($width, $height);
//    $image=Image::make($image['tmp_name'])->encode('jpg', 30)->fit($width, $height);
    $image=Image::make($image['tmp_name'])->fit($width, $height);
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

  /*public function getDimensions($file)
  {
    if($this->checkImageExists($file)){
      list($width, $height)=getimagesize($this->folder.$file);
      return $width."x".$height;
    }
  }*/

  /*function getImage($image)
  {

    if($this->checkImageExists($image)){
      return '/'.$this->folder.$image;
    }

    return '/img/no-user.png';
  }*/
}