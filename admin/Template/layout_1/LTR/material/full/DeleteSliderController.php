<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$sliderInJson = file_get_contents($dataResources . 'slider.json');
$slidersInArray = json_decode($sliderInJson);

$id = $_POST["id"];
$old_picture = $_POST["old_image"];

foreach($slidersInArray as $key => $slider){
        if($slider->id == $id){
            break;
        }
};

array_splice($slidersInArray, $key, 1);

$dataInJson = json_encode($slidersInArray);

if(file_exists($dataResources . 'slider.json')){
    $result = file_put_contents($dataResources . 'slider.json',$dataInJson);
    if(isset($old_picture ) && file_exists($uploads.$old_picture )){
        unlink( $uploads.$old_picture );
    }
    if($result){
        set_session('success','Slider deleted successfully');
        redirect("slider.php");
    }
}else{
    echo "File Not Found";
}