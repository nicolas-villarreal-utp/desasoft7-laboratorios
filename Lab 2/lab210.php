<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 2.10</title>
</head>

<body>
    <?php
    $persona = array(
        array("nombre" => "Rosa", "estatura" => 168, "sexo" => "F"),
        array("nombre" => "Ignacio", "estatura" => 175, "sexo" => "M"),
        array("nombre" => "Daniel", "estatura" => 172, "sexo" => "M"),
        array("nombre" => "Ruben", "estatura" => 182, "sexo" => "M")
    );

    echo "<b>DATOS SOBRE EL PERSONAL</b><br><hr>";

    $numPersona = count($persona);

    for ($i = 0; $i < $numPersona; $i++) {
        echo "Nombre: <b>", $persona[$i]['nombre'], "</b><br>";
        echo "Estatura: <b>", $persona[$i]['estatura'], "</b><br>";
        echo "Sexo: <b>", $persona[$i]['sexo'], "</b><br>";
    }
    ?>
</body>

</html>