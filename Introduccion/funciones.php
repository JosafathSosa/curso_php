<?php 

function saludo($nombre){
    echo "Hola desde la función saludo a $nombre <br>";
}

function suma($a, $b){
    echo "El resultado de la suma es: ", $a + $b ,"<br>";
}

function resta($a, $b){
    return "El resultado de la resta es: " . $a - $b ."<br>";
}


$nombre = "Josafath";
saludo($nombre);

suma(10, 50);
suma(50,50);

$resta = resta(50, 10);
echo $resta;

?>