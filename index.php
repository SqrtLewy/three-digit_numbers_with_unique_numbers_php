<?php

$count = 0;

for ($i=1;$i<=9;$i++)
	for($j=0;$j<=9;$j++)
		for($k=0;$k<=9;$k++)
			if($i!=$j && $i!=$k && $j!=$k)
			{
				echo "I: $i";
				echo "<br>";
				echo "J: $j";
				echo "<br>";
				echo "K: $k";
				echo "<br>";
				echo "<br>";
				$count++;
			}
echo "<br>";
echo "How many numbers?: $count";