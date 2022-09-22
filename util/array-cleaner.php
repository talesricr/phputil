<?php

function cleaner($array){
    $array = array_filter($array , 'strlen');    
    $array = array_values($array);
    return $array;
};