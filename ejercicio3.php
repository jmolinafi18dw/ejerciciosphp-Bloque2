<html>
<head>
<title>Ejercicio3</title>
</head>
<body>
	<?php
$numeros = array();
for ($x=0;$x<20;$x++) {
    $num_aleatorio = rand(1,100);
    array_push($numeros,$num_aleatorio);
}
  for ($x=0;$x<count($numeros);$x++){
    echo $numeros[$x]."<br/>";
  }

  $nmax=max($numeros);
  $nmin=min($numeros);
  $suma= array_sum($numeros);
  $cantidad= count($numeros);
  $media=$suma/$cantidad;
 
echo "<br/>";
echo "El valor mas pequeño es: "."<p style='color:blue'>".$nmin."</p>";
echo "El valor mas grande es: "."<p style='color:green'>".$nmax."</p>";
echo "El valor de la suma es: "."<p style='color:red'>".$suma."</p>";
echo "El valor de la media es: "."<p style='color:red'>".$media."</p>";

?>

</body>
</html>