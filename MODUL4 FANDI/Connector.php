<?php
$koneksi = new mysqli("localhost:3306", "root", "", "wad_modul4_fandi");

if (!$koneksi) {
  echo("Koneksi Gagal: " . $koneksi->connect_error);
}
