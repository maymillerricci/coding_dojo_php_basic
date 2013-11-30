<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Checkerboard</title>
		<link rel="stylesheet" href="checkerboard.css">
	</head>
	<body>
		<?php
			for ($i=0; $i<8; $i++) 
			{
				echo "<ul>";
					for ($j=0; $j<8; $j++) 
					{
						if(($i % 2 == 0) and ($j % 2 == 0) or ($i % 2 == 1) and ($j % 2 == 1))
						{ 
							echo "<li class='green'></li>";
						}
						else 
						{
							echo "<li></li>";
						}
					}				
				echo "</ul>";
			}
		?>	
	</body>
</html>