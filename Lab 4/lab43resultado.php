<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.3</title>
</head>

<body>
    <h2>Resultado</h2>
    <?php
    // Iniciamos la sesión para acceder al arreglo llenado en llenar.php.
    session_start();

    // Recuperamos el arreglo de la sesión.
    $arreglo = $_SESSION['arreglo'];

    // Encontramos el valor máximo y su posición.
    $valorMaximo = max($arreglo);
    $posicionMaximo = array_search($valorMaximo, $arreglo);

    // Mostramos el arreglo y la posición y valor del elemento mayor.
    echo "Arreglo: " . implode(", ", $arreglo) . "<br>";
    echo "El elemento mayor es $valorMaximo y se encuentra en la posición $posicionMaximo.";
    ?>
</body>

</html>