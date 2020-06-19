<!DOCTYPE html>
<html>
<head>
	<title>ordem crescente</title>
</head>
<body>
	<?php
	$a = 30;
	$b =100;
	$c = 5;
	echo ("Valor do item a: $a");
	echo ("<br> Valor do item b: $b");
	echo ("<br> Valor do item c: $c");
	echo ("<br> A ordem crescente é:<br>");
	
	if (($c>$a)&&($c>$b)&&($b>$a)) {
				echo ("$a $b $c");

		} elseif (($a>$b)&&($a>$c)&&($c>$b)) {
				echo ("$b $c $a");

		} elseif (($b>$c)&&($b>$a)&&($a>$c)) {
	   			echo ("$c $a $b");

		} elseif (($c>$b)&&($c>$a)&&($a>$b)) {
				echo ("$b $a $c");

		} elseif (($a>$c)&&($a>$b)&&($b>$c)) {
				echo ("$c $b $a");

		} elseif (($b>$a)&&($a>$b)&&($b>$c)) {
				echo ("$a $c $b");
	}
	?> 
</body>
</html>