<html>
<head>
<title>Tabla</title>
</head>
<body>
<?php
$columnas=rand(3, 30);
$filas=rand(3, 30);
$tabla = "<table border = 5>";
for ($a = 0; $a <= $columnas; $a++) { 
    $tabla.="<tr>";
    for ($b = 0; $b <= $filas ; $b++)
        $tabla.="<td></td>";
        $tabla.="</tr>";	
}
echo $tabla;
?>

</body>
</html>