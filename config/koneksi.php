<?php 

//--Konfigurasi dan koneksi database

date_default_timezone_set('Asia/Maksassar');

//default setting untuk localhost
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'db_namadatabase';

$koneksi = mysqli_connect($host,$user,$password,$database);

//variabel global costom programmer
//--PERHATIAN! SETELAH APLIKASI SUDAH PRODUCTION JANGAN PERNAH MERUBAH SALT
//JIKA SALT DIRUBAH MAKA SELURUH PASSWORD USER AKAN GAGAL DAN SALAH!
//ARTINYA USER TIDAK BISA LOGIN!
$salt = 'EtV&4dTVTZQmi$tQK4t90O&M4JkRwOq92$Iu8eThDfZ3F8tIu7';
$is_created = date('Y-m-d H:i:s');

//base-url
function base_url($path){
    $base_url = 'http://localhost/nama-folder/'.$path;
    return $base_url;
}
?>
