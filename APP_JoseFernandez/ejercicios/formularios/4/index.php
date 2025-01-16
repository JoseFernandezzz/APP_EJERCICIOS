<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <h1>Ejercicio 4</h1>
    <form action="post.php" method="post">
        <label for="n1">Numero 1: </label>
        <input name="n1" id="n1" type="number">

        <label for="">Operacion: </label>

        <select name="operacion" id="operacion">
            <option value="suma">+</option>
            <option value="resta">-</option>
            <option value="multiplicacion">x</option>
            <option value="division">÷</option>
        </select>

        <label for="n2">Numero 2: </label>
        <input name="n2" id="n2" type="number">

        

        <input type="submit" value="Enviar">

    </form>
</body>
</html>