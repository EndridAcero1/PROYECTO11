<html>
<head>
<title>pràctica 11 php</title>
</head>
<body>
<?php
	//Endrid Joanny Acero Velázquez
	//Usando variables en PHP
	echo"<h1>variables</h1>";
	$nombre='Endrid';//tipo de cadena
	$apellidos='Acero Velázquez';
	$edad=21;
	$salario=12345.50;
	$fechadenacimiento='01/12/1995';
	$status=true;
	echo $nombre.'</br>';
	echo $apellidos.'</br>';
	echo 'nombre completo:'.$nombre.' '.$apellidos.'</br>';
	echo 'TU EDAD ES: '.$edad.'</br>';
	echo 'TU SALARIO ES:'.$salario.'</br>';	
?>
	<h1>OPERADORES ARITMETICOS</h1>
	<?php
		$a=5;
		$b=3;
		$suma=$a+$b;
		$resta=$a-$b;
		$multiplica=$a*$b;
		$divide=$a/$b;
		echo 'LA SUMA ES DE '.$a.'+'.$b.' ES: '.$suma.'<br>';
		echo 'LA RESTA ES DE '.$a.'+'.$b.' ES: '.$resta.'</br>';
		echo 'LA MULTIPLICACION ES DE '.$a.'+'.$b.' ES: '.$multiplica.'</br>';
		echo 'LA DIVICION ES DE '.$a.'+'.$b.' ES: '.$divide.'</br>';
	?>
</body>
</html>	