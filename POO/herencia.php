<?php 

class Persona{
    public $nombre;
    public $edad;
    public $pais;
    
    function __construct($nombre, $edad, $pais){
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->pais = $pais;
    }

    public function saludar(): void{
        echo  "Hola, soy $this->nombre, tengo $this->edad años y soy de $this->pais. <br>";
    }
}

// La clase Estudiante hereda de la clase Persona
class Estudiante extends Persona{
    public $carrera;
    function __construct($nombre, $edad, $pais, $carrera){
        // Llamar al constructor de la clase padre
        parent::__construct($nombre, $edad, $pais);

        // Inicializar la propiedad de la clase hija
        $this->carrera = $carrera;
    }
}

$carlos = new Estudiante("Josafath Sosa Jimenez", 23, "México", "Ciencias de la Computación");
echo $carlos->carrera

?>