<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> instrucción if, if-else, elseif</title>
</head>
<body>
<?php

$numero = 10;

// Instrucción if
if ($numero > 0) {
    echo "\$numero es positivo\n";  // Salida: $numero es positivo
}

// Instrucción if-else
if ($numero % 2 == 0) {
    echo "\$numero es par\n";  // Salida: $numero es par
} else {
    echo "\$numero es impar\n";
}

// Instrucción if-elseif-else
if ($numero > 0) {
    echo "\$numero es positivo\n";  // Salida: $numero es positivo
} elseif ($numero < 0) {
    echo "\$numero es negativo\n";
} else {
    echo "\$numero es cero\n";
}

?>

    
</body>
</html>