<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Header
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Authorization");

// Ambil ENV Railway
$host = getenv("MYSQLHOST");
$user = getenv("MYSQLUSER");
$pass = getenv("MYSQLPASSWORD");
$db   = getenv("MYSQLDATABASE");
$port = getenv("MYSQLPORT");

// Debug cek ENV
echo "HOST : " . $host . "<br>";
echo "USER : " . $user . "<br>";
echo "DB   : " . $db . "<br>";
echo "PORT : " . $port . "<br><br>";

// Koneksi
$koneksi = mysqli_connect($host, $user, $pass, $db, $port);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal : " . mysqli_connect_error());
}

echo "Koneksi database berhasil!";
?>
