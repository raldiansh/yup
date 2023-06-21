<?php
$databaseHost = 'localhost';
$databaseName = 'coba';
$databaseUsername = 'root';
$databasePassword = '';


$varKoneksi = mysqli_connect ($databaseHost,$databaseUsername,$databaseName,$databasePassword)

if (mysqli_connect_errno ($varKoneksi))
{
    echo "gagal menghubungkan ke database".mysqli_connect_error();
}
?>