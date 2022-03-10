<?php

session_start() 
?>

<!DOCTYPE html>
<html>
	<head>
		<?php include 'Links/links.php' ?>
		<?php include 'connection.php' ?>
		<link rel="stylesheet" type="text/css" href="CSS/style.css">
		<title>Sign Up Form</title>
	</head>
<body>

<?php

	if (isset($_POST['submit'])) {

		$fName = mysqli_real_escape_string($con,$_POST['fname']);
		$lName = mysqli_real_escape_string($con,$_POST['lname']);
		$email = mysqli_real_escape_string($con,$_POST['email']);
		$phn = mysqli_real_escape_string($con,$_POST['phone']);
		$cPass = mysqli_real_escape_string($con,$_POST['cpassword']);
		$rPass = mysqli_real_escape_string($con,$_POST['rpassword']);

		$hassPassC = password_hash($cPass,PASSWORD_BCRYPT);
		$hassPassR = password_hash($rPass,PASSWORD_BCRYPT);


		$insertQue = "INSERT INTO registration(fname, lname, email, phone, cpass,rpass) VALUES ('$fName','$lName','$email','$phn','$hassPassC','$hassPassR')";

		$inserSignUp = mysqli_query($con,$insertQue);

		$emailSelect = "SELECT * FROM registration WHERE email ='$email' ";
		$emailCheck = mysqli_query($con,$emailSelect);

		$emailCount = mysqli_num_rows($emailCheck);

		if ($emailCount>0) {
			
			?>
				<script>
					alert ("Email Already Exist");
				</script>
			<?php

		}else{

				if ($cPass===$rPass) 
				{
						if($inserSignUp)
							{
								?>
									<script>
										alert ("Data Inserted Successfull !");
									</script>
								<?php

							}else{
								?>
									<script>
										alert ("Data Inserted Failed !");
									</script>
								<?php
							}
			}
			else
			{
				?>
					<script>
						alert ("Unmached Password !");
					</script>
				<?php
			}
		}
	}
?>

	<div class="container mainDiv">
		  <div class="row">

		  	<div class="col-lg-6 col-sm-12 left">
		  		<img src="../SignUp/images/login.png">
		  		<p>Please create an account to getting valid access in our site.If you have already an account than visit our site.</p>
		  		<a target="_blank" href="http://localhost/phpmyadmin/index.php?route=/sql&db=signup&table=registration&pos=0">Visit here..</a>
		  	</div>

		  	<div class="col-lg-6 col-sm-12 right">
		  		<h2>Create Account</h2>

		  		<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		  			<div class="row form-row">
				  			<div class="col-6">
				  				<div>
				  					<input type="text" name="fname" placeholder="User First Name">
				  				</div>
				  				<div>
				  					<input type="email" name="email" placeholder="User Email" required>
				  				</div>
				  				<div>
				  					<input type="password" name="cpassword" placeholder="Create Password" required>
				  				</div>
				  			</div>

				  			<div class="col-6">
				  				<div>
				  					<input type="text" name="lname" placeholder="User last Name">
				  				</div>
				  				<div>
				  					<input type="text" name="phone" placeholder="User Phone" required>
				  				</div>
				  				<div>
				  					<input type="password" name="rpassword" placeholder="Repeat Password" required>
				  				</div>
				  			</div>

			  			<div class="btn">

			  				<input type="submit" name="submit" value="Create Account"><br>
			  				<p>Have an account ? <a target="_blank" href="signin.php">Login</a></p>

			  			</div>



			  		</div>

		  		</form>


		  	</div>
		  </div>
	</div>
</body>
</html>