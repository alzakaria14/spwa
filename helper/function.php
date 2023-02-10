<?php

function generate_otp($n){
    $generator = '1357902468';
    $result = '';
    for($i = 0; $i < $n; $i++){
        $result .= substr($generator, (rand()%(strlen($generator))), 1);
    }

    return $result;
}
