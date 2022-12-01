<?php
require 'Connector.php';

$id = rand(1000,5000);
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$no_hp = $_POST['no_hp'];
$target = "";

  $addquery = "INSERT INTO user_fandi (id, nama, email, password, no_hp) VALUES ('$id', '$nama', '$email', '$password', '$no_hp')";
  if (mysqli_query($koneksi, $addquery)) {
    header("location:Login.php?pesan=succes");
  } else {
    header("location:Login.php?pesan=failed tidak bisa");
  }