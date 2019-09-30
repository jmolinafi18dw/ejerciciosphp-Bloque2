<body>
<?php
$numeros = array();
$factorial = array();

$fact1 = gmp_fact(5); // 5 * 4 * 3 * 2 * 1
echo gmp_strval($fact1) . "\n";

$fact2 = gmp_fact(50); // 50 * 49 * 48, ... etc
echo gmp_strval($fact2) . "\n";

for ($x=0;$x<10;$x++) {
    array_push($numeros,$x);
}

for ($x=0;$x<count($numeros);$x++){
    echo $numeros[$x]."--";

}
echo "<br>";
for ($x=0;$x<count($numeros);$x++){
    echo $factorial[$x]."--";

}
for ($x=1;$x<=count($numeros);$x++) {
    $mes_nun = $fact;
    array_push($factorial,$mes_nun);
}


?>
</body>
</html>