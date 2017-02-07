<!DOCTYPE html>
<html>
<header>
<h1>Challenge: Correct Change</h1>
</header>
<body>
<?php
$change = 593;
echo "You are due $change cents back in change total";
echo "<br>";
echo "<br>";

$a = $change % 100;
$b = $a % 25;
$c = $b % 10;

$dollar = (int) ($change / 100);
$quarter = (int) ($a / 25);
$dime = (int) ($b / 10);
$nickle = (int) ($c / 5);
$cent = $c % 5;

echo "You are due back $dollar dollar(s), $quarter quarter(s), $dime dime(s), $nickle nickle(s), and $cent cent(s)";
?>

<header>
<h1>Challenge: 99 Bottles of Beer</h1>
</header>
<body>
<?php

for ($count = 99; $count >= 1; --$count) {
	
	if ($count > 1) {
		echo "$count bottles of beer on the wall, $count bottles of beer!";
	} else {
		echo "$count bottle of beer on the wall, $count bottle of beer!";
	}
		echo "<br>";
	$x = $count - 1;
	if ($x > 1) {
		echo "Take one down and pass it around, $x bottles of beer on the wall!";
	} else {
		echo "Take one down and pass it around, $x bottle of beer on the wall!";
	}
		echo "<br>";
}

?>
</body>
</html>