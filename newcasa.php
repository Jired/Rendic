<?php
session_start();

// Verificar que el usuario esté autenticado y tenga el rol de arrendador

// Obtener el ID del arrendador desde la sesión
$id_arrendador = $_SESSION['id_arrendador'];

// Obtener los datos del formulario
$tipo = $_POST["tipo"];
$direccion = $_POST["direccion"];
$descripcion = $_POST["descripcion"];
$precio = $_POST["precio"];
$max_personas = $_POST["max_personas"];
$servicios = $_POST["servicios"];

// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root"; // Cambia esto por tu usuario de la base de datos
$password = ""; // Cambia esto por tu contraseña de la base de datos
$dbname = "rendic"; // Cambia esto por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Preparar y ejecutar la consulta
$stmt = $conn->prepare("INSERT INTO propiedades (id_arrendador, tipo, direccion, descripcion, precio, max_personas, servicios, estado_disponibilidad, fecha_registro) VALUES (?, ?, ?, ?, ?, ?, ?, 1, NOW())");

// Cambiamos la cadena de tipos y las variables de enlace para que coincidan
$stmt->bind_param("isssdss", $id_arrendador, $tipo, $direccion, $descripcion, $precio, $max_personas, $servicios);

if ($stmt->execute()) {
    echo "Casa agregada con éxito";
    header('Location: arrendador.php');
} else {
    echo "Error al agregar la casa: " . $stmt->error;
}

// Cerrar la conexión
$stmt->close();
$conn->close();
?>

