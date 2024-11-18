<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendic</title>
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="../css/s.css">
    <link rel="stylesheet" href="../ini.css">
    <script src="index.js" defer></script>
    <link rel="icon" href="../rent.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">
</head>
<body>
<?php  require "menu.php";?>
                    <a href="#" class="nav-item nav-link" onclick="openRegisterModal()">Regístrate</a>
                    <a href="#" class="nav-item nav-link" onclick="openLoginModal()">Iniciar sesión</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"></a>
                        <div class="dropdown-menu border-0 rounded-0 m-0">
                            <a href="single.html" class="dropdown-item">Casas</a>
                            <a href="destination.html" class="dropdown-item">Apartamentos</a>
                            <a href="guide.html" class="dropdown-item">Locales</a>
                            <a href="testimonial.html" class="dropdown-item">Restaurantes</a>
                            <a href="blog.html" class="dropdown-item">Otros</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link"></a>
                </div>
            </div>
        </nav>
    </div>
</div>


<div class="container-fluid" style="background-color: #b81b96;">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 100px">
            <h3 class="display-4 text-white text-uppercase">Publicidad</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="/Rendic/index.html">Inicio</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Publicidad</p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">para ti</h6>
                <h1 class="mb-3">Recomendaciones</h1>
               
                <?php
require_once "../help/conexion.php";
$conexion = new conexion();
$conn = $conexion->enlace;

// Realiza la consulta a la base de datos
$query = "SELECT nombre_negocio, descripcion, direccion, telefono, hora_apertura, hora_cierre FROM publicidad";
$result = $conn->query($query);
?>

<div class="container">
    <div class="row">
        <?php
        // Verifica si hay resultados
        if ($result->num_rows > 0) {
            // Recorre cada fila del resultado
            while ($row = $result->fetch_assoc()) {
                $nombre_negocio = $row['nombre_negocio'];
                $descripcion = $row['descripcion'];
                $direccion = $row['direccion'];
                $telefono = $row['telefono'];
                $hora_apertura = $row['hora_apertura'];
                $hora_cierre = $row['hora_cierre'];

                // Genera el HTML para cada tarjeta
                echo '
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="../casas/Anuncio.jpg" alt="' . $nombre_negocio . '">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <a class="h5 m-0 text-decoration-none">
                                    <i class="fa fa-2x fa-bullhorn mx-auto text-primary mr-2"></i> ' . $nombre_negocio . '
                                </a>
                            </div>
                            <p>' . $descripcion . '</p>
                            <p><strong>Dirección:</strong> ' . $direccion . '</p>
                            <p><strong>Teléfono:</strong> ' . $telefono . '</p>
                            <p><strong>Horario:</strong> ' . $hora_apertura . ' - ' . $hora_cierre . '</p>
                        </div>
                    </div>
                </div>';
            }
        } else {
            echo '<p>No hay publicidades disponibles.</p>';
        }
        ?>
    </div>
</div>

</div>

    </div>
</body>
</html>