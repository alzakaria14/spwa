<?php

function generate_otp($n)
{
    $generator = '1357902468';
    $result = '';
    for($i = 0; $i < $n; $i++){
        $result .= substr($generator, (rand()%(strlen($generator))), 1);
    }

    return $result;
}

function convert_phone_number($phoneNumber)
{
    $phoneNumber = str_replace(' ','',$phoneNumber);
    $phoneNumber = str_replace('-','',$phoneNumber);

    if(substr($phoneNumber,0,1) === '+'){
        $phoneNumber = substr($phoneNumber,1);
    }else if(substr($phoneNumber,0,1) === '0'){
        $phoneNumber = '62'.substr($phoneNumber,1);
    }
    return $phoneNumber;
}


function random_string($length)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characters_length = strlen($characters);
    $random_string = '';

    for ($i = 0; $i < $length; $i++) {
        $random_string .= $characters[rand(0, $characters_length - 1)];
    }

    return $random_string;
}

function hash_password($password){
    global $salt;
    $password = $salt.$password.$salt;
    return hash('sha256',$password);
}
