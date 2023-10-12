<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 4.5</title>
</head>
<body>
    <h2>Laboratorio 4.5</h2>
    <h3>Generar Matriz Identidad</h3>
    <form action="" method="post">
        <label for="n">Ingrese un número par (N):</label>
        <input type="number" name="n" id="n" required>
        <input type="submit" value="Generar Matriz">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = intval($_POST["n"]);

        // Validar que N sea un número par.
        if ($n % 2 == 0) {
            // Generar la matriz identidad.
            echo "<h3>Matriz Identidad de Orden $n:</h3>";
            echo "<table border='1'>";
            for ($i = 0; $i < $n; $i++) {
                echo "<tr>";
                for ($j = 0; $j < $n; $j++) {
                    if ($i == $j) {
                        echo "<td>1</td>";
                    } else {
                        echo "<td>0</td>";
                    }
                }
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Por favor, ingrese un número par (N).</p>";
        }
    }
    ?>
    
</body>
</html>