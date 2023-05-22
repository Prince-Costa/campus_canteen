<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$productsInJson = file_get_contents($dataResources . 'products.json');
$products = json_decode($productsInJson);
// dd($_POST);
$maxId = 0;
if (count($products) > 0) {
    foreach ($products as $product) {
        if ($product->id > $maxId) {
            $maxId = $product->id;
        };
    };
}
$fileName =uniqid().'_'.$_FILES['image']['name'];
$from = $_FILES['image']['tmp_name'];
$destinetion = $uploads.$fileName;
$src = null;
if(uploadFile($from, $destinetion)){
    $src = $fileName;
}


$id = $maxId + 1;
$uuid = "wewqsd";
$title = $_POST['title'];
$price = $_POST['price'];
// $src = $fileName;
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

$products[] = (object) $data;

$dataInJson = json_encode($products);

if (file_exists($dataResources . 'products.json')) {
    $result = file_put_contents($dataResources . 'products.json', $dataInJson);
    if ($result) {
        redirect("products.php");
    }
} else {
    echo "File Not Found";
}