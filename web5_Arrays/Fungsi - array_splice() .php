<?php
 echo "Anggota array awal adalah: <br />";
 $input = array("HTML", "PHP", "CSS", "JavaScript");
 print_r($input);
 echo "<br /><br />";
 echo "array_splice(\$input,2)";
 echo "<br />";
 $input = array("HTML", "PHP", "CSS", "JavaScript");
 array_splice($input, 2);
 print_r($input);
 echo "<br /><br />";
 echo "array_splice(\$input,1,-1)";
 echo "<br />";
 $input = array("HTML", "PHP", "CSS", "JavaScript");
 array_splice($input, 1, -1);
 print_r($input);
 echo "<br /><br />";
 echo "array_splice(\$input,1, count(\$input),
\"AJAX\")";
 echo "<br />";
 $input = array("HTML", "PHP", "CSS", "JavaScript");
 array_splice($input, 1, count($input), "AJAX");
 print_r($input);
 echo "<br /><br />";
 echo "array_splice(\$input,-1,1,
array(\"JQuery\",\"Framework\"))";
 echo "<BR>";
 $input = array("HTML", "PHP", "CSS", "JavaScript");
 array_splice($input, -1, 1, array(
 "JQuery",
 "Framework"
 ));
 print_r($input);
 ?>