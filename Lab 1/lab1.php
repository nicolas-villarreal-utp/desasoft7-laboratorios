<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 1</title>
</head>

<body>
    <?php
    $files = scandir('.');
    foreach ($files as $file) {
        if ($file == '.' || $file == '..') continue;
        echo "<a href='$file'>". $file . '</a><br>';
    }
    ?>
</body>

</html>