<?php 

//--Konfigurasi dan koneksi database

date_default_timezone_set('Asia/Maksassar');

//default setting untuk localhost
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'db_namadatabase';

$koneksi = mysqli_connect($host,$user,$password,$database);

//base-url
function base_url($path){
    $base_url = 'http://localhost/nama-folder/'.$path;
    return $base_url;
}
?>