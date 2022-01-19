<?php
$nama_file = "baca.txt";
$coba = fopen($nama_file, 'r') or
 die("File tidak bisa
dibuka");
fclose($coba);
?>