<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "usuario", "contraseña", "nombre_de_tu_base_de_datos");

if ($conexion->connect_error) {
    die("Error en la conexión a la base de datos: " . $conexion->connect_error);
}

// Recuperar datos del formulario
$usuario = $_POST['usuario'];
$contrasena = md5($_POST['contrasena']); // Encriptar la contraseña con MD5

// Consulta SQL para verificar el usuario y la contraseña
$sql = "SELECT * FROM usuarios WHERE usuario='$usuario' AND contrasena='$contrasena'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    // Inicio de sesión exitoso
    session_start();
    $_SESSION['usuario'] = $usuario;
    header("Location: panel_de_control.php"); // Redirigir a la página del panel de control
} else {
    // Credenciales incorrectas
    echo "Usuario o contraseña incorrectos. <a href='login.php'>Intentar de nuevo</a>";
}

$conexion->close();
?>