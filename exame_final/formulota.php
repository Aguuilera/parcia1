<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="deco.css">
</head>
    <body>
        <h1>Formulota</h1>
        <h2>El siguiente programa calcula esta formula dando 3 numeros.</h2>
    <ul id="menu">
        <li><a href="portada.html">portada</a></li>
        <li><a href="calculos_condicionales.php">calculos_condicionales</a></li>
        <li><a href="formulota.php">Formulota</a></li>
        <li><a href="el_lado_mas_corto.php">El_lado_mas_corto</a></li>
        <li><a href="escalera_de_asteriscos.php">Escaleras_de_asteriscos</a></li>
    </ul>
        <form action="formulota.php" method="post">
        Numero x:
        <input type="text" name="x"><br>
        Numero y:
        <input type="text" name="y"><br>
        Numero z:
        <input type="text" name="z"><br>
        <input type="submit" value="Enviar"><br>
        <?php
        if($_POST)
        {
            $f;
            $x=$_POST['x'];
            $y=$_POST['y'];
            $z=$_POST['z'];
            $f=((($x+$y)/(2*$x))+(($x*$x*$x+$y*$y*$y)/($x*$x+$y*$y)))/($x*$x+$y*$y+$z*$z);
            echo"Salida: ", round($f,6); echo "<br>";
            echo"Descripción: ",$f;
        }
        ?>
    </body>
</html>