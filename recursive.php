<!DOCTYPE html>
<html>
<head>
	<title>Recursive Function</title>
</head>
<body>
	<?php
		function demo($n)
		{
			if($n<=5)
			{
				echo "The Actual Number is $n"."<br/>";
			}
			else
			{
				$n--;
				echo "The Number is $n"."<br/>";
				echo demo($n);
			}
		}
		$i=10;
		echo demo($i);
	?>
</body>
</html>