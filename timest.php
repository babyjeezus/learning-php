<?php
echo "times tables <br />";  

for ($root = 2; $root <= 12; $root++)  //get tables up to 12
{
	echo "<br />" ;
	for ($multiplier = 1; $multiplier <= 12; $multiplier++)
	{
		echo "$root times " . $multiplier . " is " . $root * $multiplier . "<br />";
	}
}
?>
