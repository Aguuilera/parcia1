<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="deco.css">
</head>
    <body>
        <h1>El lado mas corto</h1>
        <p>Este no si ni como lo puedo explicar :/</p>
        <ul id="menu">
        <li><a href="portada.html">portada</a></li>
        <li><a href="calculos_condicionales.php">calculos_condicionales</a></li>
        <li><a href="formulota.php">Formulota</a></li>
        <li><a href="el_lado_mas_corto.php">El_lado_mas_corto</a></li>
        <li><a href="escalera_de_asteriscos.php">Escaleras_de_asteriscos</a></li>
    </ul>
    <?php
        $abscisas=array(10.1,20.2,22.3,7.5);
        $ordenadas=array(10.2,10.3,4.1,0.9);
        $lado=array();
        for($i=0; $i<4; $i++)
        {
            if($i==3)
            {
                $lado[$i]=sqrt(pow($abscisas[$i]-$abscisas[$i-3],2)+pow($ordenadas[$i]-$ordenadas[$i-3],2));
            }
            else{
            $lado[$i]=sqrt(pow($abscisas[$i+1]-$abscisas[$i],2)+pow($ordenadas[$i+1]-$ordenadas[$i],2));
            }
        }
        if($lado[0]<$lado[1] && $lado[0]<$lado[2] && $lado[0]<$lado[3])
        {
            echo round($lado[0],6);
        }
        else if($lado[1]<$lado[0] && $lado[1]<$lado[2] && $lado[1]<$lado[3])
        {
            echo round($lado[1],6);
        }
        else if($lado[2]<$lado[0] && $lado[2]<$lado[1] && $lado[2]<$lado[3])
        {
            echo round($lado[2],6);
        }
        else if($lado[3]<$lado[0] && $lado[3]<$lado[2] && $lado[3]<$lado[1])
        {
            echo round($lado[3],6);
        }
    ?>
</body>
</html>