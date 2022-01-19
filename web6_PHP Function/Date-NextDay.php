<?php
$lusa = mktime(0, 0, 0, date("d") + 2, date("y"));
echo "lusa adalah tanggal " . date("d/m/y", $lusa);
?>