<?php

function calcularArea($base, $altura)
{
    return $base * $altura / 2;
}

$area = calcularArea(10, 10);
echo "El área del triángulo es: $area <br>";
