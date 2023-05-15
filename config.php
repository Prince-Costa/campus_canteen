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
$webroot = "http://campus_canteen.test".DIRECTORY_SEPARATOR;
$docroot = $_SERVER['DOCUMENT_ROOT'];
$partialAdmin = $docroot.DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR;
$partialFrontend = $docroot.DIRECTORY_SEPARATOR.'frontend'.DIRECTORY_SEPARATOR.'partials'.DIRECTORY_SEPARATOR;
$adminResources = $docroot.DIRECTORY_SEPARATOR.'admin'.DIRECTORY_SEPARATOR.'resources'.DIRECTORY_SEPARATOR;