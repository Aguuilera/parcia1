<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="Formulario">
        <h1>Inicar sesion</h1>
        <form method="post" action="sesion1_2.php">
            <div class="username">
                <input name="usuario" type="text" required>
                <label>Nombre de usuario</label>
            </div>
            <div class="contraseña">
                <input name="contraseña" type="passwor" required>
                <label>contraseña</label>
            </div>

            <input type="submit" value="Iniciar">
            <div class="Registrarse">
                Quiero hacer el <a href="registro.php" class="registro">Registrarse</a>
            </div>
        </form>
    </div>

</body>
</html>
