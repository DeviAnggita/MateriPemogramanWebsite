<?php $age = 50;
 echo "my age is " . $age . "<br><br>";
 if ($age < 30) {
 echo "My age is less than 30!";
 } elseif ($age > 30 && $age < 40) {
 echo "Your age is between 30 and 40!";
 } elseif ($age > 40 && $age < 50) {
 echo "My age is between 40 and 50!";
 } else {
 echo "My age is greater than 50 or equal to 50!";
 }
 ?>