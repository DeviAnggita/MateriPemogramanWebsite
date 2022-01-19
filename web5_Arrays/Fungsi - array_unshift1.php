<?php
 $arrayBuah = array("Jeruk", "Apel");
 // elemen array menjadi 'Pisang, Mangga, Jeruk, Apel'
 array_unshift($arrayBuah, "Pisang", "Mangga");
 echo $arrayBuah[0] . "<br>"; // menghasilkan 'Pisang'
 echo $arrayBuah[1] . "<br>"; // menghasilkan 'Mangga'
 echo $arrayBuah[2] . "<br>"; // menghasilkan 'Jeruk'
 echo $arrayBuah[3] . "<br>"; // menghasilkan 'Apel'
 ?>