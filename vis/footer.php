<div  id="loginModal" class="m">
        <div class="m-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Iniciar Sesión</h2>
            <form>
                <input type="email" placeholder="Correo Electrónico" required>
                <input type="password" placeholder="Contraseña" required>
                <br>
                <button type="submit">Ingresar</button>
            </form>
        </div>
    </div>

  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-white-50 py-5 px-sm-3 px-lg-5" style="margin-top: 90px;">
    <div class="row pt-5">
        <div class="col-lg-3 col-md-6 mb-5">
            <a href="" class="navbar-brand">
                <h1 class="text-white">RENDIC</h1>
            </a>
            <p>La búsqueda mas segura y eficaz para encontrar tu hogar</p>
            <h6 class="text-white text-uppercase mt-4 mb-3" style="letter-spacing: 5px;">Más Información</h6>
            <div class="d-flex justify-content-start">
                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-primary btn-square mr-2" href="#"><i class="fab fa-youtube"></i></a>
                <a class="btn btn-outline-primary btn-square" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Nuestros servicios</h5>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white-50 mb-2" href="nos.html"><i class="fa fa-angle-right mr-2"></i>Nosotros</a>
                <a class="text-white-50 mb-2" href="#" onclick="openRegisterModal()"><i class="fa fa-angle-right mr-2"></i>Regístrate</a>
                <a class="text-white-50 mb-2" href="#" onclick="openLoginModal()"><i class="fa fa-angle-right mr-2"></i>Iniciar sesión</a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-5">
            <h5 class="text-white text-uppercase mb-4" style="letter-spacing: 5px;">Contantanos</h5>
            <p><i class="fa fa-map-marker-alt mr-2"></i>Huetamo, Michoacan</p>
            <p><i class="fa fa-phone-alt mr-2"></i>+52 435 115 2953</p>
            <p><i class="fa fa-envelope mr-2"></i>info.RENDIC@gmail.com</p>
           
        </div>
    </div>
</div>
<script src="index.js" defer></script>
<span class="close" onclick="closeModal()">&times;</span>