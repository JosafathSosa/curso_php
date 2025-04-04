<?php 

$errores = '';
$enviado = false;

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    if (!empty($nombre)) {
        $nombre = trim($nombre);
    }else{
        $errores .= "El nombre no puede estar vacío <br>";
    }

    if (!empty($correo)) {
        $correo = filter_var($correo, FILTER_VALIDATE_EMAIL);
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores .= "El correo no es válido";
        }
    }else{
        $errores .= "El correo no puede estar vacío <br>";
    }

    if (!empty($mensaje)) {
        $mensaje = trim($mensaje);
        $mensaje = htmlspecialchars($mensaje);
    }else{
        $errores .= "El mensaje no puede estar vacío <br>";
    }

    if (!$errores) {
        $enviado = true;
    }
}

require 'indexView.php';

?>