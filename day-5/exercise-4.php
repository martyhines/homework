<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
function times($multiplier){
    $a = array(1,2,3,4,5,6,7,8,9,10);
    foreach ($a as $i){
	echo $multiplier * $i."<br />";
    }
}
times(5);
?>
</body>
</html>
