<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.3</title>
</head>

<body>
    <form action="lab43resultado.php" method="post">
        <h2>Llenar el Arreglo</h2>
        <?php
        // Inicializamos un arreglo vacío.
        $arreglo = array();

        // Llenamos el arreglo con valores diferentes.
        for ($i = 0; $i < 20; $i++) {
            // Generamos un número aleatorio que no esté en el arreglo actual.
            do {
                $valor = rand(1, 100); // Puedes ajustar el rango según tus necesidades.
            } while (in_array($valor, $arreglo));

            // Agregamos el valor al arreglo.
            $arreglo[] = $valor;
        }

        // Almacenamos el arreglo en una sesión para usarlo en resultado.php.
        session_start();
        $_SESSION['arreglo'] = $arreglo;
        ?>

        <p>Arreglo llenado con éxito.</p>
        <input type="submit" value="Ver Resultado">
    </form>
</body>

</html>