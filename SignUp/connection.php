<?php

	$username = "root";
	$password = "";

	$server = 'localhost';
	$db = 'signup';
	$con = mysqli_connect($server , $username , $password , $db);

	if ($con) {
		// echo "Connection Successfull  !";
		?>
			<script>
				alert('Database Successfully connected.  !');
			</script>
		<?php
	}
	else{
		// echo "Pleased connect Database";
		die("No Connection".mysqli_connect_error());
	}

?>