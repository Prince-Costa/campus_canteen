<?php

class Config{
    public $webroot = "http://campus_canteen.test".DIRECTORY_SEPARATOR;
    public $docroot = $_SERVER['DOCUMENT_ROOT'];
    public $dataResources = DIRECTORY_SEPARATOR.'data_source'.DIRECTORY_SEPARATOR;

    function webroot(){
        return self::$webroot;
    }

    function docroot(){
        return self::$docroot;
    }

    function dataResources(){
        return self::docroot().self::$dataResources;
    }
}