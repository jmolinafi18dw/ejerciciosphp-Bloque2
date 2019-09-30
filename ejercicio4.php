<html>
<head>
	<title>Frutas</title>
</head>
<body>
<?php
$cadena = "Sandia-Melon-Guayaba-Aguacate-Platano,Uva";
$frutas = array();
$delimitador = explode("-", $cadena);
for ($x = 0; $x < count($delimitador); $x++){	
    $frutas[$delimitador[$x]] = strlen($delimitador[$x]);
}
print_r($frutas);
?>
</body>
</html>