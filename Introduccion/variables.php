<?php

//Tipos de datos en PHP
//String
//Integer
//Float
//Boolean
//Array
//Object
//NULL
//CLASS

//String
$nombre =  "Ramiro";
$nombre2 = "Josafath";

//integer
$numero = 7;

//float
$decimal = 7.34;

//boolean
$booleano = true;

if ($booleano) {
    echo "Es verdadero <br>";
} else {
    echo "Es falso <br>";
}

echo $numero .'<br>';
echo $decimal . '<br>';

//Comillas dobles si permiten concatenar dentro
echo "Hola, $nombre <br>";

//Concatenar con comillas simples fuera
echo 'Hola ' .$nombre2 . '<br>';

echo gettype($nombre) . '<br>';
?>