<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "aviasi nusantara";

$koneksi= mysqli_connect("localhost","root","","aviasi nusantara");
//$koneksi= new mysqli("HOST_ATAU_IP_SERVE","USERNAME_AKSES_MYSQL","PASSWORD_MYSQL","NAMA_DATABASE");
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}


?>