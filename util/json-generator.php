<?php

function create_json($string){
    $str = $string;
    $pattern = "/ /i";
    $pattern2 = "/,/i";

    $object_find = preg_replace($pattern2, '","', $str);
    $object_find = preg_replace($pattern, '":"', $object_find);

    $formater = substr_replace($object_find, '"', 0,0);
    $json = $formater.'"';
    return $json;
}