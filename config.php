<?php

function d($var){
    echo "<pre>";
    print_r($var);
    echo "</pre>";
}

function dd($var){
d($var);
die();
}

function uploadFile($from, $destinetion){
    move_uploaded_file($from, $destinetion);
    return true;
}

function redirect($url){
    header("location:$url");
}

$webroot = "http://campus_canteen.test".DIRECTORY_SEPARATOR;
$docroot = $_SERVER['DOCUMENT_ROOT'];
$partialAdmin = $docroot.DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR;
$partialFrontend = $docroot.DIRECTORY_SEPARATOR.'frontend'.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR;
$uploads = $docroot.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR;
$dataResources = $docroot.DIRECTORY_SEPARATOR.'data_source'.DIRECTORY_SEPARATOR;