

<?php
	
	$Me = 0;
	$you = 0;
	$i = 1;

	while ($i <=100) {
		// code...
		$choice = rand(1,2);
		if($choice==1){
			echo "HEAD . I Win <br>";
			$Me++;
		}else{
			echo "TAIL . You Win<br>";
			$you++;
		}
		$i++;
	}
	echo "Total I : $Me <br>";
	echo "Total You : $you <br>";
?>