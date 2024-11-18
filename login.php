<?php
require 'help/conexion.php';
session_start();

// Crear una instancia de la conexión
$conexion = new conexion();
$conn = $conexion->enlace;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = $_POST['existingEmail'];
    $password = $_POST['existingPassword'];

    // Consultar el rol del usuario usando el correo en la tabla `usuarios`
    $stmt = $conn->prepare("SELECT id_arrendador, id_estudiante, id_administrador FROM usuarios WHERE id_arrendador IS NOT NULL OR id_estudiante IS NOT NULL OR id_administrador IS NOT NULL");
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        
        if ($row['id_arrendador'] != null) {
            // Verificar la contraseña en la tabla 'arrendadores'
            $stmt_arrendador = $conn->prepare("SELECT contraseña FROM arrendadores WHERE id_arrendador = ?");
            $stmt_arrendador->bind_param("i", $row['id_arrendador']);
            $stmt_arrendador->execute();
            $result_arrendador = $stmt_arrendador->get_result();

            if ($result_arrendador->num_rows > 0) {
                $arrendador = $result_arrendador->fetch_assoc();
                if ($password === $arrendador['contraseña']) {
                    $_SESSION['id_arrendador'] = $row['id_arrendador'];
                    header('Location: arrendador.php');
                    exit();
                } else {
                    echo "Contraseña incorrecta para arrendador.";
                }
            } else {
                echo "No se encontró el arrendador.";
            }
            $stmt_arrendador->close();

        } elseif ($row['id_estudiante'] != null) {
            // Verificar la contraseña en la tabla 'estudiantes'
            $stmt_estudiante = $conn->prepare("SELECT contraseña FROM estudiantes WHERE id_estudiante = ?");
            $stmt_estudiante->bind_param("i", $row['id_estudiante']);
            $stmt_estudiante->execute();
            $result_estudiante = $stmt_estudiante->get_result();

            if ($result_estudiante->num_rows > 0) {
                $estudiante = $result_estudiante->fetch_assoc();
                if ($password === $estudiante['contraseña']) {
                    header('Location: estudiante.php');
                    exit();
                } else {
                    echo "Contraseña incorrecta para estudiante.";
                }
            } else {
                echo "No se encontró el estudiante.";
            }
            $stmt_estudiante->close();

        } elseif ($row['id_administrador'] != null) {
            // Verificar la contraseña en la tabla 'administradores'
            $stmt_administrador = $conn->prepare("SELECT contraseña FROM administradores WHERE id_administrador = ?");
            $stmt_administrador->bind_param("i", $row['id_administrador']);
            $stmt_administrador->execute();
            $result_administrador = $stmt_administrador->get_result();

            if ($result_administrador->num_rows > 0) {
                $administrador = $result_administrador->fetch_assoc();
                if ($password === $administrador['contraseña']) {
                    header('Location: administrador.html');
                    exit();
                } else {
                    echo "Contraseña incorrecta para administrador.";
                }
            } else {
                echo "No se encontró el administrador.";
            }
            $stmt_administrador->close();
        } else {
            echo "Rol desconocido.";
        }
    } else {
        echo "No se encontró el usuario.";
    }

    $stmt->close();
    // El cierre de la conexión será manejado automáticamente por el destructor
}
?>
