<?php

	$age = 123;

	if ($age<=5) {
		echo "Person is Baby <br>";
	}elseif ($age>5 and $age <=18) {
		echo "Person is teenager <br>";
	}elseif ($age>18 and $age<=42) {
		echo "Person is Younger <br>";
	}elseif ($age>42 and $age<=100) {
		echo "Person is Older<br>";
	}else{
		echo "Still ALive !!!<br>";
	}

?>