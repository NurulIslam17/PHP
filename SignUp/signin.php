
<?php

session_start() 
?>

<!DOCTYPE html>
<html>
<head>
	<?php include 'Links/links.php' ?>
	<?php include 'connection.php' ?>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link rel="stylesheet" type="text/css" href="CSS/login.css">

	<title>Sign In</title>
</head>
<body>

	<?php


	if(isset($_POST['login']))
	{

		$logEmail = $_POST['logEmail'];
		$logPass = $_POST['logPass'];

		$search_emailDb = "SELECT * FROM registration WHERE email='$logEmail'";
		// echo $search_emailDb."<br>";
		$query = mysqli_query($con,$search_emailDb);

		$email_count = mysqli_num_rows($query);
		// echo $email_count."<br>";

		if($email_count){
			$email_pass = mysqli_fetch_assoc($query);
			$db_pass = $email_pass['cpass'];

			$pass_decrypt = password_verify($logPass, $db_pass);

			if ($pass_decrypt) {
				?>
				<script>
					alert("Login Successful");
				</script>
				<?php

			}else{
				?>
				<script>
					alert('Incorect Password');
				</script>
				<?php
			}
		}else{

			?>
				<script>
					alert ("Invalid Email");
				</script>
			<?php
		}
	}

	 ?>

	<div class="container container-main">
		<div class="row">

			<div class="col-lg-4 col-md-6 col-sm-12 topMdl">

				<div class="form">
					<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
						<div class="input-group">
							<input type="email" name="logEmail" placeholder="User Email" required>
						</div>

						<div class="input-group">
							<input type="password" name="logPass" placeholder="User Password" required>
						</div>

						<div class="btn">
							<input type="submit" name="login" value="Login">
						</div>
					</form>
				</div>

				<div class="addInfo">
					<p>Don't have an account?<a target="_blank" href="reg.php"> Create account.</a></p>
				</div>
			</div>

			<div class="col-lg-8 col-md-6 col-sm-12  right">
				<div class="imgArea">
					<img src="images/login1.jpg">
				</div>
			</div>
		</div>
	</div>

</body>
</html>