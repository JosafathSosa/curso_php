<?php 

class Persona{
    public $nombre;
    public $edad;
    public $pais;

    public function saludar(){
        return "Hola, soy $this->nombre, tengo $this->edad años y soy de $this->pais. <br>";
    }
}

$carlos = new Persona;
$carlos->nombre = "Carlos";
$carlos->edad = 30;
$carlos->pais = "Colombia";

$josafath = new Persona;
$josafath->nombre = "Josafath";
$josafath->edad = 25;
$josafath->pais = "México";

echo $josafath->saludar();

echo "Hola, soy $carlos->nombre, tengo $carlos->edad años y soy de $carlos->pais.";

?>