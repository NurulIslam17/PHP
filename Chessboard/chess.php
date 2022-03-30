
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Chessboard Create</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<div class="chess">
			<form method="POST">
				<input type="text" name="num" placeholder="Enter The Nubmer">
				<input class="btn" type="submit" name="submit" value="Generate Chessoard" required>
			</form>

			<br>

			<table>
				<?php

					if (isset($_POST['submit']))
					{
						$inp = $_POST['num'];
						for ($row=1; $row<=$inp ; $row++) 
						{ 
							echo "<tr>";
							for ($col=1; $col<=$inp ; $col++)
								if (($row+$col)%2==0) 
								{
									echo "<td class='bgBlack'></td>";
								}
								else
								{
									echo "<td></td>";
								}
							echo "</tr>";
						}
					}
				?>
			</table>
		</div>
	</body>
</html>
