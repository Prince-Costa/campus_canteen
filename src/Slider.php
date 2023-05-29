<?php

use App\utilites\Config;

class Slider{
    public function index(){

    }

    public function sliders(){
        $slidersInJson = file_get_contents(Config::dataResources().'slider.json');
        $sliders = json_decode($slidersInJson);
        return $sliders;
    }
}