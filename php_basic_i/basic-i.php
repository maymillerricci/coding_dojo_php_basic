<?php 
function score_grade()
	{
		$score = rand(50, 100);
		if($score <= 100 and $score >= 90)
		{
			$grade = "A";
		}
		elseif($score <= 90 and $score >= 80)
		{
			$grade = "B";
		}
		elseif($score <= 80 and $score >= 70)
		{
			$grade = "C";
		}
		else
		{
			$grade = "D";
		}
		echo "<h1>Your Score: " . $score . "/100</h1>";
		echo "<h2>Your grade is " . $grade . ".</h2>";
	}
	for($i=0; $i<100; $i++)
	{
		score_grade();
	}
?>