<?php

function random_password($characters){
    $symbols = ["!", "@", "#", "$", "%", "&", "*", "(", ")", "_", "+", "=", "-", "`", ":", ";", ".", ">", "<", ","];
    $numbers = ["1", "2", "3", "4", "5", "6", "7", "8", "9", "0"];
    $alphabet = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
    $alphabetalt = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z"];
    $password = [];
    
    for($i = 0; $i <= $characters; $i++){
        $randomizer = rand(0,3);
        if($randomizer == 1){array_push($password, $symbols[rand(0,18)]);}
        if($randomizer == 2){array_push($password, $numbers[rand(0,9)]);}
        if($randomizer == 3){array_push($password, $alphabet[rand(0,25)]);}
        if($randomizer == 4){array_push($password, $alphabetalt[rand(0,25)]);}
    }

    return $password = implode($password);
}

echo random_password(10);