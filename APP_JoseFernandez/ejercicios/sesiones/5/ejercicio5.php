<?php

if (isset($_POST['color'])) {
    $_COOKIE['color'] = $_POST['color'];
    
} else {
    setcookie('color', 'white');
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body <?php echo 'style="background-color:'.$_COOKIE['color'].' ;"';

?>
    <div >
<form action="#" method="post">
    <label for="color">Ingrese el color de fondo: </label>
    <input type="text" name="color" id="color">

    <input type="submit" value="Cambiar">
</form>
    </div>
</body>


</html>