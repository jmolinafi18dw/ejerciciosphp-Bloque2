<html>
<head>
<title>Area de cuadrado</title>
</head>
<body>
<?php
$lado = array();
for ($x=0;$x<5;$x++) {
    $num_aleatorio = rand(-5,7);
    array_push($lado,$num_aleatorio);
}
function cuadrado($lado){
    $area = $lado*$lado; 
    return $area; 
}
for ($x=0;$x<count($lado);$x++){  
    try {
        if ($lado[$x]>0){
            echo "El area de un cuadrado con lado ".$lado[$x]." es ".cuadrado($lado[$x])."<br/>";
        }
        else {
            throw new Exception("El numero ".$lado[$x]." es negativo<br>");      
        } 
    } catch (Exception $e) {
            echo $e->getMessage();
    }
}
?>
</body>
</html>
