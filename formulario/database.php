<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "EncuestaDB";

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];

// Preparar y vincular
$stmt = $conn->prepare("INSERT INTO Encuesta (nombre, apellido, telefono, email) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nombre, $apellido, $telefono, $email);

// Ejecutar la consulta
if ($stmt->execute()) {
    echo "Datos guardados correctamente";
} else {
    echo "Error: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>
