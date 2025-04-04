<?php 

$meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

$usuario = ["Nombre" => "Ramiro Josafath", "Edad" => 20, "Sexo" => "Masculino", "Telefono" => 4494941889];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista con ciclos anidados</h1>
    <ul>
        <?php 
        
        /*foreach($meses as $mes){
            echo '<li>' . $mes . '</li>';
        }*/

        foreach($usuario as $key => $value){
            echo '<li>' . $key . ': ' . $value . '</li>';
        }


        ?>
    </ul>
</body>
</html>