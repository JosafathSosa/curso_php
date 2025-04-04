<?php 

$semana = Array('Lunes', 'Martes', 5, 'Jueves', 'Viernes', 'Sabado', 'Domingo');
$arreglo2 = [Array(2, 5), "Josafath", false];
echo count($semana) . '<br>';


echo $semana[1]. '<br>';

$semana[7] = "Josafath";
echo $semana[7] . '<br>';

echo $semana[2] . '<br>';


$ultimoDia = count($semana) - 1;
echo $semana[$ultimoDia] . '<br>';  

// Convierte un arreglo en una cadena de texto
echo implode(", ", $semana) . '<br>'; 

?>