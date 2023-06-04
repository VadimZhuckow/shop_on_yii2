<?php

namespace app\models;

class Debug
{
    public static function vd($string)
    {
        echo "<pre>";
        var_dump($string);
        echo "<pre>";
    }

}