<?php
$titleString = "a title that could use some hELP";
$lowercaseTitle = strtolower($titleString);
$ucTitleString = ucwords($lowercaseTitle);
echo "Old title - $titleString <br />";
echo "New title - $ucTitleString";
?>