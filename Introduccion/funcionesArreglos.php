<?php 

$amigo = ["telefono" => 4494941889, "nombre" => "Josafath", "edad" => 20, "estado" => "soltero", "hobbies" => ["videojuegos", "programar", "leer"]];
$semana = Array('Lunes', 'Martes', "Miercoles", 'Jueves', 'Viernes', 'Sabado', 'Domingo');

//extract extrae los valores de un arreglo asociativo y los convierte en variables
extract($amigo);

//echo $hobbies[0] . '<br>';

//Elimina el último elemento de un arreglo
array_pop($semana); 

foreach($semana as $dia){
    echo $dia . '<br>';
}

echo "<h2>Join</h2>";

//join une los elementos de un arreglo en una cadena de texto
echo join('-', $semana) . '<br>';

echo count($semana) . '<br>';

//ordena un arreglo de forma ascendente
sort($semana); 

echo "<h2>Arreglo ordenado</h2>";

echo join('-', $semana) . '<br>';

//echo  array_reverse($semana) . '<br>';

?>