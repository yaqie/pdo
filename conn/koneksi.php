<?php

date_default_timezone_set('Asia/Jakarta');
$base_url = "http://localhost/belajarpdo/";
$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

try {
$hostname   = "localhost";
$username   = "root";
$password   = "";
$dbname     = "belajarpdo";
// buat koneksi dengan database
$conn = new PDO("mysql:host=$hostname;dbname=$dbname", "$username", "$password");

// set error mode
$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

}
catch (PDOException $e) {
// tampilkan pesan kesalahan jika koneksi gagal
print "Koneksi atau query bermasalah: " . $e->getMessage() . "<br/>";
die();
}
?>
