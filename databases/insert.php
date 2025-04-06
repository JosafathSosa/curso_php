<?php 

$conexion = new mysqli('localhost', 'root', '', 'prueba_curso');

if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
} else {
    echo 'Conectado a la base de datos <br>';

    $sql = "INSERT INTO usuarios VALUES (NULL, 'Alonso Garza', 'alonso@gmail.com')";
   $conexion->query($sql);

    
}

?>