<?php

namespace BITM\SEIP12;

class Config{

    static public function datasource(){

        return self::docroot()."data_source".DIRECTORY_SEPARATOR;

    }

    static public function docroot(){
        
        return $_SERVER['DOCUMENT_ROOT'].DIRECTORY_SEPARATOR;
    }


}







