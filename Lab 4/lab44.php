<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.4</title>
</head>

<body>
    <h2>Llenar el Arreglo</h2>
    <form action="lab44.php" method="post">
        <?php
        session_start();

        // Inicializamos el arreglo en la primera carga de la página.
        if (!isset($_SESSION['arreglo44'])) {
            $_SESSION['arreglo44'] = array();
        }

        $arreglo = $_SESSION['arreglo44'];

        if (count($arreglo) < 20) {
            // Mostramos un campo de entrada para que el usuario ingrese un valor.
            echo '<label for="valor">Ingrese un valor par:</label>';
            echo '<input type="text" name="valor" id="valor" required>';
            echo '<input type="submit" value="Agregar Valor">';
        } else {
            echo '<p>Arreglo llenado con éxito.</p>';
            echo '<a href="lab44resultado.php">Ver Resultado</a>';
        }

        if (isset($_POST["valor"])) {
            $valor = intval($_POST["valor"]);

            // Validar si el valor ingresado es par.
            if ($valor % 2 == 0) {
                // Agregamos el valor al arreglo.
                $arreglo[] = $valor;
                $_SESSION['arreglo44'] = $arreglo;
            } else {
                // Si el valor no es par, mostramos un mensaje de error.
                echo "El valor ingresado ($valor) no es par. Por favor, ingrese un valor par.<br>";
            }
        }
        ?>
    </form>
</body>

</html>