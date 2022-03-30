<!-- <?php

	// $color = "";

	// switch ($color) {
	// 	case "Red":
	// 		echo "Your fav color is : $color<br>";
	// 		break;
	// 	case "Bule":
	// 		echo "Your fav color is : $color<br>";
	// 		break;
	// 	case "Green":
	// 		echo "Your fav color is : $color<br>";
	// 		break;
	// 	case "Grey":
	// 		echo "Your fav color is : $color<br>";
	// 		break;
		
	// 	default:
	// 		echo "There something wrong.<br>";
	// 		break;
	// }

?> -->

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Color Checker</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

		<div class="color">
			<form method="POST">
				Enter Your FavColor <input type="text" name="color"><br>
				<input class="sub" type="submit" name="submit" value="Submit"><br><br>

				<p class="output">

					<!-- Your Favourite color is  :  -->
					<?php

						if (isset($_POST['submit']))
						{

							$favC = $_POST['color'];
							// echo $favC;

							switch ($favC)
							 {
								case "Red":
									echo "Your fav color is Red<br>";
									break;
								case "Bule":
									echo "Your fav color is Blue<br>";
									break;
								case "Green":
									echo "Your fav color is Green<br>";
									break;
								case "Black":
									echo "Your fav color is Black<br>";
									break;
								
								default:
									echo "No Color.<br>";
									break;
							}
						}
					?>
				</p>
			</form>
		</div>
	</body>
</html>