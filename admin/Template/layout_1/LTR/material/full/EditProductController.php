<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');

// $oldImage = $_POST['old_image'];
// $newImageName = uniqid().'-'.$_FILES['new_image']['name'];
// $target = $_FILES['new_image']['tmp_name'];
// $destinetion = $uploads.$newImageName;

$src = null;
$old_picture = null;
$new_picture = null;

$old_picture = $_POST['old_image'];

if (array_key_exists('new_image', $_FILES) && !empty($_FILES['new_image']['name'])) {
    $filename = $_FILES['new_image']['name']; // if you want to keep the name as is
    $filename = uniqid() . "_" . $_FILES['new_image']['name']; // if you want to keep the name as is
    $from = $_FILES['new_image']['tmp_name'];
    $destination = $uploads . $filename;

    if (isset($old_picture)) {
        if (uploadFile($from, $destination)) {
            $new_picture = $filename;
        }

        if (file_exists($uploads . $old_picture)) {
            unlink($uploads . $old_picture);
        }
    }
}


$id = $_POST['id'];
$uuid = $_POST['uuid'];
$title = $_POST['title'];
$price = $_POST['price'];
$src = $new_picture ?? $old_picture;
$alt = $_POST['image_alt'];
$e_sale = 0;

if (isset($_POST['e_sale'])) {
    $e_sale = $_POST['e_sale'];
};
$outdore = 0;
if (isset($_POST['outdoor'])) {
    $outdore = $_POST['outdoor'];
};


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
foreach ($products as $key => $product) {
    if ($product->id == $id) {
        break;
    }
}

$products[$key] = (object) $data;

$dataInJson = json_encode($products);

if (file_exists($dataResources . 'products.json')) {
    $result = file_put_contents($dataResources . 'products.json', $dataInJson);
    if ($result) {
        set_session('success', 'Product updated successfully');
        redirect('products.php');
    }
} else {
    echo 'File Not Found';
}