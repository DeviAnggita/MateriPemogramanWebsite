<?php
$File = "tambah.txt";
$po = fopen($File, 'r');
$Data = fread($po, filesize($File));
fclose($po);
echo $Data;
?>