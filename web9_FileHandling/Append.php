<?php
$nama_file = "tambah.txt";
$coba = fopen($nama_file, 'a') or
 die("File tidak bisa
dibuka");
fclose($coba);
?>