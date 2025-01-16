<?php
session_start();
if (isset($_POST['numero'])) {
    $_SESSION['cantidad']++;
    $_SESSION['suma']+=$_POST['numero'];
    $_SESSION['media'] = $_SESSION['suma']/$_SESSION['cantidad'];
} else {
    $_SESSION['cantidad'] = 0;
    $_SESSION['suma'] = 0;
    $_SESSION['media'] = 0;
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
    if (!isset($_POST['numero']) || $_SESSION['suma'] < 10000) {
        echo '<form action="#" method="post">
        <label for="numero">Introduce un numero:</label>
        <input type="number" id="numero" name="numero">
        <input type="submit">
    </form>';
    } else {
        echo 'Total: '.$_SESSION['suma'].'<br>';
        echo 'Contador: '.$_SESSION['cantidad'].'<br>';
        echo 'Media: '.$_SESSION['media'].'<br>';
        session_destroy();

    }
    ?>
</body>

</html>