<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$first = $_POST['first'];
$last = $_POST['last'];
$cedula = $_POST['cedula'];
$correo = $_POST['correo'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Encriptar la contraseña

// Preparar y ejecutar la consulta SQL
$sql = "INSERT INTO usuarios (first, last, cedula, correo, password) VALUES ('$first', '$last', '$cedula', '$correo', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>