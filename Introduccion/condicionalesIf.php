<?php

/*

Operadores de comparación

== Igualdad
< Menor que
> Mayor que
<= Menor o igual que
>= Mayor o igual que
!= Diferente
! Negación

Operadores lógicos

&& - Evalua si se cumplen las 2 condiciones
|| OR - Evalua si se cumple al menos una de las condiciones

*/

$edad = 18;
$nombre = "Josafath";
$condicion = true;

if ($edad >= 18) {
    echo "Eres mayor de edad<br>";
} else {
    echo "Eres menor de edad<br>";
}

if ($edad == 18 && $nombre == "Josafath") {
    echo "Tienes 18 años y te llamas Josafath<br>";
}

if ($condicion) {
    echo "La condición es verdadera<br>";
}