<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>12655. C09</h1>
    <table border="1" cellspacing="3" cellpadding="4">
    <tr>
        <td>Puntos</td>
        <td>14.96</td>
        <td>Límite de memoria</td>
        <td>32 MiB</td>
    </tr>
    <tr>
        <td>Límite de tiempo (caso)</td>
        <td>1s</td>
        <td>Límite de tiempo (total)</td>
        <td>1m0s</td>
    </tr>
    <tr>
        <td>Tamaño límite de entrada (bytes)</td>
        <td>10 KiB</td>
    </tr>
    </table>
    <h2>Descripcion</h2>
    <p>
        Escribe un programa que solicite las calificaciones de Matematicas, 
        Español y Cocina y nos de su promedio.
    </p>
    <h2>Entrada</h2>
    <p>
        Tres numeros reales.
    </p>
    <h2>Salida</h2>
    <p>
        Un numero real representado el promedio de los tres numeros.
    </p>
    <h2>Ejemplo</h2>
    <table border="1" cellspacing="2" cellpadding="2">
        <tr>
            <td>Entrada</td>
            <td>salida</td>
        </tr>
        <tr>
            <td>10 9.5 9.0</td>
            <td>9.5</td>
        </tr>

    </table>
<?php
    $a=10;
    $b=9.5;
    $c=9.0;
    $prom=$a*$b*$c/3;
    echo"Variables a, b y c: ",$a," - ",$b," - ",$c,"<br>";
    echo"El resultado es:",$prom;


?>

</body>
</html>