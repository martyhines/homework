<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<?php
$purchases = array(10, 20, 9, 11);
foreach ($purchases as $value){
    if ($value <= 10){
	$discount = $value * 0.10;
	$final = $value - $discount;
	echo "Original Price: $". $value . "<br />";
        echo "Discount at 10% off: $". $discount . "<br />";
        echo "Final Price: $". $final . "<br /><br />";
    } else{
	$discount = $value * 0.20;
	echo "Original Price: $". $value . "<br />";
        echo "Discount at 20% off: $". $discount . "<br />";
        echo "Final Price: $". $final . "<br /><br />";
    }
}
?>
</body>
</html>
