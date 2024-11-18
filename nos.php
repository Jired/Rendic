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
    <link href="css/estilo.css" rel="stylesheet">
</head>
<Body>
    <!-- Barra de info-->
    <?php 
    require "vis/menu.php";
    ?>
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
<!-- Barra de info -->


<!-- Navbar End -->

 <!-- Header Start -->
 <div class="container-fluid" style="background-color: #b81b96;">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 100px">
            <h3 class="display-4 text-white text-uppercase">Nosotros</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="index.html">Inicio</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Nosotros</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->

 <!-- About Start -->
 <div class="container-fluid py-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/rent1.jpeg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Conocenos</h6>
                    <h1 class="mb-3">Rendic: La búsqueda segura y eficaz para encontrar tu hogar.</h1>
                    <p>Rendic es una plataforma digital que nació por la necesidad de los alumnos foráneos de encontrar un hogar    . Proporcionamos opciones de búsqueda segura y eficaces, que brindan a nuestros clientes satisfacción al encontrar su hogar.</p>
                    <a href="#" class="btn btn-primary mt-1"  onclick="openRegisterModal()">Registrate ahora</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Nuestros servicios</h6>
            <h1>Servicios de vivienda</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-white text-center mb-2 py-5 px-4">
                    <i class="fa fa-2x fa-user mx-auto mb-4"></i>
                    <h5 class="mb-2">Arrendatario</h5>
                    <p class="m-0">Para los estudiantes foráneos que estén interesados en encontrar un lugar de hospedaje de manera rápida y segura.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-white text-center mb-2 py-5 px-4">
                    <i class="fa fa-2x fa-user-tie mx-auto mb-4"></i>
                    <h5 class="mb-2">Arrendador</h5>
                    <p class="m-0">A cualquier persona interesada en registrar su casa o apartamento para que sea promocionado en esta plataforma.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="service-item bg-white text-center mb-2 py-5 px-4">
                    <i class="fa fa-2x fa-bullhorn mx-auto mb-4"></i>
                    <h5 class="mb-2">Publicidad</h5>
                    <p class="m-0">Cualquier persona interesada en promocionar su local puede registrarlo para que sea promocionado a través de la página</p>
                </div>
            </div>
        </div>
    </div>
</div>


</Body>