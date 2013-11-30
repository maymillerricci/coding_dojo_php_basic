<?php 

	function draw_stars_basic($array)
	{
		foreach ($array as $item)
		{
			for($i=0; $i<$item; $i++)
				{
					echo "*";
				}
			echo "<br>";
		}
	}

	// draw_stars_basic(array(4, 6, 1, 3, 5, 7, 25));

	function draw_stars_advanced($array)
	{
		foreach ($array as $item)
		{
			if(is_numeric($item))
			{
				for($i=0; $i<$item; $i++)
				{
					echo "*";
				}
			}
			else
			{
				for($j=0; $j<strlen($item); $j++)
				{
					echo $item[0];
				}	
			}
			echo "<br>";
		}
	}

	draw_stars_advanced(array(4, "tom", 1, "michael", 5, 7, "jimmy smith"));

?>