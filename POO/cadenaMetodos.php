<?php 

class Usuario{
    public $nombre;
    public $correo;

    function __construct($nombre, $correo){
        $this->nombre = $nombre;
        $this->correo = $correo;
    }

    public function mostrarNombre(){
        echo "Su nombre es: $this->nombre <br>";
        return $this;
    }

    public function mostrarCorreo(){
        echo "Su correo es: $this->correo <br>";
        return $this;
    }
}


$josafath = new Usuario("Josafath", "rsp_63@hotmail.com");
$josafath->mostrarNombre()->mostrarCorreo(); // Llamada a métodos encadenados

?>