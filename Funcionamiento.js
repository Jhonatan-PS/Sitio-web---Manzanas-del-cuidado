document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("Boton_Ir_ahora").addEventListener("click", function() {
      window.location.href = "Donde-encontrarlas.html";
    });
});

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("Boton_Ve_ahora").addEventListener("click", function() {
      window.location.href = "Mapa.html";
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const emailInput = document.getElementById("email");
    const passwordInput = document.getElementById("contrasena_inicio");

    passwordInput.addEventListener("focus", function() {
        if (emailInput.value.indexOf("@") === -1 || emailInput.value.indexOf(".") === -1) {
            alert("¡Este campo debe contener un @ y un punto obligatoriamente!");
            emailInput.focus();
        }
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const contraseña_registroInput = document.getElementById("contrasena_registro");
    const telefonoInput = document.getElementById("telefono");

    telefonoInput.addEventListener("focus", function() {
        if (contraseña_registroInput.value.length < 11) {
            alert("La contraseña debe tener al menos 11 caracteres");
            contraseña_registroInput.focus();
        }
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const telefonoInput = document.getElementById("telefono");
    const emailregistroInput = document.getElementById("email_registro");

    emailregistroInput.addEventListener("focus", function() {
        if (telefonoInput.value.length != 10) {
            alert("El telefono ingresado es incorrecto");
            telefonoInput.focus();
        }
    });
});

// Select para el registro de municipios

var manzanasSelect = document.getElementById('manzanasSelect');

for (var i = 1; i <= 50; i++) {
    var option = document.createElement('option');
    option.value = i;
    option.text = i;
    manzanasSelect.add(option);
}

