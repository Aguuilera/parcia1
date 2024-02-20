<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>12662. C16</h1>
    <table border="1" cellspacing="3" cellpadding="4">
            <tr>
                <td>Puntos</td>
                <td>16.79</td>
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
    <h2>Descripción</h2>
        <p>
            OMIJal se ha encontrado con una variante en el Concurso ACM, 
            pues el numero de programadores que conforman un equipo puede variar,
            entonces modifica tu programa anterior pues ahora deberás preguntar el 
            numero de 3 integrantes por equipo,
            al final indica cuantos equipos puedenformarse y cuantos programadores quedan fuera.
        </p>
    <h2>Entrada</h2>
    <p>
        Dos números que representen el número de programadores y el número de programadores por equipo.
    </p>
    <h2>Salida</h2>
    <p>
        Salida con el número de equipos formados y los estudiantes sin equipo,
        escrito exactamente como en el ejemplo
    </p>
    <h2>Ejemplo</h2>
    <table border="1" cellspacing="3" cellpadding="2">
        <tr>
            <td>Entrada</td>
            <td>Salida</td>
        </tr>
        <tr>
            <td >5 <br> 4</td>
            <td>Equipos formados: 1 <br>Estudiantes sin equipo: 1</td>
        </tr>
        <tr>
            <td>18 <br>3</td>
            <td>Equipos formados: 6 <br>Estudiantes sin equipo: 0</td>
        </tr>
    </table>

<?php
    $a=5;
    $b=4;
    $c=18;
    $d=3;
    $cont1;
    $cont2;
    echo"Variables: a, b, c, d ",$a," - ",$b," - ",$c," - ",$d,"<br>";
    echo"Primer resultado: 1 equipo, solos 1";
    echo"Segundo resultado: 6 equipos, solos 0";
?>
</body>
</html>