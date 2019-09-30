<html>
<head>
<title>Factorial</title>
</head>
<body>
<?php
$numero = array();
$nfactorial = array();

function factorial($numero)
{
    $total=1;
    for ( $i = $numero ; $i >= 1 ; $i--) 
    {
        $total=$total*$i;
    }
    return $total;
}

for ($x=0;$x<10;$x++) {
    array_push($numero,$x);
}

for ($x=0;$x<=count($numero);$x++) {
    $resultado=factorial($numero[$x]);
    array_push($nfactorial,$resultado);
}

for ($x=0;$x<count($numero);$x++){
    echo $numero[$x]."=".$nfactorial[$x]."<br>";

}

?>
</body>
</html>