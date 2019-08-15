<!DOCTYPE html>
<html>
<body>
<h1>Refresh page to see whether Charlie ate my lunch or not</h1>
<br>
<br>
<?php

function isBitten() {
$p = rand(0,1); //50% probability of true or false
if ($p == 1) {
return true;
}

else {
return false;
	}
}
$result = isBitten();

if ($result == true) {
print "Charlie ate my lunch";
}

else {
print "Charlie did not ate my lunch";
}
?> 
</body>
</html>