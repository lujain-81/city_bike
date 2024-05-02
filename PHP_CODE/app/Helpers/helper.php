<?php
use \Carbon\Carbon;

if (!function_exists('informArray')) {
    function informArray($op)
    {
        $array = [];
        $handleArray = explode(',', trim($op));
        foreach ($handleArray as $key => $value) {
            $array[$value] = trim($value);
        }
        return $array;
    }
}

if (!function_exists('clcPer')) {
    function clcPer($total, $value)
    {
       if($total == 0 || $value == 0){
        return 0;
       }
       return round(($value/$total) * 100);
    }
}

if (!function_exists('isImg')) {
    function isImg($file)
    {  
        $array = explode('.', $file);
        $extension = strtolower(end($array));   
        if(in_array($extension, ['png', 'jpg', 'jpeg', 'bmp', 'gif'])){
            return true;
        }
        return false;
    }
}
