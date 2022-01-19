<?php
$Nama = "tambah.txt";
$File = fopen($Nama, 'w') or
 die("File tidak bisa dibuka");
fclose($File);
?>