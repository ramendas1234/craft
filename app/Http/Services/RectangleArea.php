<?php
namespace App\Http\Services;

use App\Http\Services\Unit;

class RectangleArea implements AreaService
{

    
    public function getArea($len, $width)
    {
        // $len = $this->len ;
        // $width = $this->width ;
        return 'The area of the Rectangle is : '. $len*$width ;
    }
}