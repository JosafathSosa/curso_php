<?php 

$conexion = new mysqli('localhost', 'root', '', 'prueba_curso');

if ($conexion->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
} else {
    echo 'Conectado a la base de datos <br>';

    $sql = 'SELECT * FROM usuarios';
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {

        /*echo "<pre>";
        var_dump($resultado->fetch_assoc());
        echo "</pre>";*/

        while($fila = $resultado->fetch_assoc()){
            echo $fila['id'] . ' - ' . $fila['nombre'] . '<br>';
        }

    }else{
        "No hay resultados <br>";
    }
}


?>