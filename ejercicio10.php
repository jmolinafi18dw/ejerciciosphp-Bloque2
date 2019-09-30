<html>
<head>
<title>Persona</title>
</head>
<body>
<?php
class Persona {
    private $dni = " ";
    private $nombre = " ";
    private $apellido = " ";
    public function __construct( $dni, $nombre, $apellido) {
        $this->dni = $dni;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }
    public function setDni($dni) {
        $this->dni = $dni;
    }
    public function getDni() {
        echo $this->dni;
    }
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    public function getNombre() {
        echo $this->nombre;
    }
    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }
    public function getApellido() {
        echo $this->apellido;
    }
    public function nombrecompleto() {
        echo "Persona: ".$this->nombre." ".$this->apellido;
    }
}
class User extends Persona {
    private $puntuacion = 55;
    public function setPuntuacion($puntuacion) {
        $this->$puntuacion = $puntuacion;
    }
    public function getPuntuacion() {
        echo $this->$puntuacion;
    }
    public function nombrecompleto() {
        echo "User: ".$this->nombre." ".$this->apellido;
    }
    public function Puntuacion() {
            if ($this->$puntuacion < 100)
                echo "El usuario tienes menos de 100 puntos";
            else 
                echo "El usuario tiene mas de 100 puntos";
    }
}  
?>
</body>
</html>