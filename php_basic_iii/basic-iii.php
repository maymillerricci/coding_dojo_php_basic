<?php
	echo "<h2>Starting the program</h2>";
	$count_heads = 0;
	$count_tails = 0;
	for($i=1; $i<=5000; $i++)
	{
		$toss_num = rand(0,1);
		if($toss_num == 1)
		{
			$toss_ht = "heads";
			$count_heads+=1;
		}
		else
		{
			$toss_ht = "tails";
			$count_tails+=1;
		}
		echo "Attempt #" . $i . ": Throwing a coin... It's a " . $toss_ht . "! ... Got " . 
			$count_heads . " heads so far and " . $count_tails . " tails so far.<br>";
	}
	echo "<h2>Ending the program - thank you!</h2>";
?>