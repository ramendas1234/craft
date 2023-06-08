<?php
namespace App\Http\Services;

use App\Http\Services\Unit;

class SquareArea implements AreaService
{

    
    public function getArea($len, $width)
    {
        // $len = $this->len ;
        // $width = $this->width ;
        return 'The area of the Square is : '. $len*$width ;
    }
}