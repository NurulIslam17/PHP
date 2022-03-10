<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Temparature Converter</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<body>

		<div class="main">
			<h2>Temparature Converter</h2>
			<div class="side">
				
				<div class="left">
					<img src="img/weather.jpg">
				</div>

				<div class="right">

					<form method="GET">
						<input class="inp" type="text" name="temp" placeholder="Enter the temperature" required><br>

						<div class="selection">
							<label class="lev">°C</label><input type="radio" value="cel" name="operation">
							<label class="lev">°F</label><input type="radio" value="faren" name="operation">
						</div>
						<input class="btn" type="submit" name="submit" value="Submit">
					</form>

					<div>
						<p class="res">
							<?php

								$submit = $_REQUEST['submit'];

								if (isset($submit)) {
									
									$temp = $_REQUEST['temp'];
									$radio = $_REQUEST['operation'];

									switch ($radio) {
										case 'cel':

										$t = ($temp * 9/5) + 32;
										echo "Temp is  $t °C";
										break;

										case 'faren':
										$f = ($temp - 32) * 5/9;
											echo "Temp is  $f °F";
											break;
																		
										default:
											echo "Enter Tenperature";
											break;
									}
								}
							?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>