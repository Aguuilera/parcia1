<?php
    if($_POST)
    {
        $nombre=$_POST["cuenta"];
        $contra=$_POST["contrasena"];
        $conexion=mysqli_connect("localhost","root","root","clubGame","3307");
        $insertar="insert into Usuarios (nombre, passwor) values('$nombre','$contra')";
        $resultado=mysqli_query($conexion, $insertar);
        echo"Proceso terminado";
    }
?>