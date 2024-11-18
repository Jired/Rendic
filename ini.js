document.getElementById('registerModal').style.display = 'none';
document.getElementById('loginModal').style.display = 'none';

document.addEventListener('DOMContentLoaded', function() {
    console.log('Página cargada: Ocultando modales');
    document.getElementById('registerModal').style.display = 'none';
    document.getElementById('loginModal').style.display = 'none';
});


/////////////////////////////////////////////////

document.querySelector('.nav-link.register').addEventListener('click', function() {
    document.getElementById('registerModal').style.display = 'block';
});

document.querySelector('.nav-link.login').addEventListener('click', function() {
    document.getElementById('loginModal').style.display = 'block';
});

document.addEventListener('DOMContentLoaded', function() {
    // Asegúrate de que el modal esté oculto cuando se cargue la página
    document.getElementById('registerModal').style.display = 'none';
    document.getElementById('loginModal').style.display = 'none';
});

function openRegisterModal() {
    document.getElementById('registerModal').style.display = 'flex';
}

function openLoginModal() {
    document.getElementById('loginModal').style.display = 'flex';
}

function closeModal() {
    document.getElementById('registerModal').style.display = 'none';
    document.getElementById('loginModal').style.display = 'none';
}

window.onclick = function(event) {
    if (event.target === document.getElementById('registerModal')) {
        closeModal();
    }
    if (event.target === document.getElementById('loginModal')) {
        closeModal();
    }
}
function selectRole(role) {
    selectedRole = role;
    document.getElementById('registerOptions').style.display = 'none';
    document.getElementById('registerForm').style.display = 'block';

    if (role === 'arrendador') {
        document.getElementById('arrendadorFields').style.display = 'block';
        document.getElementById('estudianteFields').style.display = 'none';

        // Marcar los campos de arrendador como requeridos y quitarlo de estudiante
        document.getElementById('nombre').setAttribute('required', 'required');
        document.getElementById('apellidos').setAttribute('required', 'required');
        document.getElementById('fechaNacimiento').setAttribute('required', 'required');
        
        document.getElementById('fechaNacimientoEstudiante').removeAttribute('required');
        document.getElementById('telefonoEstudiante').removeAttribute('required');
        document.getElementById('correoInstitucional').removeAttribute('required');
        document.getElementById('passwordEstudiante').removeAttribute('required');
    } else if (role === 'estudiante') {
        document.getElementById('arrendadorFields').style.display = 'none';
        document.getElementById('estudianteFields').style.display = 'block';

        // Marcar los campos de estudiante como requeridos y quitarlo de arrendador
        document.getElementById('fechaNacimientoEstudiante').setAttribute('required', 'required');
        document.getElementById('telefonoEstudiante').setAttribute('required', 'required');
        document.getElementById('correoInstitucional').setAttribute('required', 'required');
        document.getElementById('passwordEstudiante').setAttribute('required', 'required');

        document.getElementById('nombre').removeAttribute('required');
        document.getElementById('apellidos').removeAttribute('required');
        document.getElementById('fechaNacimiento').removeAttribute('required');
    }
}
