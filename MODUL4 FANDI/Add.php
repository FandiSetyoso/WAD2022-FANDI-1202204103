<?php
require 'Connector.php';

$id = rand(1000,5000);
$namamobil = $_POST['nama'];
$pemilik = $_POST['pemilik'];
$merk = $_POST['merk'];
$tanggalbeli = $_POST['tanggalbeli'];
$desc = $_POST['desc'];
$status = $_POST['status'];
$gambar = $_FILES['gambar']['name'];
$target = "";

if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $gambar)) {
  $addquery = "INSERT INTO showroom_fandi_table (id_mobil, nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$id', '$namamobil', '$pemilik', '$merk', '$tanggalbeli', '$desc', '$gambar', '$status')";
  if (mysqli_query($koneksi, $addquery)) {
    header("location:MyItem.php?pesan=succes");
  } else {
    header("location:MyItem.php?pesan=failed tidak bisa");
  }
} else {
  header("location:MyItem.php?pesan=failed tidak");
}
