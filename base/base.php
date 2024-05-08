<?php

    if($_POST)
    {
        $nombre=$_POST["txtnombre"];
        $id=$_POST["txtid"];
        $password=$_POST["txtcontra"];
        $nombre_contra=$_POST["txtnombrec"];

        $conexion=mysqli_connect('localhost', 'root','root', 'base', '3307');
        $consulta="insert into cuenta values ('nombre', 'id', sha1(password), 'nombre_contra')";
        $resultado=mysqli_query($conexion,$consulta);
        mysqli_close($conexion);
        $nombre='';
        $id='';
        $password='';
        $nombre_contra='';
        echo "proceso terminado";

    }
?>