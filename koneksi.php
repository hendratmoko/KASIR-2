<?php

$server = "localhost";
$user = "root";
$pasword = "";
$nama_database = "kasir";

$db = mysqli_connect($server, $user, $pasword, $nama_database);

if (!$db) {                                                            
    die("gagal terhubung dengan database: " . mysqli_connect_error());
} else {
    echo "berhasil";
}
