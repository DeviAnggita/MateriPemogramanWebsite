<?php
$nama_file = "file_tulis.txt";
$coba = fopen($nama_file, 'r') or
 die("File tidak bisa
dibuka");
fclose($coba);