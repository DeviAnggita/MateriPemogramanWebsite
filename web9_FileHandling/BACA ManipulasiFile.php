<?php
$File = "tambah.txt";
$po = fopen($File, 'r');
$Data = fread($po, 10);
fclose($po);
echo $Data;
?>
