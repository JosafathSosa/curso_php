<?php 

// Las clases abstractas son clases que no se pueden instanciar, pero pueden ser heredadas por otras clases.
abstract class Persona{
    public function saludo(): string{
        return "Hola, soy una persona";
    }
}

class Usuario extends Persona{
    
}

$josafath = new Usuario;
echo $josafath->saludo(); 

?>