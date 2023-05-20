<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$productsInJson = file_get_contents($dataResources . 'products.json');
dd($productsInJson);
$id = $_POST["id"];
$productsInArry = json_decode($productsInJson);
// d($productsInArry);
foreach($productsInArry as $key => $product){
        if($product->id == $id){
            break;
        }
};

array_splice($productsInArry, $key, 1);

$dataInJson = json_encode($productsInArry);

if(file_exists($dataResources . 'products.json')){
    $result = file_put_contents($dataResources . 'products.json',$dataInJson);
    if($result){
        redirect("products.php");
    }
}else{
    echo "File Not Found";
}