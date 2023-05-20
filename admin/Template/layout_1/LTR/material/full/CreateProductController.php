<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$productsInJson = file_get_contents($dataResources . 'products.json');
$products = json_decode($productsInJson);
$maxId= 0;
foreach($products as $product){
    if($product->id > $maxId){
        $maxId= $product->id;
    };
};

$id = $maxId + 1;
$uuid = "wewqsd";
$title = $_GET['title'];
$price = $_GET['price'];
$src = $_GET['image_URL'];
$alt = $_GET['image_alt'];
$e_sale = 0;
if(isset($_GET['e_sale'])){
    $e_sale = $_GET['e_sale'];
};
$outdore = 0;
if(isset($_GET['outdoor'])){
  $outdore = $_GET['outdoor'];  
};


$type = $_GET['type'];
$cost_price = $_GET['cost_price'];
$type = $_GET['type'];
$date = date("Y-m-d H:i:s");

$data = [
"id"=>$id,
"uuid"=>$uuid.$id,
"title" =>$title,
"price" =>$price,
"src" =>$src,
"alt" =>$alt,
"e_sale" => $e_sale,
"outdore" => $outdore,
"cost_price" =>$cost_price,
"type" =>$type,
"date" =>$date,
"status" =>true,
];


$products[] = (object) $data;

$dataInJson = json_encode($products);

if(file_exists($dataResources . 'products.json')){
    $result = file_put_contents($dataResources . 'products.json',$dataInJson);
}else{
    echo "File Not Found";
}