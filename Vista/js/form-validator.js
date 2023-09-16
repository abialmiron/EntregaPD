 (function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {

        // Verifica que el password sea correcto
        if (form.querySelector('input[name="password"]'))
        if (!validatePassword(form.querySelector('input[name="password"]'))) {
          event.preventDefault()
          event.stopPropagation()
        }

        // Verifica que el usuario sea correcto
        if (form.querySelector('input[name="usuario"]'))
        if (!validateUser(form.querySelector('input[name="usuario"]'))) {
            event.preventDefault()
            event.stopPropagation()
        }
        
        // Verifica que el titulo sea correcto
        if (form.querySelector('input[name="titulo"]'))
        if (!validateCinemasTitle(form.querySelector('input[name="titulo"]'))) {
            event.preventDefault()
            event.stopPropagation()
        }

        // Verifica que la patente sea válida, debe tener tres letras y tres números sin espacios ni caracteres especiales
        // si existe el campo patente
        if (form.querySelector('input[name="patente"]'))
        if (!validatePatente(form.querySelector('input[name="patente"]'))) {
            event.preventDefault()
            event.stopPropagation()
        }
        if (form.querySelector('input[name="DNI"]'))
        if (!validarDNI(form.querySelector('input[name="DNI"]'))) {
            event.preventDefault()
            event.stopPropagation()
        }

        if (form.querySelector('input[name="nombre"]'))
        if (!validarNombre(form.querySelector('input[name="nombre"]'))) {
            event.preventDefault()
            event.stopPropagation()
        }
        
        if (form.querySelector('input[name="apellido"]'))
        if (!validarApellido(form.querySelector('input[name="apellido"]'))) {
            event.preventDefault()
            event.stopPropagation()
        }
        // Verfica que otros campos sean válidos
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
    
    
     function validatePatente(patenteInput) {
         // Debe tener exactamente 6 caracteres
         if (patenteInput.value.length !== 6) {
             patenteInput.setCustomValidity("La patente debe tener exactamente 6 caracteres.")
             return false
         }

         // Debe tener tres letras y tres números sin espacios ni caracteres especiales en ese orden
         if (!/^[A-Za-z]{3}[0-9]{3}$/.test(patenteInput.value)) {
             patenteInput.setCustomValidity("La patente debe tener tres letras y tres números sin espacios ni caracteres especiales en ese orden.")
             return false
         }

         // La patente es válida
         patenteInput.setCustomValidity("")
         return true
     }

    function validarDNI(DNIInput) {
        // Debe tener exactamente 6 caracteres
        if (isNaN(DNIInput.value) || DNIInput.value.length != 8) {
            DNIInput.setCustomValidity("El DNI debe tener 8 números.")
            return false
        }

        // El DNI es válida
        DNIInput.setCustomValidity("")
        return true
   }

   function validarNombre(NombreInput){
		if (NombreInput.value.trim.length < 1) {
			NombreInput.setCustomValidity("El nombre debe completarse.")
			return false
		}
    // El nombre es válido
    NombreInput.setCustomValidity("")
    return true
   }

   function validarApellido(ApellidoInput){
    if (ApellidoInput.value.trim.length < 1) {
        ApellidoInput.setCustomValidity("El apellido debe completarse.")
        return false
    }
    // El apellido es válido
    ApellidoInput.setCustomValidity("")
    return true
    }




    function validateCinemasTitle(titleInput) {
        // Debe tener al menos 4 caracteres
        if (titleInput.value.length < 4) {
            titleInput.setCustomValidity("El título debe tener al menos 4 caracteres.")
            return false
        }

        // No debe tener espacios en blanco al principio o al final
        if (titleInput.value.trim() !== titleInput.value) {
            titleInput.setCustomValidity("El título no debe tener espacios en blanco al principio o al final.")
            return false
        }

        // No debe tener espacios en blanco consecutivos
        if (titleInput.value.indexOf("  ") !== -1) {
            titleInput.setCustomValidity("El título no debe tener espacios en blanco consecutivos.")
            return false
        }

        // El título es válido
        titleInput.setCustomValidity("")
        return true
    }

    function validateCinemasDescription(descriptionInput) {
        // Debe tener al menos 20 caracteres
        if (descriptionInput.value.length < 20) {
            descriptionInput.setCustomValidity("La descripción debe tener al menos 20 caracteres.")
            return false
        }

        // No debe tener espacios en blanco al principio o al final
        if (descriptionInput.value.trim() !== descriptionInput.value) {
            descriptionInput.setCustomValidity("La descripción no debe tener espacios en blanco al principio o al final.")
            return false
        }

        // No debe tener espacios en blanco consecutivos
        if (descriptionInput.value.indexOf("  ") !== -1) {
            descriptionInput.setCustomValidity("La descripción no debe tener espacios en blanco consecutivos.")
            return false
        }

        // La descripción es válida
        descriptionInput.setCustomValidity("")
        return true
    }

    function validateCinemasGenre(genreInput) {
        // Debe estar seleccionado un género
        if (genreInput.value === "") {
            genreInput.setCustomValidity("Debe seleccionar un género.")
            return false
        }

        // El género es válido
        genreInput.setCustomValidity("")
        return true
    }

    function validateCinemasDuration(durationInput) {
        // Debe ser un número
        if (isNaN(durationInput.value)) {
            durationInput.setCustomValidity("La duración debe ser un número.")
            return false
        }

        // Debe ser mayor a 0
        if (durationInput.value <= 0) {
            durationInput.setCustomValidity("La duración debe ser mayor a 0.")
            return false
        }

        // La duración es válida
        durationInput.setCustomValidity("")
        return true
    }

    function validateCinemasYear(yearInput) {
        // Debe ser un número
        if (isNaN(yearInput.value)) {   
            yearInput.setCustomValidity("El año debe ser un número.")
            return false
        }
        
        // Debe ser mayor a 1900
        if (yearInput.value < 1900) {
            yearInput.setCustomValidity("El año debe ser mayor a 1900.")
            return false
        }

        // Debe ser menor al año actual
        if (yearInput.value > new Date().getFullYear()) {
            yearInput.setCustomValidity("El año debe ser menor al año actual.")
            return false
        }

        // El año es válido
        yearInput.setCustomValidity("")
        return true
    }

    function validateCinemasRating(ratingInput) {
        // Debe ser un número
        if (isNaN(ratingInput.value)) {
            ratingInput.setCustomValidity("El rating debe ser un número.")
            return false
        }

        // Debe ser mayor a 0

        if (ratingInput.value <= 0) {
            ratingInput.setCustomValidity("El rating debe ser mayor a 0.")
            return false              
        }

        // Debe ser menor o igual a 10
        if (ratingInput.value > 10) {
            ratingInput.setCustomValidity("El rating debe ser menor o igual a 10.")
            return false
        }

        // El rating es válido
        ratingInput.setCustomValidity("")
        return true
    }

    // function validateCinemasImage(imageInput) {
    //     // Debe ser un archivo de imagen
    //     if (!/\.(jpg|jpeg|png|gif)$/i.test(imageInput.value)) {
    //         imageInput.setCustomValidity("Debe seleccionar un archivo de imagen.")
    //         return false
    //     }

    //     // La imagen es válida
    //     imageInput.setCustomValidity("")
    //     return true
    // }









































            







//   document.addEventListener("DOMContentLoaded", function () {
//     const sidebar = document.getElementById("sidebar");
//     const sidebarToggle = document.getElementById("sidebarToggle");
  
//     // Agregar un evento al botón para mostrar/ocultar el sidebar
//     sidebarToggle.addEventListener("click", function () {
//         sidebar.classList.toggle("d-none");
//     });
//   });
  
  
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
  var form = document.getElementById("form");

  form.classList.remove("was-validated");
  if (dniValue === "" || isNaN(dniValue) || dniValue.length != 8) {
    dniInput.classList.remove("is-valid");
    dniInput.classList.add("is-invalid");
    return false;
  } else {
    dniInput.classList.remove("is-invalid");
    dniInput.classList.add("is-valid");
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
    