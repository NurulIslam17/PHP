

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Palindrom </title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<div class="container">
			<h2>Palindrome Checker</h2>
				<p>
					<?php

						if (isset($_POST['submit'])) 
						{
							$palinInp = $_POST['plain'];
							$revTxt = strrev($palinInp);
							 echo $revTxt;

							if ($palinInp===$revTxt) {
								echo "Yes,It is Palindrome";
							}else{
								echo "No,It is not a Palindrome";
							}
						}
					?>
				</p>
			<form method="POST">
				<fieldset>
					<textarea name="plain" placeholder="Type your word..."> </textarea>
				</fieldset>
				<fieldset>
					<button  name="submit" type="submit" id="btn">Submit</button>
				</fieldset>
				<p>Designed By<span> Nurul</span></p>
			</form>
		</div>
	</body>
</html>
