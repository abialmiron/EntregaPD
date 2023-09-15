(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        // Check if the password is valid
        if (!validatePassword(form.querySelector('input[name="password"]'))) {
          event.preventDefault()
          event.stopPropagation()
        }

				// Verifica que el usuario sea correcto
				if (!validateUser(form.querySelector('input[name="usuario"]'))) {
					event.preventDefault()
					event.stopPropagation()
				}

        // Check if the other fields are valid
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()

	function validateUser(userInput) {
		// Debe tener al menos 4 caracteres
		if (userInput.value.length < 4) {
			userInput.setCustomValidity("El nombre de usuario debe tener al menos 4 caracteres.")
			return false
		}

		// No debe tener espacios en blanco
		if (userInput.value.indexOf(" ") !== -1) {
			userInput.setCustomValidity("El nombre de usuario no debe tener espacios en blanco.")
			return false
		}

		// No debe tener caracteres especiales
		if (!/^[a-zA-Z0-9]+$/.test(userInput.value)) {
			userInput.setCustomValidity("El nombre de usuario no debe tener caracteres especiales.")
			return false
		}

		// El nombre de usuario es válido
		userInput.setCustomValidity("")
		return true
	}
	

  function validatePassword(passwordInput) {
    // Debe tener al menos 8 caracteres
    if (passwordInput.value.length < 8) {
      passwordInput.setCustomValidity("La contraseña debe tener al menos 8 caracteres.")
      return false
    }
  
    // Deber tener al menos una letra mayúscula
    if (!/[A-Z]+/.test(passwordInput.value)) {
			passwordInput.setCustomValidity("La contraseña debe tener al menos una letra mayúscula.")
      return false
    }
  
    // Debe tener al menos un número
    if (!/[0-9]+/.test(passwordInput.value)) {
      passwordInput.setCustomValidity("La contraseña debe tener al menos un número.")
      return false
    }
  
    // Debe tener al menos un caracter especial
    if (!/[!@#$%^&*()_+-={}|;:,.<>/?`~]/.test(passwordInput.value)) {
      passwordInput.setCustomValidity("La contraseña debe tener al menos un símbolo.")
      return false
    }

		// Debe ser distinta al nombre de usuario
		if (passwordInput.value === document.getElementById("usuario").value) {
			passwordInput.setCustomValidity("La contraseña debe ser distinta al nombre de usuario.")
			return false
		}
  
    // La contraseña es válida
    passwordInput.setCustomValidity("")
    return true
  }











  document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById("sidebar");
    const sidebarToggle = document.getElementById("sidebarToggle");
  
    // Agregar un evento al botón para mostrar/ocultar el sidebar
    sidebarToggle.addEventListener("click", function () {
        sidebar.classList.toggle("d-none");
    });
  });
  
  
  function validarFormulario() {
    var patenteInput = document.getElementById("patente");
    var patente = patenteInput.value.trim();
  
    if (patente === "") {
        // Mostrar error si la patente está vacía
        patenteInput.classList.add("is-invalid");
        return false; // Evitar el envío del formulario
    } else {
        
        patenteInput.classList.remove("is-invalid");
        return true; // Envía el formulario
    }
  }
  
  
  function validarDni() {
    var dniInput = document.getElementById("DNI");
    var dniValue = dniInput.value.trim();
  
    if (dniValue === "" || isNaN(dniValue) || dniValue.length != 8) {
        dniInput.classList.add("is-invalid");
        return false;
    } else {
        dniInput.classList.remove("is-invalid");
        return true;
    }
  }
  
  
  
  //Jquery
  
  $(document).ready(function () {
    $("#form6").submit(function (e) {
        var isValid = true;
        $("#nombre, #apellido, #DNI, #telefono, #fechaNac, #domicilio").each(function () {
            var fieldValue = $(this).val().trim();
            var fieldId = $(this).attr("id");
  
            if (fieldValue === "") {
                $(this).addClass("is-invalid");
                isValid = false;
            } else {
                $(this).removeClass("is-invalid");
  
                // Valida campos específicos.
                if ((fieldId === "nombre" || fieldId === "apellido") && !/^[A-Za-z\s]+$/.test(fieldValue)) {
                    $(this).addClass("is-invalid");
                    isValid = false;
                }
                if ((fieldId === "DNI" ) && !/^[0-9]+$/.test(fieldValue)) {
                    $(this).addClass("is-invalid");
                    isValid = false;
                }
                if ((fieldId === "telefono") && !/^[0-9],-+$/.test(fieldValue)) {
                    $(this).addClass("is-invalid");
                    isValid = false;
                }
                if (fieldId === "fechaNac") {
                    // Validar la fecha de nacimiento
                    var fechaNacDate = new Date(fieldValue);
                    var fechaActual = new Date();
  
                    if (isNaN(fechaNacDate) || fechaNacDate >= fechaActual) {
                        $(this).addClass("is-invalid");
                        isValid = false;
                    }
                }
            }
        });
  
        if (!isValid) {
            e.preventDefault(); // Evitar el envío del formulario si hay errores
        }
    });
  });
  
  //valida auto nuevo
  /*
  document.addEventListener("DOMContentLoaded", function () {
    form.addEventListener("submit", function (e) {
        var isValid = true;
        var patente = form.getElementById("patente");
        var marca = form.getElementById("marca");
        var modelo = form.getElementById("modelo");
        var dni = form.getElementById("DNI");
  
        if (patente.value.trim() === "") {
            patente.classList.add("is-invalid");
            isValid = false;
        } else {
            patente.classList.remove("is-invalid");
        }
  
        if (marca.value.trim() === "") {
            marca.classList.add("is-invalid");
            isValid = false;
        } else {
            marca.classList.remove("is-invalid");
        }
  
        if (modelo.value.trim() === "" || !/^[0-9]+$/.test(modelo.value.trim()))  {
            modelo.classList.add("is-invalid");
            isValid = false;
        } else {
            modelo.classList.remove("is-invalid");
        }
  
        if (dni.value.trim() === "" || !/^[0-9]+$/.test(dni.value.trim())) {
            dni.classList.add("is-invalid");
            isValid = false;
        } else {
            dni.classList.remove("is-invalid");
        }
  
        if (!isValid) {
            e.preventDefault(); // Evitar el envío del formulario si hay errores
        }
    });
  });
  */
  function validarAuto() {
    var isValid = true;
    var patente = document.getElementById("patente");
    var marca = document.getElementById("marca");
    var modelo = document.getElementById("modelo");
    var dni = document.getElementById("DNI");
  
    if (patente.value.trim() === "") {
        patente.classList.add("is-invalid");
        isValid = false;
    } else {
        patente.classList.remove("is-invalid");
    }
  
    if (marca.value.trim() === "") {
        marca.classList.add("is-invalid");
        isValid = false;
    } else {
        marca.classList.remove("is-invalid");
    }
  
    if (modelo.value.trim() === "" || !/^[0-9]+$/.test(modelo.value.trim())) {
        modelo.classList.add("is-invalid");
        isValid = false;
    } else {
        modelo.classList.remove("is-invalid");
    }
  
    if (dni.value.trim() === "" || !/^[0-9]+$/.test(dni.value.trim())) {
        dni.classList.add("is-invalid");
        isValid = false;
    } else {
        dni.classList.remove("is-invalid");
    }
  
    return isValid;
  }
  
  
  
    function validarCambioDuenio() {
        const patenteInput = document.getElementById("patente");
        const dniInput = document.getElementById("DNI");
  
        // Verifica que la patente tenga exactamente 7 caracteres
        if (patenteInput.value.length !== 7) {
            patenteInput.classList.add("is-invalid");
            return false;
        } else {
            patenteInput.classList.remove("is-invalid");
        }
  
        // Verifica que el DNI tenga exactamente 8 caracteres
        if (dniInput.value.length !== 8) {
            dniInput.classList.add("is-invalid");
            return false;
        } else {
            dniInput.classList.remove("is-invalid");
        }
  
        // Si todos los campos son válidos, puedes enviar el formulario
        return true;
    }
  
  
    function validarActualizacion() {
        var isValid = true;
        const nombre = document.getElementById("nombre");
        const apellido = document.getElementById("apellido");
        const fechaNac = document.getElementById("fechaNac");
        const telefono = document.getElementById("telefono");
        const domicilio = document.getElementById("domicilio");
        if (nombre.value.trim() === "" || !/^[A-Za-z\s]+$/.test(nombre.value.trim())) {
            nombre.classList.add("is-invalid");
            isValid = false;
        } else {
            nombre.classList.remove("is-invalid");
        }
    
        if (apellido.value.trim() === "" || !/^[A-Za-z\s]+$/.test(apellido.value.trim())) {
            apellido.classList.add("is-invalid");
            isValid = false;
        } else {
            apellido.classList.remove("is-invalid");
        }
    
        if (telefono.value.trim() === "" || !/^[0-9]+$/.test(telefono.value.trim())) {
            telefono.classList.add("is-invalid"); // Corrección aquí
            isValid = false;
        } else {
            telefono.classList.remove("is-invalid"); // Corrección aquí
        }
        if (domicilio.value.trim() === "") {
            domicilio.classList.add("is-invalid");
            isValid = false;
        } else {
            nombre.classList.remove("is-invalid");
        }
        if (fechaNac.value.trim() === "") {
            fechaNac.classList.add("is-invalid");
            isValid = false;
        } else {
            fechaNac.classList.remove("is-invalid");
            var fechaNacDate = new Date(fechaNac.value.trim());
            var fechaActual = new Date();
    
            if (isNaN(fechaNacDate) || fechaNacDate >= fechaActual) {
                fechaNac.classList.add("is-invalid");
                isValid = false;
            } else {
                fechaNac.classList.remove("is-invalid");
            }
        }
    
        return isValid;
    }
    