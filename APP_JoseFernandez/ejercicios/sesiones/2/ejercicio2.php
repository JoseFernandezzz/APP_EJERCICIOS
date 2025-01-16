<?php
session_start();
if (isset($_POST['numero'])) {
    $_SESSION['cantidad']++;
    if ($_POST['numero'] % 2 == !0 && $_POST['numero'] > 0) {
        $_SESSION['imparesCant']++;
        $_SESSION['imparesSum'] += $_POST['numero'];
        $_SESSION['mediaImpares'] = $_SESSION['imparesSum'] / $_SESSION['imparesCant'];
    } elseif ($_POST['numero'] % 2 === 0 && $_POST['numero'] > 0) {
        if (!isset($_SESSION['parM'])) {
            $_SESSION['parM'] = $_POST['numero'];
        } else {
            if ($_POST['numero'] > $_SESSION['parM']) {
                $_SESSION['parM'] = $_POST['numero'];
            }
        }
    }
} else {
    $_SESSION['cantidad'] = 0;
    $_SESSION['imparesCant'] = 0;
    $_SESSION['imparesSum'] = 0;
    $_SESSION['mediaImpares'] = 0;
    $_SESSION['parM'] = 0;
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
        echo '<form action="#" method="post">
        <label for="numero">Introduce un numero:</label>
        <input type="number" id="numero" name="numero">
        <input type="submit">
    </form>';
    } else {
        echo 'Cantidad: ' . $_SESSION['cantidad'] . '<br>';
        echo 'Media de impares: ' . $_SESSION['mediaImpares'] . '<br>';
        echo 'Par mayor: ' . $_SESSION['parM'];
        session_destroy();
    }
    ?>


</body>

</html>