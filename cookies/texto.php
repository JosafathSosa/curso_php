<?php


if (isset($_COOKIE['font-size'])) {
    $tamaño = $_COOKIE['font-size']; // Si no existe la cookie, se asigna un tamaño por defecto
} else {
    $tamaño = '10px'; // Tamaño por defecto
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p {
            font-size: <?php echo $tamaño ?>;
        }
    </style>
</head>

<body>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quam, labore rerum nemo sint cupiditate eaque earum explicabo laboriosam doloribus quos corrupti. Culpa repellat suscipit aliquid corporis, debitis ducimus sunt nobis.</p>
</body>

</html>