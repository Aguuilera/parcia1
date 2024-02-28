
<?php
//Me falta los dos ultimos puntos cuando le encuentre lo actualizo.
    $a=array();
    $n=rand(1,1000);
    $x=0;
    for($i=1; $i<=$n; $i++)
    {
        array_push($a,rand(0,10));
    }
    for($i=1; $i<$n; $i++)
    {
        $x+=$a[$i];
    }
    echo "Datos Generados: ",$n, "<br>";
    $promedio=$x/$n;
    echo"Promedio: ";
    echo round($promedio,2), "<br>";
    $numMay=0;
    for($i=1; $i<$n; $i++)
    {
        if($a[$i]>=$promedio)
        {
            $numMay++;
        }
    }
    echo"Numero mayor: ";
    echo $numMay;
    echo "<br>";
    $reprobados=0;
    $Aprobados=0;
    for($i=1; $i<$n; $i++)
    {
        if($a[$i]<6)
        {
            $reprobados++;
        }
        else if($a[$i]>=6)
        {
            $Aprobados++;
        }
    }
    echo"Reprobados: ";
    echo $reprobados; echo"<br>";
    echo"Aprpbrados: ";
    echo $Aprobados;
    echo"<br>";
    
    
?>