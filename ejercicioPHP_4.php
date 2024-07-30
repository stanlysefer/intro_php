<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores comparación, operadores lógicos, union de cadenas</title>
</head>
<body>
<?php

// Operadores de comparación
$a = 5;
$b = 10;

echo "Operadores de comparación:\n";
echo "\$a == \$b: " . ($a == $b ? "true" : "false") . "\n";  // Igualdad
echo "\$a != \$b: " . ($a != $b ? "true" : "false") . "\n";  // Desigualdad
echo "\$a < \$b: " . ($a < $b ? "true" : "false") . "\n";    // Menor que
echo "\$a > \$b: " . ($a > $b ? "true" : "false") . "\n";    // Mayor que
echo "\$a <= \$b: " . ($a <= $b ? "true" : "false") . "\n";  // Menor o igual que
echo "\$a >= \$b: " . ($a >= $b ? "true" : "false") . "\n";  // Mayor o igual que

// Operadores lógicos
$x = true;
$y = false;

echo "\nOperadores lógicos:\n";
echo "\$x && \$y: " . ($x && $y ? "true" : "false") . "\n";  // AND lógico
echo "\$x || \$y: " . ($x || $y ? "true" : "false") . "\n";  // OR lógico
echo "!\$x: " . (!$x ? "true" : "false") . "\n";             // NOT lógico

// Unión de cadenas
$cadena1 = "Hola";
$cadena2 = "mundo";

echo "\nUnión de cadenas:\n";
$union = $cadena1 . ", " . $cadena2 . "!";
echo $union;  // Salida: Hola, mundo!

?>

    
</body>
</html>