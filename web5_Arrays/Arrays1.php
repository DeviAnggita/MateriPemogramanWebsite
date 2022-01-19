<?php
 // tanpa menggunakan indeks
 $arrayA = array(1, 2, 3, 4, 5, 6);
 foreach ($arrayA as $indeks => $nilai) {
 echo "\$arrayA[$indeks] => $nilai";
 echo "<br />";
 }
 echo "<br /> <br />";
 // menggunakan indeks tapi tidak urut
 $arrayB = array(1 => 1, 3 => 2, 5 => 3, 4 => 4, 0 => 5, 2 => 6);
 foreach ($arrayB as $indeks => $nilai) {
 echo "\$arrayB[$indeks] => $nilai";
 echo "<br />";
 }
 echo "<br /> <br />";
 // tidak semua menggunakan indeks,
 // php akan otomatis memberikan indeks
 $arrayC = array(1 => 1, 2, 3, 4, 0 => 5, 6);
 foreach ($arrayC as $indeks => $nilai) {
 echo "\$arrayC[$indeks] => $nilai";
 echo "<br />";
 }
 echo "<br /> <br />";
 // array dua dimensi
 // dimensi pertama associative
 // dimensi kedua vector
 $duadim = array(
 "prog" => array(1 => "HTML", "PHP", "JavaScript"),
 "nomor" => array(1 => 1, 2, 3),
 "experience" =>
 array(1 => "Beginer", "Middle", "Advance")
 );
 foreach ($duadim as $k => $v) {
 $x = 1;
 foreach ($v as $x => $y) {
 echo "\$duadim[$k] => \$v[$x] => $y <br />";
 $x++;
 }
 }
 ?>