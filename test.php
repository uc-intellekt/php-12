
<?php

/*
Printing
some
string
*/
// echo 'Hello <span style="color: green;">world</span>!<br>';

// string: always in quotes
$name = 'Victor';
// echo $name;

// integer: without quotes
$count = 5;

// float: without quotes
$price = 99.99;

// available operations: * / + -
$totalPrice = $count * $price;

// concatenation with "." sign
// echo 'Total price: ' . $totalPrice . '$';
echo "Total price: \"$totalPrice\" $<br>";

// boolean: true false
$isBlocked = false;

if ($isBlocked) {
	echo "$name, you are blocked!<br>";
} else {
	echo "$name, welcome!!!<br>";
}

if ($totalPrice >= 1000 or $totalPrice == 500) {
	echo 'Your discount: 25%<br>';
} elseif ($totalPrice >= 600) {
	echo 'Your discount: 15%<br>';
} elseif ($totalPrice >= 400) {
	echo 'Your discount: 10%<br>';
} else {
	echo 'Your discount: 5%<br>';
}

?>
