<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>constantes</title>
</head>
<body>
<?php

// Definición de constantes usando define()
define("PI", 3.14159);
define("SALUDO", "Hola, mundo!");

// Definición de constantes usando const
const GRAVEDAD = 9.81;
const MENSAJE = "¡Bienvenido a PHP!";

// Uso de las constantes
echo "El valor de PI es: " . PI . "\n";            // Salida: El valor de PI es: 3.14159
echo "Mensaje: " . SALUDO . "\n";                  // Salida: Mensaje: Hola, mundo!
echo "La gravedad en la Tierra es: " . GRAVEDAD . "\n";  // Salida: La gravedad en la Tierra es: 9.81
echo MENSAJE . "\n";                               // Salida: ¡Bienvenido a PHP!

?>

    
</body>
</html>