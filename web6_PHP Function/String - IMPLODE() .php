<?php
$pecahan = array("Hello", "World,", "I", "am", "Here!");
$disatukandenganspasi = implode(" ", $pecahan);
$disatukandengandash = implode("-", $pecahan);
echo "$disatukandenganspasi <br>";
echo "$disatukandengandash ";
?>