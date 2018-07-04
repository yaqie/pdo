<?php
include '../conn/koneksi.php';

$act = $_GET['act'];
$date = date("Y-m-d H:i:s");


if($act == 'input'){
  $judul    = htmlentities(strip_tags($_POST['judul']));
  $isi      = htmlentities(strip_tags($_POST['isi']));

  $stmt     = $conn->prepare("INSERT INTO artikel VALUES (NULL, ?, ?, ?)");

  // hubungkan data dengan variabel (bind)
  $stmt->bindParam(1, $judul);
  $stmt->bindParam(2, $isi);
  $stmt->bindParam(3, $date);

  // jalankan query (execute)
  $stmt->execute();

  header('location:../index.php');
}

if($act == 'edit'){
  $c        = $_POST['id'];
  $judul    = htmlentities(strip_tags($_POST['judul']));
  $isi      = htmlentities(strip_tags($_POST['isi']));

  $stmt     = $conn->prepare("UPDATE `artikel` SET `judul` = ? , `isi` = ? WHERE `artikel`.`id_artikel` = ?;");

  // hubungkan data dengan variabel (bind)
  $stmt->bindParam(1, $judul);
  $stmt->bindParam(2, $isi);
  $stmt->bindParam(3, $c);

  // jalankan query (execute)
  $stmt->execute();

  header('location:../index.php');
}

if($act == 'hapus'){
  $c        = $_GET['id'];

  $stmt     = $conn->prepare("DELETE FROM `artikel` WHERE `artikel`.`id_artikel` = ?");

  // hubungkan data dengan variabel (bind)
  $stmt->bindParam(1, $c);

  // jalankan query (execute)
  $stmt->execute();

  header('location:../index.php');
}


$conn = null;
?>
