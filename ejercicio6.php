<html>
<head>
<title>Cumpleaños</title>
</head>
<body>
<?php
$nombre="Jafein";
$mes="Julio";
function agregar($nombre, $mes, $meses){
array_push($meses[$mes], $nombre);
return sizeof($meses[$mes]);
}
    $meses = [
    "Enero" => ["Astrid","Jissel","Henrry"],
    "Febrero" => ["Vilma"],
    "Marzo" => ["Hector","Elvis"],
    "Abril" => ["Aide"],
    "Mayo" => ["Nazaret"],
    "Junio" => ["Jefry"],
    "Julio" => ["Julissa","Marcela","Anthony"],
    "Agosto" => ['Andres'],
    "Septiembre" => ["Ruperto","Marina","Sofia"],
    "Octubre" => ["Keylin"],
    "Noviembre" => ["Oliver"],
    "Diciembre" => ["Jefferson"]
            ];
echo "Las personas agregadas son: ". agregar($nombre,$mes,$meses)."<br>";         
?>   
<table border table=1>
<?php
foreach ($meses as $mes => $personas) {
    echo "<td style=color:blue;>".$mes."</td>";
    foreach ($personas as $persona) {
        echo "<td>".$persona."</td>";
    }
    echo "</tr>"; 
}  	
?>
</table>
</body>
</html>