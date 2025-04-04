<?php

$errores = '';

if (isset($_POST['submit'])) { // Verifica si el formulario ha sido enviado
    $nombre = $_POST['name']; // Almacena el valor del campo 'name' en la variable $nombre
    $correo = $_POST['email']; // Almacena el valor del campo 'email' en la variable $correo

    if (!empty($nombre)) {
        $nombre = trim($nombre); // Elimina espacios en blanco al inicio y al final del nombre
        $nombre = htmlspecialchars($nombre); // Convierte caracteres especiales a entidades HTML
        $nombre = stripslashes($nombre); // Elimina las barras invertidas de la cadena

        echo "Tu nombre es $nombre <br>";
    }else{
        $errores .= "Por favor agrega un nombre <br>";
    }

    if (!empty($correo)) {
        echo $correo;
    }else{
        $errores .= "Por favor agrega un correo <br>";
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{
            color: red;
            font-size: 1.2em;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <input type="text" placeholder="Nombre" name="name">
        <br>
        <input type="email" name="email" placeholder="Correo">
        <br>

        <?php if(!empty($errores)): ?>
            <div class="error"><?php echo $errores ?></div>
        <?php endif; ?>

        <input type="submit" placeholder="Enviar" name="submit">
    </form>
</body>

</html>