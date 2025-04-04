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

    public function saludar(): string{
        return "Hola, soy $this->nombre, tengo $this->edad años y soy de $this->pais. <br>";
    }
}

$carlos = new Persona("Carlos", 30, "Colombia");
$josafath = new Persona("Josafath", 25, "México");

echo $josafath->saludar();
echo $carlos->saludar();

?>