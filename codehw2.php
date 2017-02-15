<!DOCTYPE html>
<html>
<body>
<header>
<h1>Challenge: ISBN Validation</h1>
</header>

<?php

$isbn = "1234567891";
if (substr($isbn,9,1) == "X") {
	$isbn2 = (substr($isbn,0,9)) * 10 + 1000000000; //Multiply by 10 to make isbn2 10-digit so that it can be used as a number in the function; add 1000000000 to compensate for "X=10", see line 39
	} else {
	$isbn2 = $isbn;
	}

echo "Checking ISBN: $isbn for validity<br>";
echo "<br>";

function isbn($x) {
	$a = (int) ($x / 1000000000); //$a is the first number of the ISBN (e.g. 1)
	$r1 = $x % 1000000000; //Divide ISBN by 1000000000, $r1 is the remainder (e.g. 234567891)
	$b = (int) ($r1 / 100000000); //$b is the second number of the ISBN (e.g. 2)
	$r2 = $r1 % 100000000; //Divide $r1 by 100000000, $r2 is the next remainder (e.g. 34567891)
	$c = (int) ($r2 / 10000000);
	$r3 = $r2 % 10000000;
	$d = (int) ($r3 / 1000000);
	$r4 = $r3 % 1000000;
	$e = (int) ($r4 / 100000);
	$r5 = $r4 % 100000;
	$f = (int) ($r5 / 10000);
	$r6 = $r5 % 10000;
	$g = (int) ($r6 / 1000);
	$r7 = $r6 % 1000;
	$h = (int) ($r7 / 100);
	$r8 = $r7 % 100;
	$i = (int) ($r8 / 10);
	$j = $r8 % 10; //Last digit is the remainder of dividing the previous remainder by 10 (e.g. 91/10, remainder is 1)
	$sum = (10 * $a) + (9 * $b) + (8 * $c) + (7 * $d) + (6 * $e) + (5 * $f) + (4 * $g) + (3 * $h) + (2 * $i) + (1 * $j); //if ISBN ends in X, last digit is 0 here, causing a short of 10 (X=10, 10*1=10), thus add 1000000000 in line 12 to make up the 10
	return $sum % 11 == 0;
}

$ReturnValue = isbn($isbn2);

if ($ReturnValue == True) {
	echo "This is a valid ISBN!";
	} else {
	echo "This is NOT a valid ISBN!";
	}
?>

<header>
<h1>Coin Toss!</h1>
</header>

<?php
for ($count = 1; $count <= 9; $count += 2)
{	
	if ($count == 1) {
	echo "Flipping a coin $count time...<br>";
	} else {
	echo "Flipping a coin $count times...<br>";
	} //loop the sentence
	
	for ($i = 1; $i <= $count; ++$i) //loop the coins on multiple lines, toss the coins for $count times on each line
{
	if ((mt_rand(0,1)) >= 0.5) {
	echo '<img src="head.jpg" />';
	} else {
	echo '<img src="tail.png" />';
	}
}
	echo "<br>";
}
?>

<header>
<h4>Beginning the coin flipping...</h4>
</header>
<?php
$last_flip = 0;
for ($i = 1; $i <= 1000; ++$i) //use loop to keep flipping until condition is met
{
	if ((mt_rand(0,1)) >= 0.5) {
	echo '<img src="head.jpg" />';	
	if ($last_flip == 1) { break;  //end loop when this flip is head and last flip = 1
	} else {
	$last_flip = 1; //remember which side was shown last flip
	}
	} else {
	echo '<img src="tail.png" />';
	$last_flip = 0; //remember which side was shown last flip
	}
}
	echo "<br>";
	echo "Flipping two heads in a row, in $i flips!"; //i represents how many time I flipped

?>
</body>
</html>