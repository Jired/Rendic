<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <title>RENDIC</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link rel="icon" href="rent.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <link href="css/s.css" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
  <?php 
  require_once "vis/menu.php";
  ?>
                    </div>
            </div>
        </nav>
    </div>
</div>






  <div class="container-fluid" style="background-color: #b81b96;">
                <div class="container">
                    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 100px">
                        <h3 class="display-4 text-white text-uppercase">Detalle Casa</h3>
                        <div class="d-inline-flex text-white">
                            <p class="m-0 text-uppercase"><a class="text-white" href="/Rendic/index.php">Inicio</a></p>
                            <i class="fa fa-angle-double-right pt-1 px-3"></i>
                            <p class="m-0 text-uppercase">Detalle Casa</p>
                        </div>
                    </div>
                </div>
            </div>

            <br><br>
            <div class="container">
  <div class="row">
    <!-- Columna del carrusel -->
    <div class="col-md-7 ms-5">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="casas/Casa1.jpg" class="d-block w-100" alt="Casa 1">
          </div>
          <div class="carousel-item">
            <img src="casas/Casa2.jpeg" class="d-block w-100" alt="Casa 2">
          </div>
          <div class="carousel-item">
            <img src="casas/Casa3.jpeg" class="d-block w-100" alt="Casa 3">
          </div>
        </div>
        <!-- Botón de navegación anterior -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden"></span>
        </button>
        <!-- Botón de navegación siguiente -->
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden"></span>
        </button>
      </div>
    </div>

    <!-- Columna de la descripción -->
    <div class="col-md-5">
      <div class="descripcion-casa">
                <?php
                    require_once "help/conexion.php";
                    $conexion = new conexion();
                    $conn = $conexion->enlace;
                ?>
        <h3>Detalles</h3>
        <?php
        require_once "help/conexion.php";
        $conexion = new conexion();
        $conn = $conexion->enlace;
        $id_propiedad = isset($_GET['id']) ? intval($_GET['id']) : 0;

       if ($id_propiedad > 0) {
            $sql = "SELECT tipo, direccion, descripcion, precio, max_personas, servicios, estado_disponibilidad 
                    FROM propiedades WHERE id_propiedad = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $id_propiedad);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <p><strong>Tipo:</strong> <?php echo $row['tipo']; ?></p>
                    <p><strong>Dirección:</strong> <?php echo $row['direccion']; ?></p>
                    <p><strong>Descripción:</strong> <?php echo $row['descripcion']; ?></p>
                    <p><strong>Precio:</strong> $<?php echo number_format($row['precio'], 2); ?></p>
                    <p><strong>Máx. Personas:</strong> <?php echo $row['max_personas']; ?></p>
                    <p><strong>Servicios:</strong> <?php echo $row['servicios']; ?></p>
                    <p><strong>Disponibilidad:</strong> <?php echo $row['estado_disponibilidad'] ? 'Disponible' : 'No disponible'; ?></p>
                    <?php
                }
            } else {
                echo "<p>No se encontraron datos para esta propiedad.</p>";
            }

            $stmt->close();
        } else {
            echo "<p>ID de propiedad no válido.</p>";
        }

        $conn->close();
    ?>
      </div>
     
    </div>
  </div>
  
</div>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var myCarousel = new bootstrap.Carousel(document.getElementById('carouselExampleCaptions'), {
      interval: 3000, // Cambia de imagen cada 3 segundos
      wrap: true // Hace que el carrusel vuelva al inicio cuando termina
    });
  });
</script>
<style>
/* Ajusta el tamaño del carrusel */
.carousel-inner img {
  height: 400px; /* Cambia el valor según el tamaño deseado */
  object-fit: cover;
}

.descripcion-casa {
  padding-left: 20px; /* Separación de la descripción con respecto al carrusel */
}
</style>
 <title>Simple Click Events</title>
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
          // 3 seconds after the center of the map has changed, pan back to the
          // marker.
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
      #map {
        height: 100%;
      }
      html,
      body {
        height: 80%;
        margin: 20;
        padding: 20;
      }
    </style>


<br>
<div id="map"></div>

<script
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBCnAKSioz1Foa14cDyPhTRgp8roibSp4c&callback=initMap&v=weekly&solution_channel=GMP_CCS_simpleclickevents_v2"
  defer
></script>


<main>
                <section class="actions">
                    <h2>Sugerencias</h2>
                </section>

                <?php
                    require_once "help/conexion.php";
                    $conexion = new conexion();
                    $conn = $conexion->enlace;
                ?>
                <!-- Sección de propiedades -->
                <section class="properties">
                    
                    <div id="properties-list">
                    <?php


                $sql = "SELECT id_propiedad, id_arrendador, tipo, direccion, descripcion, precio, estado_disponibilidad, fecha_registro FROM propiedades";
                $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Salida de cada fila
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <a href="detalleCasa.php?id=<?php echo $row['id_propiedad']; ?>" style="text-decoration: none; color: inherit;">
                            <div class="property-item">

                                <div class="property-images">
                                    <!-- Reemplaza 'casas/Casa6.jpeg' y 'casas/Interior2.jpg' con las imágenes correspondientes -->
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
                            <?php
                        }
                    } else {
                        echo "No hay propiedades disponibles.";
                    }

                    $conn->close();
                    ?>

                    </div>
                </section>

            </main>

      
</body>
</html>