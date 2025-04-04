<?php

//Arreglos con clave y valor
$alex = ['telefono' => 4494941889, 'edad' => 23, 'apellido' => "Sosa", 'pais' => "México"];

echo $alex['telefono'] . '<br>';
echo $alex['edad'] . '<br>';
echo $alex['apellido'] . '<br>';
echo $alex['pais'] . '<br>';

$alex['telefono'] = 4494480003;
echo 'Mi telefono es ' . $alex['telefono'] . '<br>';

?>
