<?php 
require_once "help/conexion.php";
$conexion = new conexion();
$conn = $conexion->enlace;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <script>
       closeModal();
    </script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rendic</title>
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/s.css">
    <link rel="stylesheet" href="ini.css">
    <script src="index.js" defer></script>

    <!-- Favicon -->
    <link rel="icon" href="rent.png" type="image/x-icon">
    
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet">

    <link href="css/estilo.css" rel="stylesheet">
</head>
<body>
<?php 
require "vis/menu.php";?>
                    <a href="#" class="nav-item nav-link" onclick="openRegisterModal()">Regístrate</a>
                    <a href="#" class="nav-item nav-link" onclick="openLoginModal()">Iniciar sesión</a>
                    <a href="contact.html" class="nav-item nav-link"></a>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Navbar End -->
<div class="container-fluid" style="background-color: #b81b96;">
    <div class="container">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 100px">
            <h3 class="display-4 text-white text-uppercase">Encuentra tu hogar</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="index.html"></a></p>
               
                <p class="m-0 text-uppercase"></p>
            </div>
        </div>
    </div>
</div>
 <nav>
    <p></p>
    <p></p>
 
 </nav>

     <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">para ti</h6>
                <h1 class="mb-3">Recomendaciones</h1>
               
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="casas/Casa1.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Purechucho, 61970 Mich.</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>3 persona</small>
                            </div>
                            <a class="h5 text-decoration-none"  href="inicio.html">Casa con hermoso patio con 3 habitaciones y todos los servicios</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$1,500</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="casas/Casa5.jpeg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Loma Linda, 61970 Mich.</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none" href="inicio.html">Deartamento con valcon y sala de estar y todos los servicios</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$2,500</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="casas/Casa2.jpeg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>La Escondida, 61940 Mich.</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>4 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none"  href="inicio.html">casa con 4 habitaciones en buen estado</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>2.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$1,000</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="casas/Anuncio.jpg" >
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <a class=" h5 m-0 text-decoration-none" ><i class="fa fa-2x fa-bullhorn mx-auto text-primary mr-2 "></i> Publicidad</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="casas/Casa3.jpeg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Cutzeo, 61970 Mich.</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>1 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none"  href="inicio.html">Casa pequeña</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>2.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$700</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="casas/Casa4.jpeg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>El Coco, 61970 Mich.</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none"  href="inicio.html">Departamento con sala de estar y comedor, cuenta con todos los servicios incluidos</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$1,5000</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="casas/Casa6.jpeg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Pirinda, 61940 Mich.</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>1 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none"  href="inicio.html">Departamento</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$3,500</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="casas/Casa1.jpg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Purechucho, 61970 Mich.</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>3 persona</small>
                            </div>
                            <a class="h5 text-decoration-none"  href="inicio.html">Casa con hermoso patio con 3 habitaciones y todos los servicios</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$1,500</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="casas/Casa5.jpeg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Loma Linda, 61970 Mich.</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none"  href="inicio.html">DePartamento con valcon y sala de estar y todos los servicios</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$2,500</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="casas/Casa2.jpeg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>La Escondida, 61940 Mich.</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>4 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none"  href="inicio.html">casa con 4 habitaciones en buen estado</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>2.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$1,000</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="casas/Casa3.jpeg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Cutzeo, 61970 Mich.</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>1 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none"  href="inicio.html">Casa pequeña</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>2.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$700</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="casas/Casa4.jpeg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>El Coco, 61970 Mich.</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>2 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none"  href="inicio.html">Departamento con sala de estar y comedor, cuenta con todos los servicios incluidos</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$1,5000</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-fluid" src="casas/Casa6.jpeg" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-map-marker-alt text-primary mr-2"></i>Pirinda, 61940 Mich.</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>1 Personas</small>
                            </div>
                            <a class="h5 text-decoration-none" href="inicio.html">Departamento</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h6 class="m-0"><i class="fa fa-star text-primary mr-2"></i>4.5 <small>(250)</small></h6>
                                    <h5 class="m-0">$3,500</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <!-- Packages End -->

    <!-- Inicio se sesion-->
 
    
 <div id="registerModal" class="m">
    <div class="m-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <div id="registerOptions" class="m-section">
            <h2>Regístrate</h2>
            <button class="role-btn" onclick="selectRole('arrendador')">Soy Arrendador</button>
            <button class="role-btn" onclick="selectRole('estudiante')">Soy Estudiante</button>
        </div>
        <div id="registerForm" class="m-section" style="display: none;">
            <h2>Formulario de Registro</h2>
            <form id="registrationForm" method="POST" action="registro.php">
                <!-- Campo oculto para almacenar el rol seleccionado -->
                <input type="hidden" id="role" name="role" value="">

                <!-- Campos para Arrendador -->
                <div id="arrendadorFields" style="display: none;">
                    <label for="nombre">Nombre:</label><br>
                    <input type="text" id="nombre" name="nombre" required><br>

                    <label for="apellidos">Apellidos:</label><br>
                    <input type="text" id="apellidos" name="apellidos" required><br>

                    <label for="fechaNacimiento">Fecha de Nacimiento:</label><br>
                    <input type="date" id="fechaNacimiento" name="fechaNacimiento"><br><br>

                    <label for="telefono">Número de Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono"><br>

                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" id="correo" name="correo"><br>

                    <label for="direccion">Dirección:</label>
                    <input type="text" id="direccion" name="direccion"><br>

                    <label for="password">Nueva Contraseña:</label>
                    <input type="password" id="password" name="password"><br>
                </div>

                <!-- Campos para Estudiante -->
                <div id="estudianteFields" style="display: none;">
                    <label for="nombreEstudiante">Nombre:</label><br>
                    <input type="text" id="nombreEstudiante" name="nombre"><br>

                    <label for="apellidosEstudiante">Apellidos:</label><br>
                    <input type="text" id="apellidosEstudiante" name="apellidos"><br>

                    <label for="fechaNacimientoEstudiante">Fecha de Nacimiento:</label><br>
                    <input type="date" id="fechaNacimientoEstudiante" name="fechaNacimiento"><br><br>

                    <label for="telefonoEstudiante">Número de Teléfono:</label>
                    <input type="tel" id="telefonoEstudiante" name="telefono"><br>

                    <label for="correoInstitucional">Correo Institucional:</label>
                    <input type="email" id="correoInstitucional" name="correo_institucional"><br>

                    <label for="correoPersonal">Correo Personal:</label>
                    <input type="email" id="correoPersonal" name="correo_personal"><br>

                    <label for="credencialPrevia">Credencial Previa:</label>
                    <input type="text" id="credencialPrevia" name="credencial_previa"><br>

                    <label for="institucionPrevia">Institución Previa:</label>
                    <input type="text" id="institucionPrevia" name="institucion_previa"><br>

                    <label for="passwordEstudiante">Nueva Contraseña:</label>
                    <input type="password" id="passwordEstudiante" name="password"><br>
                </div>

                <!-- Botón de envío -->
                <button type="submit">Registrarse</button>
            </form>
        </div>
    </div>
</div>
<div  id="loginModal" class="m">
    <div class="m-content">
        <span class="close" onclick="closeModal()">&times;</span>
        <form method="POST" action="login.php">
        <h2>Iniciar Sesión</h2>
        <form>
            <input type="email" name="existingEmail" placeholder="Correo Electrónico" required>
            <input type="password" name="existingPassword" placeholder="Contraseña" required>
            <br>
            <button type="submit">Ingresar</button>
        </form>
    </div>
</div>


    <footer class="container-fluid bg-dark text-white-50 py-4">
        <div class="container" style="max-width: 900px;">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <a href="" class="navbar-brand">
                        <h1 class="text-white">RENDIC</h1>
                    </a>
                    <p>La búsqueda más segura y eficaz para encontrar tu hogar</p>
                    <h6 class="text-white text-uppercase mt-3 mb-2" style="letter-spacing: 3px;">Más Información</h6>
                    <div class="d-flex">
                        <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="text-white text-uppercase mb-3" style="letter-spacing: 3px;">Nuestros servicios</h5>
                    <ul class="list-unstyled">
                        <li><a class="text-white-50" href="nos.html"><i class="fa fa-angle-right mr-2"></i>Nosotros</a></li>
                        <li><a class="text-white-50" href="#" onclick="openRegisterModal()"><i class="fa fa-angle-right mr-2"></i>Regístrate</a></li>
                        <li><a class="text-white-50" href="#" onclick="openLoginModal()"><i class="fa fa-angle-right mr-2"></i>Iniciar sesión</a></li>
                    </ul>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5 class="text-white text-uppercase mb-3" style="letter-spacing: 3px;">Contáctanos</h5>
                    <p><i class="fa fa-map-marker-alt mr-2"></i>Huetamo, Michoacán</p>
                    <p><i class="fa fa-phone-alt mr-2"></i>+52 435 115 2953</p>
                    <p><i class="fa fa-envelope mr-2"></i>info.RENDIC@gmail.com</p>
                </div>
            </div>
        </div>
    </footer>
    
    
</div>

</body>
</html>

