<?php
$nama_file = "tambah.txt";
$coba = fopen($nama_file, 'a') or
die("File tidak bisa
dibuka");
fputs($coba, "Indonesia adalah
negara kepulauan");
fclose($coba);
?>