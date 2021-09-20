<!DOCTYPE html>
<html>
<head>
	<title>Interacción con el usuario</title>
	<meta charset="utf-8">
</head>
<body>
	<?php

		$n1=$_GET["num1"];
		$n2=$_GET["num2"];
		echo "<h1>Hola mundo</h1>";

		echo "El número 1 es: $n1";
		echo "<br><br>";
		echo "El número 2 es: $n2";
		echo "<br><br>";

		//opero con los datos
		$suma=$n1+$n2;

		//salida del resultado de la operación
		echo "El resultado de la suma es: ".$suma;
	?>
</body>
</html>