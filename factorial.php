<!DOCTYPE html>
<html>
<head>
	<title>Factorial of a Number</title>
</head>
<body>
	<?php
		function fact($n)
		{
			if($n<0)
			{
				return -1;
			}
			else if($n==0)
			{
				return 1;
			}
			else
			{
				return $n*fact($n-1);
			}
		}
		$i=5;
		echo fact($i);
	?>
</body>
</html>