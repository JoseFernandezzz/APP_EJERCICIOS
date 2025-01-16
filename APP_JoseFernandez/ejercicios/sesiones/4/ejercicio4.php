<?php
$usuario = 'jose';
$contraseña = '12345';
$entrar = null;


if (isset($_POST['usuario']) && isset($_POST['contraseña'])) {
    if ($_POST['usuario'] === $usuario && $_POST['contraseña'] === $contraseña) {
        $entrar = true;
    } else {
        $entrar = false;
    }
}

?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Inicio de sesión</title>
</head>

<body>

    <div class="cabecera">
        <h1>Inicio de sesión</h1>
    </div>
    <div class="contenido">
        <div class="formulario">
            <form action="#" method="post">
                <div class="usuario">
                    <label for="usuario">Usuario: </label>
                    <input type="text" id="usuario" name="usuario">
                </div>
                <div class="contraseña">
                    <label for="contraseña">Contraseña: </label>
                    <input type="password" name="contraseña" id="contraseña">
                </div>
                <div class="boton">
                    <input type="submit" value="Entrar">
                </div>
                <div class="mensaje">
                    <?php


                    if ($entrar === true) {
                        echo '<p class="bien">Sesion iniciada</p>';
                    } elseif ($entrar === false) {
                        echo '<p class="error">Usuario o contraseña incorrecta</p>';
                    }
                    ?>
                </div>
            </form>
        </div>
    </div>
</body>

</html>