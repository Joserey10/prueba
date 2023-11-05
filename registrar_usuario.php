<?php
// Conexión a la base de datos
$conexion = new mysqli("localhost", "usuario", "contraseña", "nombre_de_tu_base_de_datos");

if ($conexion->connect_error) {
    die("Error en la conexión a la base de datos: " . $conexion->connect_error);
}

// Recuperar datos del formulario
$usuario = $_POST['usuario'];
$contrasena = md5($_POST['contrasena']); // Encriptar la contraseña con MD5

// Insertar el nuevo usuario en la base de datos
$sql = "INSERT INTO usuarios (usuario, contrasena) VALUES ('$usuario', '$contrasena')";

if ($conexion->query($sql) === TRUE) {
    echo "Usuario registrado correctamente. <a href='login.php'>Iniciar sesión</a>";
} else {
    echo "Error al registrar el usuario: " . $conexion->error;
}

$conexion->close();
?>
