<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="deco.css">
</head>
    <body>
        <h1>Escaleras de asteriscos</h1>
        <p>
            Este programa es bastante sencillo, al insertar un numero creara una escalera que el ultimo escalon
            es el numero ingresado.
        </p>
    <ul id="menu">
        <li><a href="portda.php">portada</a></li>
        <li><a href="calculos_condicionales.php">calculos_condicionales</a></li>
        <li><a href="formulota.php">Formulota</a></li>
        <li><a href="el_lado_mas_corto.php">El_lado_mas_corto</a></li>
        <li><a href="escalera_de_asteriscos.php">Escaleras_de_asteriscos</a></li>
    </ul>
        <form action="escalera_de_asteriscos.php" method="post">
        Numero n:
        <input type="text" name="n"><br>
        <input type="submit" value="Enviar"><br>
        <?php
        if($_POST)
        {
            $n=$_POST['n'];
            for($i=1; $i<=$n; $i++)
            {
                for($j=0; $j<$i; $j++)
                {
                    echo"#";
                    
                }
                echo"<br>";
            }
        }
        ?>
    </body>
</html>