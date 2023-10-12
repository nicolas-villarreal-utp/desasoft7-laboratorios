<?php
$numero = $_POST['numero'];
$factorial = 1;
for ($i = 2; $i <= $numero; $i++) {
    $factorial = $factorial * $i;
}

echo "<br>  FACTORIAL DE $numero:";
echo "<br>  " . $factorial . "";
echo "<br>";
echo "<a href='lab42.html'>Regresar</a>";
?>