<!DOCTYPE html>
<html lang="es">
<head>
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
</head>

<body>
    <?php require "vis/menu.php"; ?>
                </div>
            </div>
        </nav>
    </div>
</div>

    <!-- Banner -->
    <div class="container-fluid" style="background-color: #b81b96;">
        <div class="container">
            <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 100px">
                <h3 class="display-4 text-white text-uppercase">Estudiante</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="index.html">Inicio</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Estudiante</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección del mapa -->
    <script>
      function initMap() {
          const myLatlng = { lat: 18.6293, lng: -100.8968 };
          const map = new google.maps.Map(document.getElementById("map"), {
              zoom: 14,
              center: myLatlng,
              mapTypeId: "hybrid"
          });
          const marker = new google.maps.Marker({
              position: myLatlng,
              map,
              title: "Click to zoom",
          });

          map.addListener("center_changed", () => {
              window.setTimeout(() => {
                  map.panTo(marker.getPosition());
              }, 3000);
          });
          marker.addListener("click", () => {
              map.setZoom(8);
              map.setCenter(marker.getPosition());
          });
      }

      window.initMap = initMap;
    </script>
    <style>
      #map { height: 100%; }
      html, body { height: 80%; margin: 0; padding: 0; }
    </style>

    <div id="map"></div>
    <script src="https://maps.googleapis.com/maps/api/js?key=API_KEY&callback=initMap&v=weekly&solution_channel=GMP_CCS_simpleclickevents_v2" defer></script>
    <!-- Fin del mapa -->

   
    <main>
        <!-- Sección de sugerencias -->
        <section class="actions">
            <h2>Sugerencias</h2>
        </section>

        <!-- Conexión a la base de datos -->
        <?php
            require_once "help/conexion.php";
            $conexion = new conexion();
            $conn = $conexion->enlace;
        ?>

        <!-- Sección de propiedades -->
        <section class="properties">
            <h2>Casas y Departamentos en Renta</h2>
            <div id="properties-list">
                <?php
                // Consulta para obtener propiedades en renta
                $sql = "SELECT id_propiedad, id_arrendador, tipo, direccion, descripcion, precio, estado_disponibilidad, fecha_registro FROM propiedades";
                $result = $conn->query($sql);

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
                                </div>
                                <button class="heart-button" onclick="showModal()"><i class="fa fa-heart"></i></button>
                            </div>
                        </a>
                        <?php
                    }
                } else {
                    echo "<p>No hay propiedades disponibles.</p>";
                }

                // Cerrar la conexión
                $conn->close();
                ?>
            </div>
        </section>
    </main>

    <!-- Ventanas emergentes para favoritos y detalles del arrendador -->
    <div id="modal" class="modal">
        <div class="modal-content">
            <h3>¿Deseas agregar esta propiedad a tus favoritos?</h3>
            <button onclick="confirmRental()">Sí</button>
            <button onclick="closeModal()">No</button>
        </div>
    </div>

    <script>
        function showModal() {
            document.getElementById('modal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }

        function confirmRental() {
            document.getElementById('modal').style.display = 'none';
            // Código adicional para confirmar el alquiler o agregar a favoritos
        }
    </script>
</body>
</html>