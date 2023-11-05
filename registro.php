<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
</head>
<body>
    <h2>Registrarse</h2>
    <form action="registrar_usuario.php" method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" required><br>
        <label for="contrasena">Contraseña:</label>
        <input type="password" id="contrasena" name="contrasena" required><br>
        <input type="submit" value="Registrar">
    </form>
    <p>¿Ya tienes una cuenta? <a href="login.php">Iniciar sesión</a></p>
</body>
</html>
