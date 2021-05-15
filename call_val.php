<!DOCTYPE html>
<html>
<head>
	<title>Call by Value</title>
</head>
<body>
	<?php
		function fun1($n)
		{
			$n=$n+10;
			return $n;
		}
		$i=10;
		echo fun1($i)."<br/>";
		echo $i;
	?>
</body>
</html>
