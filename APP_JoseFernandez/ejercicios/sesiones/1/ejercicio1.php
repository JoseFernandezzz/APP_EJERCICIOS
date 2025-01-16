<?php

session_start();



if (isset($_POST['numero'])) {
    echo $_POST['numero'];
    $_SESSION['total'] = $_SESSION['total'] + $_POST['numero'];
    $_SESSION['contador'] = $_SESSION['contador'] + 1;
} else {
    $_SESSION['total'] = 0;
    $_SESSION['contador'] = 0;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (!isset($_POST['numero']) || $_POST['numero'] > 0) {
        echo '<form action="ejemplo4.php" method="post">
        <label for="numero">Introduzca numeros positivos:</label>

        <input type="number" id="numero" name="numero">
        <input type="submit" value="Enviar">

    </form>';
    } else {

        echo $_SESSION['total'] / $_SESSION['contador'];
        session_destroy();
    }

    ?>


</body>

</html>