<?php

$a = 1;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh">
        <div>
            <h3 style="text-align: center">Contador con while</h3>
            <?php

            while ($a <= 10) {
                echo "<h5>Este es un ciclo y estoy contando las iteraciones, iteración número $a</h5>";
                $a++;
            }

            ?>
        </div>
    </div>
</body>
</html>