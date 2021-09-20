<!DOCTYPE html>
<html>
<head>
	<title>GLOBAL</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
		$x = 5;
		$y = 10;

		function myTest(){
			global $x, $y;
			$y = $x + $y;
		}

		myTest();
		echo $y;
	?>
</body>
</html>