<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');

use \BITM\SEIP12\Slider;
use \BITM\SEIP12\Utility\Utility;
use Intervention\Image\ImageManager;
// $slidersInJson = file_get_contents($dataResources . 'slider.json');
// $sliders = json_decode($slidersInJson);
// // dd($_FILES);
// $maxId = 0;
// if (count($sliders) > 0) {
//     foreach ($sliders as $slider) {
//         if ($slider->id > $maxId) {
//             $maxId = $slider->id;
//         };
//     };
// }
// $fileName =uniqid().'_'.$_FILES['image']['name'];
// $from = $_FILES['image']['tmp_name'];
// $destinetion = $uploads.$fileName;
// $src = null;
// if(uploadFile($from, $destinetion)){
//     $src = $fileName;
// }



$manager = new ImageManager(['driver' => 'imagick']);

$filename = uniqid()."_".$_FILES['image']['name'];

try{
    $img = $manager->make($_FILES['image']['tmp_name'])
                    ->resize(300, 200)
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