<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'help/conexion.php';

// Crear una instancia de la conexión
$conexion = new Conexion();
$conn = $conexion->enlace;

$response = ['success' => false, 'message' => 'Error al registrar'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $fechaRegistro = date("Y-m-d H:i:s");

    if (isset($_POST['fechaNacimiento'])) {
        // Datos para arrendador
        $telefono = $_POST['telefono'];
        $correo = $_POST['correo'];
        $direccion = $_POST['direccion'];
        $estatus = 1; // Activo
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO arrendadores (nombre, apellido, correo, telefono, direccion, fecha_registro, estatus, contraseña) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssis", $nombre, $apellidos, $correo, $telefono, $direccion, $fechaRegistro, $estatus, $password);

        if ($stmt->execute()) {
            $idArrendador = $stmt->insert_id;
            
            $stmtUsuario = $conn->prepare("INSERT INTO usuarios (id_arrendador) VALUES (?)");
            $stmtUsuario->bind_param("i", $idArrendador);

            $stmtUsuario->execute();
            
            $response = ['success' => true, 'message' => '¡Registro exitoso como arrendador!'];
        } else {
            $response = ['success' => false, 'message' => 'Error al registrar arrendador: ' . $stmt->error];
        }
        
    } elseif (isset($_POST['fechaNacimientoEstudiante'])) {
        // Datos para estudiante
        $telefono = $_POST['telefonoEstudiante'];
        $correoInstitucional = $_POST['correoInstitucional'];
        $correoPersonal = $_POST['correoPersonal'];
        $credencialPrevia = $_POST['credencialPrevia'];
        $institucionPrevia = $_POST['institucionPrevia'];
        $verificado = 1; // No verificado
        $password = password_hash($_POST['passwordEstudiante'], PASSWORD_DEFAULT);

        $stmt = $conn->prepare("INSERT INTO estudiantes (nombre, apellido, correo_institucional, correo_personal, telefono, credencial_previa, institucion_previa, verificado, fecha_registro, contraseña) 
                                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssis", $nombre, $apellidos, $correoInstitucional, $correoPersonal, $telefono, $credencialPrevia, $institucionPrevia, $verificado, $fechaRegistro, $password);

        if ($stmt->execute()) {
            $idEstudiante = $stmt->insert_id;
            
            $stmtUsuario = $conn->prepare("INSERT INTO usuarios (id_estudiante) VALUES (?)");
            $stmtUsuario->bind_param("i", $idEstudiante);

            $stmtUsuario->execute();
            
            $response = ['success' => true, 'message' => '¡Registro exitoso como estudiante!'];
        } else {
            $response = ['success' => false, 'message' => 'Error al registrar estudiante: ' . $stmt->error];
        }
    }

    echo json_encode($response);
    $stmt->close();
    $conn->close();
}
?>
