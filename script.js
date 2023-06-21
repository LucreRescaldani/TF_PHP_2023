//const formularioPrincipal = document.getElementById("formulario");
const formularioComprar = document.getElementById("formulario_comprar");


// Obtener la referencia a los campos nombre, apellido, email y cantidad de tickets
let nombre = document.getElementById("nombreInput");
let apellido = document.getElementById("apellidoInput");
let email = document.getElementById("emailInput");
let cantTicket = document.getElementById("cantidadInput");
let aviso = document.getElementById("ResumenCompra");
aviso.hidden;

// Obtener la referencia a la lista de categoría de tickets
let ticket = document.getElementById("categoriaSelect"); // "1" o "2" o "3" o "4"

let totCompra = 0;  // inicializo la variable totCompra 

const botonEnviar = document.getElementById("enviar");  
const botonBorrar = document.getElementById("borrar");  

// Función para deshabilitar el envío de formularios si hay campos no válidos
(function ()  {
    'use strict'
  
    // Obtener todos los formularios a los que queremos aplicar estilos de validación de Bootstrap personalizados
    let forms = document.querySelectorAll('.needs-validation')
  
    // Bucle sobre ellos y evitar el envío
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }
        form.classList.add('was-validated')
        }, false)
      })
  })()

// Función para controlar y mostrar valores en Consola
function mostar() {
    console.log("Nombre: " + nombre.value);
    console.log("Apellido: " + apellido.value);
    console.log("Correo: " + email.value);
    console.log("Cantidad: " + cantTicket.value);
    console.log("Categoria: " + ticket.value);
}

// Función para validar campos del formulario y mostrar mensajes de error
function validar() {
    if (!(/^[a-zA-ZÁ-ÿ\s]{3,25}$/.test(nombre.value))) {
        // Si no se cumple la condicion... 
        document.getElementById("errorNombre").innerHTML = "Debe tener de 3 a 25 caracteres, sin números ni símbolos";
        return false;
        }
    else{
        document.getElementById("errorNombre").innerHTML = "";
        } 
    if (!(/^[a-zA-ZÁ-ÿ\s]{3,25}$/.test(apellido.value))) {
        // Si no se cumple la condicion...
        document.getElementById("errorApellido").innerHTML = "Debe tener de 3 a 25 caracteres, sin números ni símbolos";
        return false;
        }
    else{
        document.getElementById("errorApellido").innerHTML = "";
        }  
    if ((/\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)+$/.test(email.value))) { 
        // Si no se cumple la condicion...    /^\w+([.-_+]?\w+)*@\w+([.-]?\w+)*(\.\w{2,10})+$/   /^[a-z A-Z 0-9.-_+]+@[a-z A-Z 0-9-]+\.[a-z A-Z 0-9-.]+$/
        document.getElementById("errorEmail").innerHTML = "El email no coincide con el formato prueba@ejemplo.com";
        return false;
        }
    else{
        document.getElementById("errorEmail").innerHTML = "";
        } 
    if (cantTicket == 0) { 
        // Si no se cumple la condicion...
        document.getElementById("errorCantidad").innerHTML = "La cantidad debe ser mayor a cero";
        return false;
        }
    else {
        // todos los ingresos son válidos
        return true;
        }
}

// Función para calcular el valor de compra según cantidad y tipo de ticket seleccionado
function calcular() {
    totCompra = 200; // en la variable totCompra guardo el valor de la entrada sin descuento

    switch (ticket.value) {
        case "1":
            totCompra = totCompra * 0.20 * cantTicket.value;
            document.getElementById("totalCompra").innerHTML = "Total a Pagar: $" + totCompra;
            break
        case "2":
            totCompra = totCompra * 0.50 * cantTicket.value;
            document.getElementById("totalCompra").innerHTML = "Total a Pagar: $" + totCompra;
            break
        case "3":
            totCompra = totCompra * 0.85 * cantTicket.value;
            document.getElementById("totalCompra").innerHTML = "Total a Pagar: $" + totCompra;
            break
        case "4":
            totCompra = totCompra * cantTicket.value;
            document.getElementById("totalCompra").innerHTML = "Total a Pagar: $" + totCompra;
            break
        default:
            console.log("El tipo de ticket no es válido");
            break
    }
}

// Función para limpiar mensajes de error
function limpiar(){
    document.getElementById("nombreInput").innerHTML = "";
    document.getElementById("apellidoInput").innerHTML = "";
    document.getElementById("emailInput").innerHTML = "";
    document.getElementById("cantidadInput").innerHTML = "";
    document.getElementById("totalCompra").innerHTML = "Total a Pagar: $";
    document.getElementById("ResumenCompra").innerHTML = "";
}

botonEnviar.addEventListener("click", mostar);
botonEnviar.addEventListener("click", validar);
botonEnviar.addEventListener("click", calcular);

formularioComprar.addEventListener('submit', (e) => {
    e.preventDefault();
    botonEnviar.ariaDisabled;
    document.getElementById("ResumenCompra").innerHTML = "COMPRA EXITOSA";
})

botonBorrar.addEventListener("click", limpiar);
