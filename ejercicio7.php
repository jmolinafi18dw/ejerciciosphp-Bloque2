<html>
<head>
	<title>Potencia</title>
	<meta charset="utf-8">
</head>
<body>
<?php
$base= rand(0,10);
$exponente= rand(0,10);
function potencia ($base, $exponente = 2){
    return pow($base, $exponente);
}
echo $base."-".$exponente."=".potencia($base, $exponente);
?>
</body>
</html>