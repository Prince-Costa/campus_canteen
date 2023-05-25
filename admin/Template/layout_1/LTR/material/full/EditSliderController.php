<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');

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
$description = $_POST['description'];
$src = $new_picture ?? $old_picture;
$alt = $_POST['image_alt'];


$data = [
    "id" => $id,
    "uuid" => $uuid . $id,
    "title" => $title,
    "description" => $description,
    "src" => $src,
    "alt" => $alt,
    "status" => true,
];

$slidersInJson = file_get_contents($dataResources . 'slider.json');
$sliders = json_decode($slidersInJson);
foreach ($sliders as $key => $slider) {
    if ($slider->id == $id) {
        break;
    }
}

$sliders[$key] = (object) $data;

$dataInJson = json_encode($sliders);

if (file_exists($dataResources . 'slider.json')) {
    $result = file_put_contents($dataResources . 'slider.json', $dataInJson);
    if ($result) {
        set_session('success', 'Slider updated successfully');
        redirect('slider.php');
    }
} else {
    echo 'File Not Found';
}