<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');


$id = $_POST['id'];
$uuid = $_POST['uuid'];
$title = $_POST['title'];
$price = $_POST['price'];
$src = $_POST['image'];
$alt = $_POST['image_alt'];
$e_sale = 0;
if (isset($_POST['e_sale'])) {
    $e_sale = $_POST['e_sale'];
}
;
$outdore = 0;
if (isset($_POST['outdoor'])) {
    $outdore = $_POST['outdoor'];
}
;


$type = $_POST['type'];
$cost_price = $_POST['cost_price'];
$type = $_POST['type'];
$date = date("Y-m-d H:i:s");

$data = [
    "id" => $id,
    "uuid" => $uuid . $id,
    "title" => $title,
    "price" => $price,
    "src" => $src,
    "alt" => $alt,
    "e_sale" => $e_sale,
    "outdore" => $outdore,
    "cost_price" => $cost_price,
    "type" => $type,
    "date" => $date,
    "status" => true,
];
$productsInJson = file_get_contents($dataResources . 'products.json');
$products = json_decode($productsInJson);
foreach($products as $key => $product){
    if($product->id == $id){
        break;
    }
}

$products[$key] = (object) $data;

$dataInJson = json_encode($products);

if (file_exists($dataResources . 'products.json')) {
    $result = file_put_contents($dataResources . 'products.json', $dataInJson);
    if ($result) {
        set_session('success','Product updated successfully');
        redirect('products.php');
    }
} else {
    echo 'File Not Found';
}