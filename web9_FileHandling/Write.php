<?php
$nama_file = "file_tulis.txt";
$tulis = fopen($nama_file, 'w') or die
("File tidak bisa dibuka");
fclose($tulis);
?>