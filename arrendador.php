<?php
    session_start(); ?>
<!DOCTYPE html>
<html lang="es">
    <head>
    <script>
       closeModal();
    </script>
        <meta charset="utf-8">
        <title>RENDIC</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
    
        <link rel="icon" href="rent.png" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
        <link href="css/s.css" rel="stylesheet">
        <link rel="stylesheet" href="css/estilo.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Arrendador</title>
        <link rel="stylesheet" href="css/estilo.css">
        <html>
    </head>
    <body>
    <?php 
            require "vis/menu.php";
        ?>
                    </div>
            </div>
        </nav>
    </div>
</div>
    <!-- Navbar End -->
    
     <!-- Header Start -->
     <div class="container-fluid" style="background-color: #b81b96;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 100px">
                <h3 class="display-4 text-white text-uppercase">Arrendador</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.php">Inicio</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Arrendador</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
     <!--
    <header>
        <div class="header-content">
            <h1>Bienvenido, <span id="arrendador-nombre">Nombre del Arrendador</span></h1>
        </div>
    </header>
    -->
    <main>
    <!-- Sección de sugerencias -->
    <section class="actions">
        <button id="añadir-casa-btn">Agregar Nueva Casa</button>
    </section>

    <!-- Conexión a la base de datos -->
    <?php
    if (!isset($_SESSION['id_arrendador'])) {
        echo "No has iniciado sesión como arrendador. Inicia sesión primero.";
        exit; // Termina el script si no se encuentra el id_arrendador
    }
    
        require_once "help/conexion.php";
      
        // Obtener el id_arrendador desde la sesión
        $id_arrendador = $_SESSION['id_arrendador'];
        
        $conexion = new conexion();
        $conn = $conexion->enlace;
    ?>

    <!-- Sección de propiedades -->
    <section class="properties">
        <h2>Mis Casas y Departamentos en Renta</h2>
        <div id="properties-list">
            <?php
           
            // Consulta para obtener propiedades del arrendador registrado
            $sql = "SELECT id_propiedad, tipo, direccion, descripcion, precio, estado_disponibilidad FROM propiedades WHERE id_arrendador = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $id_arrendador); // Vincula el parámetro $id_arrendador
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // Iterar y mostrar cada propiedad
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <a href="detalleCasa.php?id=<?php echo $row['id_propiedad']; ?>" style="text-decoration: none; color: inherit;">
                        <div class="property-item">
                            <div class="property-images">
                                <!-- Reemplaza con las rutas de las imágenes reales de las propiedades -->
                                <img src="casas/Casa6.jpeg" alt="<?php echo $row['tipo']; ?>">
                                <img src="casas/Interior2.jpg" alt="Interior <?php echo $row['tipo']; ?>">
                            </div>
                            <div class="property-info">
                                <h3><?php echo $row['tipo']; ?></h3>
                                <p><strong>Dirección:</strong> <?php echo $row['direccion']; ?></p>
                                <p><strong>Descripción:</strong> <?php echo $row['descripcion']; ?></p>
                                <p><strong>Precio:</strong> $<?php echo number_format($row['precio'], 2); ?></p>
                                <p><strong>Estado:</strong> <?php echo $row['estado_disponibilidad']; ?></p>
                            </div>
                        </div>
                    </a>
                    <?php
                }
            } else {
                echo "<p>No tienes propiedades en renta.</p>";
            }

            // Cerrar la conexión
            $stmt->close();
            $conn->close();
            ?>
        </div>
    </section>
</main>

    



    <script>
        document.getElementById('añadir-casa-btn').addEventListener('click', function() {
            // Redirigir a la página del nuevo formulario
        window.location.href = 'newCasa.html'; // Cambia 'nuevoFormulario.html' al nombre de tu archivo de formulario
        });
    </script>
    <script src="index.js"></script>

</body>
</html>