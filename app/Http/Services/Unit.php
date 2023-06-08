<?php
namespace App\Http\Services;
class Unit
{

    public $length;
    public $width;


    public function getLength(){
        return $this->length ;
    }


    public function getWidth(){
        return $this->width ;
    }

    public function setLength($length){
        $this->length = $length ;
    }

    public function setWidth($width){
        $this->width = $width ;
    }




}