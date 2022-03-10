<?php
	
	$names = array("Abc" ,"ACB","MNO");

	echo "<pre>";
	print_r($names);

	echo "<br>";

	$arrLen = count($names);
	echo "Array length is : $arrLen <br><br>";

	echo "Normal Displaying  <br><br>";
	for ($i=0; $i<$arrLen ; $i++) { 
		echo $names[$i]."<br>";
	}

	echo "<br>Using HTML OL Displaying <br>";

	echo "<ol>";
	for ($i=0; $i<$arrLen ; $i++) { 
		echo "<li>" .$names[$i]."</li>";
	}
	echo "</ol>";
?>