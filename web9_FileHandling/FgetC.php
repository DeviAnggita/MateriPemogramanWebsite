<?php
$File = "tambah.txt";
$po = fopen($File, 'r');
while (!feof($po)) {
 $Data = fgetc($po);
 echo $Data;
}
fclose($po);