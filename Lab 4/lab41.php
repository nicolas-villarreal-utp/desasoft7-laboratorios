<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.1</title>
</head>

<body>
    <?php
    if (array_key_exists('enviar', $_POST)) {
        if ($_REQUEST['porcentaje'] >= 80) {
            ?>
            <img src="verde.png" alt="">
            <?php
        } elseif ($_REQUEST['porcentaje'] < 80 and $_REQUEST['porcentaje'] >= 50) {
            ?>
            <img src="amarillo.png" alt="">
            <?php
        } else {
            ?>
            <img src="rojo.png" alt="">
            <?php
        }
    } else {
        ?>
        <form action="lab41.php" method="post">
            Porcentaje de Ventas: <input type="text" name="porcentaje" id="porcentaje">
            <input type="submit" value="Enviar Datos" name="enviar">
        </form>
        <?php
    }
    ?>
</body>

</html>