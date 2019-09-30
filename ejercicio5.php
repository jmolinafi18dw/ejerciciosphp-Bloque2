<html>
<head>
<title>Meses</title>
</head>
<body>
<?php
$año=rand(2000, 2050);
$mes= array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
$meses = array();
for ($x=1;$x<=12;$x++) {
    $mes_nun = cal_days_in_month(CAL_GREGORIAN, $x,$año);
    array_push($meses,$mes_nun);
}
echo "<h1>Año $año</h1>";
echo "<table border table=1>
  <tr>
    <td><strong>Indice</strong></td>
    <td>".$mes[0]."</td>
    <td>".$mes[1]."</td>
    <td>".$mes[2]."</td>
    <td>".$mes[3]."</td>
    <td>".$mes[4]."</td>
    <td>".$mes[5]."</td>
    <td>".$mes[6]."</td>
    <td>".$mes[7]."</td>
    <td>".$mes[8]."</td>
    <td>".$mes[9]."</td>
    <td>".$mes[10]."</td>
    <td>".$mes[11]."</td>
  </tr>
  <tr>
    <td><strong>Valor</strong></td>
    <td>".$meses[0]."</td>
    <td>".$meses[1]."</td>
    <td>".$meses[2]."</td>
    <td>".$meses[3]."</td>
    <td>".$meses[4]."</td>
    <td>".$meses[5]."</td>
    <td>".$meses[6]."</td>
    <td>".$meses[7]."</td>
    <td>".$meses[8]."</td>
    <td>".$meses[9]."</td>
    <td>".$meses[10]."</td>
    <td>".$meses[11]."</td>
  </tr>
  </table>"
?>
</body>
</html>