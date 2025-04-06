<?php 

try {
    $conexion = new PDO('mysql:host=localhost;dbname=prueba_curso', 'root', '');
    echo 'Conectado a la base de datos <br>';

    $conexion->query(('INSERT INTO usuarios VALUES (NULL, "Jose Juan", "rsp_63@hotmail.com")'));

    $res = $conexion->query("SELECT * FROM usuarios");

    foreach($res as $fila){
        echo $fila['nombre'] . '<br>';
    }
} catch (PDOException $e) {
    echo "Error" . $e->getMessage();
}

?>