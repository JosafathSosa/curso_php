<?php 

class Persona{
    
    // Las propiedades estáticas pertenecen a la clase y no a la instancia de la clase.
    public static $dia = "3 de abril";

    public static function saludo($nombre): string{
        return "Hola $nombre, desde la funcion estatica";
    }
}

echo Persona::$dia;// Acceso a la propiedad estática de la clase Persona
echo '<br>'; 
echo Persona::saludo("Josafath Sosa"); // Acceso a la propiedad estática de la clase Persona

?>