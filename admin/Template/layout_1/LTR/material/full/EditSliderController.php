<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');

use \BITM\SEIP12\Slider;
use \BITM\SEIP12\Utility\Utility;
use Intervention\Image\ImageManager;


$src = null;
$old_picture = null;
$new_picture = null;

$old_picture = $_POST['old_image'];

if (array_key_exists('new_image', $_FILES) && !empty($_FILES['new_image']['name'])) {

    $manager = new ImageManager(['driver' => 'imagick']);


    $filename = uniqid() . "_" . $_FILES['new_image']['name'];
    if (isset($old_picture)) {
        try {
            $img = $manager->make($_FILES['new_image']['tmp_name'])
                ->resize(300, 200)
                ->save($uploads . $filename);
            $new_picture = $filename;
        } catch (Intervention\Image\Exception\NotWritableException $e) {
            dd($e);
        } catch (Exception $e) {
            dd($e);
        }

        if (file_exists($uploads . $old_picture)) {
            unlink($uploads . $old_picture);
        }
    }
}


$id = Utility::sanitize($_POST['id']);

$slide = new Slider;
$slider = $slide->Find($id);

$slider->title = Utility::sanitize($_POST['title']);
$slider->description = Utility::sanitize($_POST['description']);
$slider->src = $new_picture ?? $old_picture;
$slider->alt = Utility::sanitize($_POST['image_alt']);
$slider->status = true;

    if ($slide->update($slider)) {
        set_session('success', 'Slider updated successfully');
        redirect('slider.php');
    }else {
    echo 'File Not Found';
}