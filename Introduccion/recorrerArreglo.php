<?php

$meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];
$arreglo = [5, 10, 2, 53, 54,67, 43, 10];

//sort($meses); // Ordena el arreglo de forma ascendente
//rsort($meses); // Ordena el arreglo de forma descendente

//sort($arreglo); // Ordena el arreglo de forma ascendente
//rsort($arreglo); // Ordena el arreglo de

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recorrer arreglos</title>
</head>

<body>
    <h3>Meses del año</h>
        <ul>
            <?php foreach ($arreglo as $i => $mes) {
                echo "<li>$arreglo[$i]</li>";
            } ?>
        </ul>
</body>

</html>