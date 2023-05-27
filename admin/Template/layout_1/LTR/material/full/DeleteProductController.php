<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$productsInJson = file_get_contents($dataResources . 'products.json');

$id = $_POST["id"];
$old_picture = $_POST["old_image"];
$productsInArray = json_decode($productsInJson);

foreach($productsInArray as $key => $product){
        if($product->id == $id){
            break;
        }
};

array_splice($productsInArray, $key, 1);

$dataInJson = json_encode($productsInArray);

if(file_exists($dataResources . 'products.json')){
    $result = file_put_contents($dataResources . 'products.json',$dataInJson);
    if(isset($old_picture ) && file_exists($uploads.$old_picture )){
        unlink( $uploads.$old_picture );
    }
    if($result){
        set_session('success','Product deleted successfully');
        redirect("products.php");
    }
}else{
    echo "File Not Found";
}