<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrucciones repetitivas while</title>
</head>
<body>
    <h1>instruccion repetitiva while en php</h1>
    <?php
        $x = 10;
        while(--$x)
        {
            echo "<big>";            
            echo "<b>";
            print ("Numero: ".$x);
            echo "<br>";
            echo "<hr>";
        }
    ?>
</body>
</html>