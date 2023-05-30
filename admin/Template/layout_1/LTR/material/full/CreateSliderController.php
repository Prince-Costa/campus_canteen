<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');

use \BITM\SEIP12\Slider;
use \BITM\SEIP12\Utility\Utility;
use Intervention\Image\ImageManager;


$manager = new ImageManager(['driver' => 'imagick']);

$filename = uniqid()."_".$_FILES['image']['name'];

try{
    $img = $manager->make($_FILES['image']['tmp_name'])
                    ->resize(30, 20)
                    ->save($uploads.$filename);
    $src = $filename ;
}catch(Intervention\Image\Exception\NotWritableException $e){
    dd($e);
}catch(Exception $e){
    dd($e);
}


$slider = new Slider();

$slider->alt = Utility::sanitize($_POST['image_alt']);
$slider->title = Utility::sanitize($_POST['title']);
$slider->description = Utility::sanitize($_POST['description']);
$slider->status = true;
$slider->src = $src;

$result = $slider->store($slider);

if($result){
    redirect("slider.php");
}else{
    echo "Data is not stored";
}