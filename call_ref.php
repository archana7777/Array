<!DOCTYPE html>
<html>
<head>
	<title>Call by Reference</title>
</head>
<body>
	<?php
		function call_ref(&$n)
		{
			$n=$n*10;
			return $n;
		}
		$i=20;
		echo call_ref($i)."<br/>";
		echo $i;
	?>
</body>
</html>
