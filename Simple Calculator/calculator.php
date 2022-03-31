
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Calculator</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<div class="calculator">

			<div class="cal-left">
				<h2>PHP <br> Calculator</h2>
			</div>

			<div class="cal-right">
				<form method="POST">
					<div>
						<input class="inp-group" type="text" placeholder="Number 1" name="n1">
					</div>

					<div>
						<input class="inp-group" type="text" placeholder="Number 1" name="n2">
					</div>
					
					<div>
						<select name="operation" class="inp-group">
							<option selected>Select Operation</option>
							<option value ="add">ADD</option>
							<option value ="sub">SUB</option>
							<option value ="mul">MUL</option>
							<option value ="div">DIV</option>
							<option value ="rem">REM</option>
						</select>
					</div>

					<div>
						<input class="btn" type="submit" name="submit" value="Submit">
					</div>
				</form>
			</div>

			<div class="res">
				<p>
					<?php
						$submit = $_REQUEST['submit'];

						if (isset($submit)) {
							$number1 = $_REQUEST['n1'];
							$number2 = $_REQUEST['n2'];
							// echo $number2;

							$operation = $_REQUEST['operation'];

							switch ($operation) {
								case 'add':
									$add = $number1 + $number2;
									echo "$number1"." + " ."$number2" ." = $add";
									break;
								case 'sub':
									$sub = $number1 - $number2;
									echo "$number1"." - " ."$number2" ." = $sub";
									break;
								case 'mul':
									$mul = $number1 * $number2;
									echo "$number1"." X " ."$number2" ." = $mul";
									break;
								case 'div':
										if($number1==0){
											echo "ERROR !";
											break;
											
										}else{
											
											$div = $number1 / $number2;
											echo "$number1"." / " ."$number2" ." = $div";
											break;
										}
								case 'rem':
									$rem = $number1 % $number2;
									echo "$number1"." % " ."$number2" ." = $rem";
									break;
								default:
									echo "Something Wrong";
									break;
							}
						}
					?>
				</p>
			</div>
		</div>
	</body>
</html>