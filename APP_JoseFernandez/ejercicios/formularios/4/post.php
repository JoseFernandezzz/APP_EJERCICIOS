<?php 
$resultado = 0;
switch ($_POST['operacion']) {
    case 'suma':
        $resultado = $_POST['n1'] + $_POST['n2'];
        break;
    case 'resta':
        $resultado=$_POST['n1'] - $_POST['n2'];
        break;
    case 'multiplicacion':
        $resultado=$_POST['n1'] * $_POST['n2'];
        break;
    case 'division':
        $resultado=$_POST['n1'] / $_POST['n2'];
        break;
}

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Ejercico 4</h1>

    <p>Resultado: <?= $resultado ?> </p>
</body>
</html>