//TP1
//EJ1
$(document).ready(function () {
    var numeroInput = $("#numero");
    numeroInput.on("input", function () {
        var inputValue = numeroInput.val().trim();
         if (isNaN(inputValue)) {
            numeroInput.addClass("is-invalid");
        } else {
            numeroInput.removeClass("is-invalid");
        }
    });

    $("#formNumero").submit(function (e) {
        var inputValue = numeroInput.val().trim();
        if (inputValue === "" || isNaN(inputValue)) {
            numeroInput.addClass("is-invalid");
            e.preventDefault();
        }
    });
});

//EJ2
$(document).ready(function () {
    // Agrega un controlador de eventos 'input' a los campos de lunes a viernes
    $("#lunes_form, #martes_form, #miercoles_form, #jueves_form, #viernes_form").on("input", function () {
        var inputValue = $(this).val().trim();
        if (isNaN(inputValue)) {
            $(this).addClass("is-invalid");
        } else {
            $(this).removeClass("is-invalid");
        }
    });

    // Agregar evento submit al formulario
    $("#form").submit(function (e) {
        // Verificar cada campo de entrada
        var isValid;
        var isValid = true;
        var index = 0;

        while (isValid && index < 5) {
            var formId = ["#lunes_form", "#martes_form", "#miercoles_form", "#jueves_form", "#viernes_form"][index];
            var inputValue = $(formId).val().trim();

            if (inputValue === "" || isNaN(inputValue)) {
                $(formId).addClass("is-invalid");
                isValid = false;
            } else {
                $(formId).removeClass("is-invalid");
            }

            index++;
        }

        // Evitar que el formulario se envíe si hay errores
        if (!isValid) {
            e.preventDefault();
            $("#form").removeClass("was-validated");
        }
    });
});

//PT3
$(document).ready(function () {
    // Declarar isValid como una variable global
    var isValid = true;

    // Controlador de eventos 'input' para los campos de nombre y apellido
    $("#nombre, #apellido").on("input", function () {
        var fieldValue = $(this).val().trim();
        if (/^[a-zA-Z\s]+$/.test(fieldValue) || fieldValue === "") {
            $(this).removeClass("is-invalid");
        } else {
            $(this).addClass("is-invalid");
            isValid = false;
        }
    });

    // Validar la edad como un número entero mayor que 0 en tiempo real
    $("#edad").on("input", function () {
        var fieldValue = $(this).val().trim();
        if (/^[1-9]\d*$/.test(fieldValue) || fieldValue === "") {
            $(this).removeClass("is-invalid");
        } else {
            $(this).addClass("is-invalid");
            isValid = false;
        }
    });

    // Controlador de eventos 'input' para el campo de dirección
    $("#direccion").on("input", function () {
        var fieldValue = $(this).val().trim();
        if (fieldValue === "") {
            $(this).addClass("is-invalid");
            isValid = false;
        } else {
            $(this).removeClass("is-invalid");
        }
    });
    
     
   // Controlador de envío del formulario
$("#form3").submit(function (e) {
    // Restablecer isValid a true al comienzo del controlador de envío
    var isValid = true;

    // Validar el campo de nombre
    var nombreFieldValue = $("#nombre").val().trim();
    if (!/^[a-zA-Z\s]+$/.test(nombreFieldValue)) {
        $("#nombre").addClass("is-invalid");
        isValid = false;
    } else {
        $("#nombre").removeClass("is-invalid");
    }

    // Validar el campo de apellido
    var apellidoFieldValue = $("#apellido").val().trim();
    if (!/^[a-zA-Z\s]+$/.test(apellidoFieldValue)) {
        $("#apellido").addClass("is-invalid");
        isValid = false;
    } else {
        $("#apellido").removeClass("is-invalid");
    }

    // Validar la edad como un número entero mayor que 0
    var edadFieldValue = $("#edad").val().trim();
    if (!/^[1-9]\d*$/.test(edadFieldValue)) {
        $("#edad").addClass("is-invalid");
        isValid = false;
    } else {
        $("#edad").removeClass("is-invalid");
    }

    // Verificar que los campos no estén vacíos
    $("#nombre, #apellido, #edad, #direccion").each(function () {
        var fieldValue = $(this).val().trim();
        if (fieldValue === "") {
            $(this).addClass("is-invalid");
            isValid = false;
        }
    });

    if (!isValid) {
        e.preventDefault(); // Evitar el envío del formulario si hay errores
    }
});})

//PT5
 $(document).ready(function () {
    // Controlador de eventos 'input' para el campo de sexo
    $("#sexo").on("input", function () {
        var selectedSexo = $("#sexo").val();
        if (selectedSexo === "Masculino" || selectedSexo === "Femenino") {
            $(this).removeClass("is-invalid");
        } else {
            $(this).addClass("is-invalid");
            isValid = false;
        }
    });
     
    // Controlador de eventos 'change' para los botones de radio de nivel de estudio
    $("input[name='nivelEstudio']").on("change", function () {
        $("input[name='nivelEstudio']").removeClass("is-invalid");
    });

    // Controlador de envío del formulario
    $("#form5").submit(function (e) {
    // Restablecer isValid a true al comienzo del controlador de envío
    var isValid = true;

    // Validar el campo de nombre
    var nombreFieldValue = $("#nombre").val().trim();
    if (!/^[a-zA-Z\s]+$/.test(nombreFieldValue) || nombreFieldValue==="") {
        $("#nombre").addClass("is-invalid");
        isValid = false;
    } else {
        $("#nombre").removeClass("is-invalid");
    }

    // Validar el campo de apellido
    var apellidoFieldValue = $("#apellido").val().trim();
    if (!/^[a-zA-Z\s]+$/.test(apellidoFieldValue) || apellidoFieldValue==="") {
        $("#apellido").addClass("is-invalid");
        isValid = false;
    } else {
        $("#apellido").removeClass("is-invalid");
    }

    // Validar la edad como un número entero mayor que 0
    var edadFieldValue = $("#edad").val().trim();
    if (!/^[1-9]\d*$/.test(edadFieldValue) || edadFieldValue==="") {
        $("#edad").addClass("is-invalid");
        isValid = false;
    } else {
        $("#edad").removeClass("is-invalid");
    }

    // Verificar que los campos no estén vacíos
    $("#direccion").each(function () {
        var fieldValue = $(this).val().trim();
        if (fieldValue === "") {
            $(this).addClass("is-invalid");
            isValid = false;
        }
    });
    // Verificar nivel de estudio
        var nivelEstudioSelected = $("input[name='nivelEstudio']:checked").val();
        if (nivelEstudioSelected === undefined) {
            $("input[name='nivelEstudio']").addClass("is-invalid");
            isValid = false;
        }
        // Verificar el campo "Sexo"
        var selectedSexo = $("#sexo").val();
        if (selectedSexo === "") {
            $("#sexo").addClass("is-invalid");
            isValid = false;
        }

    if (!isValid) {
        e.preventDefault(); // Evitar el envío del formulario si hay errores
    }
});})



//PT6
 $(document).ready(function () {
    // Controlador de eventos 'input' para el campo de sexo
    $("#sexo").on("input", function () {
        var selectedSexo = $("#sexo").val();
        if (selectedSexo === "Masculino" || selectedSexo === "Femenino") {
            $(this).removeClass("is-invalid");
        } else {
            $(this).addClass("is-invalid");
            isValid = false;
        }
    });
     
    // Controlador de eventos 'change' para los botones de radio de nivel de estudio
    $("input[name='nivelEstudio']").on("change", function () {
        $("input[name='nivelEstudio']").removeClass("is-invalid");
    });

    // Controlador de envío del formulario
    $("#form6").submit(function (e) {
    // Restablecer isValid a true al comienzo del controlador de envío
    var isValid = true;

    // Validar el campo de nombre
    var nombreFieldValue = $("#nombre").val().trim();
    if (!/^[a-zA-Z\s]+$/.test(nombreFieldValue) || nombreFieldValue==="") {
        $("#nombre").addClass("is-invalid");
        isValid = false;
    } else {
        $("#nombre").removeClass("is-invalid");
    }

    // Validar el campo de apellido
    var apellidoFieldValue = $("#apellido").val().trim();
    if (!/^[a-zA-Z\s]+$/.test(apellidoFieldValue) || apellidoFieldValue==="") {
        $("#apellido").addClass("is-invalid");
        isValid = false;
    } else {
        $("#apellido").removeClass("is-invalid");
    }

    // Validar la edad como un número entero mayor que 0
    var edadFieldValue = $("#edad").val().trim();
    if (!/^[1-9]\d*$/.test(edadFieldValue) || edadFieldValue==="") {
        $("#edad").addClass("is-invalid");
        isValid = false;
    } else {
        $("#edad").removeClass("is-invalid");
    }

    // Verificar que los campos no estén vacíos
    $("#direccion").each(function () {
        var fieldValue = $(this).val().trim();
        if (fieldValue === "") {
            $(this).addClass("is-invalid");
            isValid = false;
        }
    });
    // Verificar nivel de estudio
        var nivelEstudioSelected = $("input[name='nivelEstudio']:checked").val();
        if (nivelEstudioSelected === undefined) {
            $("input[name='nivelEstudio']").addClass("is-invalid");
            isValid = false;
        }
        // Verificar el campo "Sexo"
        var selectedSexo = $("#sexo").val();
        if (selectedSexo === "") {
            $("#sexo").addClass("is-invalid");
            isValid = false;
        }
          // Verificar que al menos un checkbox esté marcado
        var checkboxes = $("input[name='futbol'], input[name='basquet'], input[name='voley'], input[name='tenis']");
        var isChecked = checkboxes.is(":checked");
        if (!isChecked) {
            $(checkboxes).addClass("is-invalid");
            isValid = false;
        }

    if (!isValid) {
        e.preventDefault(); // Evitar el envío del formulario si hay errores
    }
});})

//pt7
$(document).ready(function () {
    // Agrega un controlador de eventos 'input' a los campos de lunes a viernes
    $("#num1, #num2").on("input", function () {
        var inputValue = $(this).val().trim();
        if (isNaN(inputValue)) {
            $(this).addClass("is-invalid");
        } else {
            $(this).removeClass("is-invalid");
        }
    });
    // Verificar el campo "opcion"
    $("#opcion").on("input",function(){
        var selected = $("#opcion").val();
           if (selected !== "") {
           $("#opcion").removeClass("is-invalid");
           isValid = false;
       }
    })
       
    $("#form7").submit(function (e) {
    // Restablecer isValid a true al comienzo del controlador de envío
    var isValid = true;
    $("#num1, #num2").each(function () {
        var fieldValue = $(this).val().trim();
        if (fieldValue === "" || isNaN(fieldValue)) {
            $(this).addClass("is-invalid");
            isValid = false;}
       // Verificar el campo "opcion"
       var selected = $("#opcion").val();
       if (selected === "") {
           $("#opcion").addClass("is-invalid");
           isValid = false;
       }
        })
        if (!isValid) {
            e.preventDefault(); // Evitar el envío del formulario si hay errores
        }
})})
//pt8
$(document).ready(function () {
    // Validar la edad como un número entero mayor que 0 en tiempo real
    $("#edad1").on("input", function () {
        var fieldValue = $(this).val().trim();
        if (/^[1-9]\d*$/.test(fieldValue) || fieldValue === "") {
            $(this).removeClass("is-invalid");
        } else {
            $(this).addClass("is-invalid");
        }
    });

    // Controlador de eventos 'change' para los botones de radio de nivel de estudio
    $("input[name='condicion']").on("change", function () {
        $("input[name='condicion']").removeClass("is-invalid");
    });

    $("#form8").submit(function (e) {
        // Restablecer isValid a true al principio de la función de envío
        var isValid = true;

        // Verificar nivel de estudio
        var nivelEstudioSelected = $("input[name='condicion']:checked").val();
        if (nivelEstudioSelected === undefined) {
            $("input[name='condicion']").addClass("is-invalid");
            isValid = false;
        }

        var fieldValue = $("#edad1").val().trim();
        if (fieldValue === "" || isNaN(fieldValue) || parseInt(fieldValue) <= 0) {
            $("#edad1").addClass("is-invalid");
            isValid = false;
        }

        if (!isValid) {
            e.preventDefault(); // Evitar el envío del formulario si hay errores
        }
    });
});





////////////////////////////////////tp4

function validarFormulario() {
    var patenteInput = document.getElementById("patente");
    var mensaje="";
    var respuesta=true;
    patenteInput.classList.remove("is-invalid");

    // Debe tener exactamente 6 caracteres
    if (patenteInput.value.length !== 6) {
        patenteInput.classList.add("is-invalid");
        mensaje += "La patente debe tener exactamente 6 caracteres.";
        respuesta= false;
    }else {patenteInput.classList.remove("is-invalid");}
        

    // Debe tener tres letras y tres números sin espacios ni caracteres especiales en ese orden
    if (!/^[A-Za-z]{3}[0-9]{3}$/.test(patenteInput.value)) {
        patenteInput.classList.add("is-invalid");
        mensaje +="La patente debe tener tres letras y tres números sin espacios ni caracteres especiales en ese orden.";
        respuesta = false;
    }else {patenteInput.classList.remove("is-invalid");}
    
    // La patente es válida
    //patenteInput.setCustomValidity(mensaje);   
    return respuesta;
    
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



// Función para validar el formulario form6
function validarForm6() {
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
            if ((fieldId === "DNI" || fieldId === "telefono") && !/^[0-9]+$/.test(fieldValue)) {
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

    return isValid;
}




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
        if (domicilio.value.trim() === "") {
            domicilio.classList.add("is-invalid");
            isValid = false;
        } else {
            domicilio.classList.remove("is-invalid");
        }
        if (telefono.value.trim() === "" || !/^[0-9]+$/.test(telefono.value.trim())) {
            telefono.classList.add("is-invalid");
            isValid = false;
        } else {
            telefono.classList.remove("is-invalid");
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
    