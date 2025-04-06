<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginación</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="contenedor">
        <h1>Articulos</h1>
        <ul>
           <?php foreach($articulos as $articulo): ?>

                <li><?php echo $articulo['id'] . " - ". $articulo['articulo'] ?></li>
            <?php endforeach;?>
        </ul>
    </div>

    <section class="paginacion">
    <ul>
        <?php if($pagina == 1): ?>
            <li><a class="disabled" href="#">&laquo;</a></li>
        <?php else: ?>
            <li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
        <?php endif; ?>

        <?php 
        for ($i = 1; $i <= $numeroPaginas; $i++) { 
            if ($pagina == $i) {
                echo "<li><a class='active' href='?pagina=$i'>$i</a></li>";
            } else {
                echo "<li><a href='?pagina=$i'>$i</a></li>";
            }
        }
        ?>

        <?php if($pagina == $numeroPaginas): ?>
            <li><a class="disabled" href="#">&raquo;</a></li>
        <?php else: ?>
            <li><a href='?pagina=<?php echo $pagina + 1 ?>'>&raquo;</a></li>
        <?php endif; ?>
    </ul>
</section>

</body>
</html>