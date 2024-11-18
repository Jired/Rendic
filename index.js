// Funciones existentes
function openRegisterModal() {
    document.getElementById('registerModal').style.display = 'block';
    document.getElementById('registerOptions').style.display = 'block';
    document.getElementById('registerForm').style.display = 'none';
}

function openLoginModal() {
    document.getElementById('loginModal').style.display = 'block';
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
    const registerOptions = document.getElementById("registerOptions");
    const registerForm = document.getElementById("registerForm");
    const roleInput = document.getElementById("role");
    const arrendadorFields = document.getElementById("arrendadorFields");
    const estudianteFields = document.getElementById("estudianteFields");
    const nombreArrendador = document.getElementById("nombre");
    const apellidosArrendador = document.getElementById("apellidos");
    const nombreEstudiante = document.getElementById("nombreEstudiante");
    const apellidosEstudiante = document.getElementById("apellidosEstudiante");
    const registrationForm = document.getElementById("registrationForm");

    if (registerOptions && registerForm && roleInput && arrendadorFields && estudianteFields) {
        registerOptions.style.display = "none";
        registerForm.style.display = "block";
        roleInput.value = role;

        if (role === "arrendador") {
            arrendadorFields.style.display = "block";
            estudianteFields.style.display = "none";

            // Hacer que los campos requeridos de arrendador tengan el atributo required
            if (nombreArrendador) nombreArrendador.required = true;
            if (apellidosArrendador) apellidosArrendador.required = true;

            // Remover el atributo required de los campos de estudiante
            if (nombreEstudiante) nombreEstudiante.required = false;
            if (apellidosEstudiante) apellidosEstudiante.required = false;

           // registrationForm.action = "arrendador.php";
        } else if (role === "estudiante") {
            estudianteFields.style.display = "block";
            arrendadorFields.style.display = "none";

            // Hacer que los campos requeridos de estudiante tengan el atributo required
            if (nombreEstudiante) nombreEstudiante.required = true;
            if (apellidosEstudiante) apellidosEstudiante.required = true;

            // Remover el atributo required de los campos de arrendador
            if (nombreArrendador) nombreArrendador.required = false;
            if (apellidosArrendador) apellidosArrendador.required = false;

           // registrationForm.action = "estudiante.php";
        }

        // Crear el objeto FormData para enviar el formulario a través de AJAX
        const formData = new FormData(registerForm);

        // Hacer la solicitud AJAX
        const xhr = new XMLHttpRequest();
        xhr.open("POST", registrationForm.action, true);
        xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                // Analizar la respuesta JSON
                const response = JSON.parse(xhr.responseText);

                // Mostrar el mensaje de éxito si el registro fue exitoso
                const successMessage = document.createElement("div");
                successMessage.textContent = response.message;
                successMessage.style.padding = "15px";
                successMessage.style.backgroundColor = "#4CAF50";
                successMessage.style.color = "white";
                successMessage.style.marginBottom = "10px";
                successMessage.style.fontSize = "16px";
                successMessage.style.fontWeight = "bold";
                successMessage.style.textAlign = "center";
                successMessage.style.borderRadius = "5px";

                // Mostrar el mensaje en la parte superior del formulario
                registerForm.insertBefore(successMessage, registerForm.firstChild);

                // Solo redirigir si el registro fue exitoso
                if (response.success) {
                    // Redirigir después de mostrar el mensaje
                    setTimeout(function() {
                        window.location.href = registrationForm.action;
                    }, 2000); // Esperar 2 segundos antes de redirigir
                } else {
                    // Mostrar el mensaje de error si el registro no fue exitoso
                    const errorMessage = document.createElement("div");
                    errorMessage.textContent = response.message;
                    errorMessage.style.padding = "15px";
                    errorMessage.style.backgroundColor = "#F44336";
                    errorMessage.style.color = "white";
                    errorMessage.style.marginBottom = "10px";
                    errorMessage.style.fontSize = "16px";
                    errorMessage.style.fontWeight = "bold";
                    errorMessage.style.textAlign = "center";
                    errorMessage.style.borderRadius = "5px";
                    
                    registerForm.insertBefore(errorMessage, registerForm.firstChild);
                }
            }
        };

    }
}






// Nueva funcionalidad para la vista de estudiantes

// Manejo de la selección de ubicación
function searchLocation() {
    const locationInput = document.getElementById('locationInput').value;
    
    // Aquí puedes agregar la lógica para filtrar las propiedades basadas en la ubicación
    // Por ahora, simplemente mostraremos un mensaje en la consola
    console.log(`Buscando propiedades en: ${locationInput}`);
}

// Función para "me gusta" en las propiedades
function toggleLike(button) {
    // Alterna la clase para el icono de "me gusta"
    button.classList.toggle('liked');
}

// Simulación de datos de propiedades (esto puede ser reemplazado por una llamada a una API)
const properties = [
    {
        id: 1,
        name: 'Cutzeo, Huetamo',
        distance: '1.5 km',
        price: '$2,000',
        image: 'ruta/a/la/imagen1.jpg'
    },
    {
        id: 2,
        name: 'Cahuaro, Huetamo',
        distance: '2 km',
        price: '$1,000',
        image: 'ruta/a/la/imagen2.jpg'
    },
    {
        id: 3,
        name: 'Restaurant "Mexicano"',
        distance: '8 km',
        price: 'Abierto ahora',
        image: 'ruta/a/la/imagen3.jpg',
        isAd: true
    },
    {
        id: 4,
        name: 'Centro, Huetamo',
        distance: '12 km',
        price: '$1,500',
        image: 'ruta/a/la/imagen4.jpg'
    }
];

// Función para renderizar las propiedades en la vista de estudiantes
function renderProperties() {
    const suggestionsContainer = document.getElementById('suggestionsContainer');
 //   suggestionsContainer.innerHTML = '';

    properties.forEach(property => {
        const propertyCard = document.createElement('div');
        propertyCard.className = 'property-card';
        if (property.isAd) {
            propertyCard.classList.add('ad');
        }

        propertyCard.innerHTML = `
            <img src="${property.image}" alt="${property.name}">
            <div class="property-info">
                <h3>${property.name}</h3>
                <p>A ${property.distance} de distancia</p>
                <p>${property.price} mensualmente</p>
            </div>
            <button class="like-btn" onclick="toggleLike(this)">❤</button>
        `;

        suggestionsContainer.appendChild(propertyCard);
    });
}

// Llamar a la función para renderizar las propiedades cuando la página esté lista
document.addEventListener('DOMContentLoaded', renderProperties);

function openCasaModal() {
    document.getElementById("registerCasaModal").style.display = "block";
}


