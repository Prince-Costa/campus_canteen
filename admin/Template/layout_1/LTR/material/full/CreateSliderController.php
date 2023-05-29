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
// dd($manager);
try{
    $img = $manager->make($_FILES['image']['tmp_name'])
                    ->resize(30, 20)
                    ->save($uploads.$filename);
    $src = $filename ;
    dd($src);
}catch(Intervention\Image\Exception\NotWritableException $e){
    dd($e);
}catch(Exception $e){
    dd($e);
}
// dd($src);
// $id = $maxId + 1;
// $uuid = "wewqsd";
// $title = $_POST['title'];
// $description = $_POST['description'];
// $alt = $_POST['image_alt'];

// $data = [
//     "id" => $id,
//     "uuid" => $uuid . $id,
//     "title" => $title,
//     "description" => $description,
//     "src" => $src,
//     "alt" => $alt,
//     "status" => true,
// ];
// // dd($data);
// $sliders[] = (object) $data;

// $dataInJson = json_encode($sliders);

// if (file_exists($dataResources . 'slider.json')) {
//     $result = file_put_contents($dataResources . 'slider.json', $dataInJson);
//     if ($result) {
//         set_session('success','Slider created Successfully');
//         redirect("slider.php");
//     }
// } else {
//     echo "File Not Found";
// }




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