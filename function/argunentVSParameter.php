
<!-- Parameters : the valus which are passed inside the finction during defining the function -->
<!-- Agruments : the valus which are passed inside the finction during calling the function -->
<!-- Elample bellow -->


<?php 

	function sum($a ,$b){ //parameter

		// $a = 20;
		// $b = 12;
		$sum = $a + $b;
		echo "Sum is : $sum <br>";
	}

	sum(1,2);  // arguments
	sum(1,-2);
	sum(10,2);


 ?>