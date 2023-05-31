<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');

use \BITM\SEIP12\Slider;
use \BITM\SEIP12\Utility\Utility;

$id = Utility::sanitize($_POST["id"]);
$old_picture = Utility::sanitize($_POST["old_image"]);

$slide = new Slider;
  
if ($slide->destroy($id)) {
    if (isset($old_picture) && file_exists($uploads . $old_picture)) {
        unlink($uploads . $old_picture);
    } else {
        echo "File Not Found";
    }
    set_session('success', 'Slider deleted successfully');
    redirect("slider.php");
};