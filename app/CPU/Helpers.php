<?php

namespace App\CPU;

use Illuminate\Support\Str;

class Helpers {
    public static function getMoneySeparator($string){
        return str_replace(',', '.', number_format($string));
    }

    public static function getCharStripTags($string, $amount){
        return Str::limit(strip_tags($string), $amount, '...');
    }
}