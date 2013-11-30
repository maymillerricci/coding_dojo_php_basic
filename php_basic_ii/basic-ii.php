<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Basic II</title>
</head>
	<body>
		<?php
			$states = array("CA", "WA", "VA", "UT", "AZ");
		?>
		<form action="">
			<p>For loop:</p>
			<label>State</label>
			<select name="states">
			<?php 
				for($i=0; $i<count($states); $i++)
				{
					echo "<option>" . $states[$i] . "</option>";
				}
			?>
			</select>
		</form>
		<form action="">
			<p>Foreach:</p>
			<label>State</label>
			<select name="states">
			<?php 
				foreach($states as $state)
				{
					echo "<option>" . $state . "</option>";
				}
			?>
			</select>
		</form>
		<?php
			array_push($states, "NJ");
			array_push($states, "NY");
			array_push($states, "DE");
		?>
		<form action="">
			<p>New array - foreach:</p>
			<label>State</label>
			<select name="states">
			<?php 
				foreach($states as $state)
				{
					echo "<option>" . $state . "</option>";
				}
			?>
			</select>
		</form>
	</body>
</html>