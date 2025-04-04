<?php 

//isset sirve para saber si una variable tiene valor 

$edad = 23;

$edad =  (isset($edad)) ? $edad : "El usuario no establecio su edad";

echo $edad;

?>