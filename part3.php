<!DOCTYPE html>
<html>
<body>

<?php

$month = array("January","February","March","April","May","June","July","August","September","October","November","December");

//printing unsorted array using a for loop
$arrlength = count($month);
print "<br>Unsorted Array using for loop:<br>";
for ($i = 0; $i < $arrlength; $i++) {
print $month[$i]." <br>";
}

//printing sorted array using a for loop
sort($month);
print "<br>Sorted Array using for loop:<br>";
for ($i = 0; $i < $arrlength; $i++) {
print $month[$i]." <br>";
}

//printing unsorted array using foreach loop
print "<br> <br>";
$month1 = array("January","February","March","April","May","June","July","August","September","October","November","December");
print "<br>Unsorted Array using foreach loop:<br>";
foreach($month1 as $val) {
print $val." <br>";
}

//printing sorted arrary using foreach loop
sort($month1);
print "<br>Sorted Array using foreach loop:<br>";
foreach($month1 as $val) {
print $val."<br> ";
}

?>
</body>
</html>