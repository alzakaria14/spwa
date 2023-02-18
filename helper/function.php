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

    $phoneNumber = preg_replace('/[^0-9-\s]/', '', $phoneNumber);

    $phoneNumber = str_replace(array(' ', '-'), '', $phoneNumber);

    if (substr($phoneNumber, 0, 1) === '0') {
        $phoneNumber = substr($phoneNumber, 1);
    }

    $phoneNumber = '62' . $phoneNumber;

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
