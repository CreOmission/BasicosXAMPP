<!DOCTYPE html>
<html>
<head>
	<title>Tipos básicos variables</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	
	$un_bool = FALSE;
	$una_cadena = 'textos';
	$un_entero = 12;
	$un_real = 3.1415;

	//al usar comillas dobles, permitimos que se ejecuten las variables
	//al usar comillas simples, no se ejecutan las variables y muestra todo el texto tal cual está escrito

	echo 'Con var_dump:<br/><br/>';
	echo var_dump($un_bool);
	echo '<br/>';
	echo var_dump($una_cadena);
	echo '<br/>';
	echo var_dump($un_entero);
	echo '<br/>';
	echo var_dump($un_real);
	echo '<br/>';
	echo '<br/>';

	echo 'Con gettype:<br/><br/>';
	echo gettype($un_bool);
	echo '<br/>';
	echo gettype($una_cadena);
	echo '<br/>';
	echo gettype($un_entero);
	echo '<br/>';
	echo gettype($un_real);
	echo '<br/>';
	echo '<br/>';

	if (is_bool($un_bool)) {
		echo 'es un booleano<br/>';
	} else {
		echo 'no es un booleano<br/>';
	}
	if (is_int($un_entero)) {
		echo 'es un entero<br/>';
	} else {
		echo 'no es un entero<br/>';
	}
	if (is_double($un_real)) {
		echo 'es un real<br/>';
	} else {
		echo 'no es un real<br/>';
	}
	if (is_string($una_cadena)) {
		echo 'es una cadena<br/>';
	} else {
		echo 'no es una cadena<br/>';
	}
	?>
</body>
</html>

