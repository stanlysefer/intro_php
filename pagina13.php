!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones para manipular cadenas </title>
</head>
<body>
    <h1>Funciones para manipular cadenas</h1>
    <?php
    // subtr

    function obtenerSubcadena($cadena, $inicio, $longitud) {
        return substr($cadena, $inicio, $longitud);
    }
    
    $texto = "Hola, mundo";
    $subcadena = obtenerSubcadena($texto, 0, 4);  // "Hola"

    // ord

    function primerCaracterYValorASCII($cadena) {
        $primerCaracter = $cadena[0];  // Obtiene el primer carácter
        $valorASCII = ord($primerCaracter);  // Obtiene el valor ASCII
        return [$primerCaracter, $valorASCII];
    }
    
    $texto = "Hola";
    list($caracter, $valor) = primerCaracterYValorASCII($texto);
    echo "El primer carácter es '$caracter' y su valor ASCII es $valor.";  // El primer carácter es 'H' y su valor ASCII es 72.


    // printt

    function buscarSubcadena($cadena, $subcadena) {
        return strpos($cadena, $subcadena);
    }
    
    $texto = "Hola, mundo";
    $indice = buscarSubcadena($texto, "mundo");  // 6
    print "Índice de 'mundo': $indice\n";

    // sprintf

    $numero = 123.456789;
    $texto = sprintf("El número es: %.2f", $numero);
    print "$texto\n";  // "El número es: 123.46"


    // strtolower

    $cadena1 = "Hello World";
    $cadena2 = "hello world";
    
    if (strtolower($cadena1) === strtolower($cadena2)) {
        print "Las cadenas son iguales (insensible a mayúsculas).\n";
    } else {
        print "Las cadenas son diferentes.\n";
    }


    // strtoupper

    $cadena1 = "Hello World";
    $cadena2 = "hello world";
    
    if (strtoupper($cadena1) === strtoupper($cadena2)) {
        print "Las cadenas son iguales (insensible a mayúsculas).\n";
    } else {
        print "Las cadenas son diferentes.\n";
    }


    // ereq


    $texto = "Hola, Mundo!";
$patron = "/mundo/i";  // 'i' hace la búsqueda insensible a mayúsculas

if (preg_match($patron, $texto)) {
    print "El patrón '$patron' se encontró en el texto.\n";
} else {
    print "El patrón '$patron' no se encontró en el texto.\n";
}

    // ereg1

    $texto = "Hola, mundo!";
    $patron = "/mundo/";
    $reemplazo = "universo";
    $textoReemplazado = preg_replace($patron, $reemplazo, $texto);
    print "Texto después del reemplazo: $textoReemplazado\n";  // "Hola, universo!"

    ?>
</body>
</html>