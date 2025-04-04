<?php

//Se pueden generar arreglos dentro de arreglos
$amigos = array(
    array('Alejandro', 20, array('asd', 25)),
    array('Cesar', 21),
    array('Josafath', 15)
);

echo $amigos[0][0] . '<br>';
echo $amigos[0][1] . '<br>';
echo $amigos[2][0] . '<br>';

