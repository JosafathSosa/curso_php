<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Contacto</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Winky+Sans:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="wrap">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
            <input type="text" class="form-control" id="correo" name="correo" placeholder="Correo">
            <textarea name="mensaje" id="mensaje" class="form-control" placeholder="Mensaje"></textarea>

            <?php if(!empty($errores)): ?>
                <div class="alert error"><?php echo $errores ?></div>

            <?php elseif(!empty($enviado)): ?>
                <div class="alert success"><p>Datos enviados</p></div>
            <?php endif;?>

            <input type="submit" placeholder="Enviar Correo" class="btn" name="submit" id="submit">
        </form>
    </div>
</body>

</html>