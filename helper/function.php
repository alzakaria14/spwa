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

function range_date($startDate, $endDate)
{
	$start = new DateTime($startDate);
	$end = new DateTime($endDate);

	$startDay = $start->format('j');
	$startMonth = strftime('%B', $start->getTimestamp());
	$startYear = $start->format('Y');

	$endDay = $end->format('j');
	$endMonth = strftime('%B', $end->getTimestamp());
	$endYear = $end->format('Y');

	if ($startYear === $endYear && $startMonth === $endMonth) {
		return "$startDay - $endDay $startMonth $startYear";
	} else if ($startYear === $endYear) {
		return "$startDay $startMonth - $endDay $endMonth $startYear";
	} else {
		return "$startDay $startMonth $startYear - $endDay $endMonth $endYear";
	}
}

function penyebut($nilai)
{
    $nilai = abs($nilai);
    $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
    $temp = "";
    if ($nilai < 12) {
        $temp = " " . $huruf[$nilai];
    } else if ($nilai < 20) {
        $temp = penyebut($nilai - 10) . " belas";
    } else if ($nilai < 100) {
        $temp = penyebut($nilai / 10) . " puluh" . penyebut($nilai % 10);
    } else if ($nilai < 200) {
        $temp = " seratus" . penyebut($nilai - 100);
    } else if ($nilai < 1000) {
        $temp = penyebut($nilai / 100) . " ratus" . penyebut($nilai % 100);
    } else if ($nilai < 2000) {
        $temp = " seribu" . penyebut($nilai - 1000);
    } else if ($nilai < 1000000) {
        $temp = penyebut($nilai / 1000) . " ribu" . penyebut($nilai % 1000);
    } else if ($nilai < 1000000000) {
        $temp = penyebut($nilai / 1000000) . " juta" . penyebut($nilai % 1000000);
    } else if ($nilai < 1000000000000) {
        $temp = penyebut($nilai / 1000000000) . " milyar" . penyebut(fmod($nilai, 1000000000));
    } else if ($nilai < 1000000000000000) {
        $temp = penyebut($nilai / 1000000000000) . " trilyun" . penyebut(fmod($nilai, 1000000000000));
    }
    return $temp;
}

function terbilang($nilai)
{
    if ($nilai < 0) {
        $hasil = "minus " . trim(penyebut($nilai));
    } else if($nilai == 0){
        $hasil = 'nol';
    }
     else {
        $hasil = trim(penyebut($nilai));
    }
    return $hasil;
}
