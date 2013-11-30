<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Intermediate II</title>
		<link rel="stylesheet" href="intermediate_ii.css">
	</head>
	<body>
		<table>
			<thead>
				<tr>
					<?php
					echo "<th></th>";
						for ($i=1; $i<10; $i++)
						{ 
						 	echo "<th>" . $i . "</th>";
						} 
					?>
				</tr>
			</thead>
			<tbody>
				<?php
					for ($i=1; $i<10; $i++)
					{
						if($i % 2 == 1)
						{
							echo "<tr class = 'gray'>";
						}
						else
						{
							echo "<tr>";
						}
						echo "<td class='bold'>" . $i . "</td>";
						for ($j=1; $j<10; $j++)
						{
							echo "<td>" . $i *$j . "</td>";
						}
						echo "</tr>";
					}
				?>
			</tbody>
		</table>
	</body>
</html>