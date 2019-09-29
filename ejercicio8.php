<html>
<head>
<title>Archivo</title>
</head>
<body>
	<?php

$nombre_fichero = "config.php";
function comprobacion($nombre_fichero){
    try {
        if (file_exists($nombre_fichero)){
            echo "El archivo existe";
        }
        else {
            throw new Exception("El archivo no existe");
         
        } 
    } catch (Exception $e) {
            echo $e->getMessage();
    }
}
echo comprobacion($nombre_fichero);
	?>
</body>
</html>