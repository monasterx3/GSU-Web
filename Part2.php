<!DOCTYPE html>
<html>

<body>
<h2 style='text-align:center'>Part 2.</h2>

<?php

$count=0;

echo '<table style="width:300px" border="1" cellspacing="1" cellpadding="1" align="center">';

for($i=0; $i<9; $i++) {

echo "<tr>";

for($j=0; $j<9; $j++) {
$count=$count+1;

if($count%2 == 0) {

//create cell(column) with alternate color using td tag

echo '<td height="35" width="35" style="background-color:red;"></td>';
}

else {

echo '<td height="35" width="35" style="background-color:black;>"</td>';
}
}

echo "</tr>";
}

echo "</table></html>";

?>
</body>
</html>