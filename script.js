
//seccion de llenado de estados
	// Mapeo de estados por país
const estadosPorPais = {
  "argentina": ["Buenos Aires"],
  "estados-unidos": ["California"],
  "mexico": ["Aguascalientes", "Campeche", "Cdmx"]
};

// Función para llenar select de estados
function llenarEstados() {
   const paisSelect = document.getElementById("pais");
  const estadoSelect = document.getElementById("estado");
  const pais = paisSelect.value;
  
  // Obtener lista de estados para el país seleccionado
  const estados = estadosPorPais[pais] || [];
  
  // Limpiar select de estados
  estadoSelect.innerHTML = '';
  
  // Agregar opción por defecto
  const opcionPorDefecto = document.createElement("option");
  opcionPorDefecto.value = '';
  opcionPorDefecto.text = "Seleccione un estado";
  estadoSelect.appendChild(opcionPorDefecto);
  
  // Agregar opciones de estados
  estados.forEach((estado) => {
    const opcionEstado = document.createElement("option");
    opcionEstado.value = estado;
    opcionEstado.text = estado;
    estadoSelect.appendChild(opcionEstado);
  });
}

// Evento para manejar cambios en la selección de país
document.addEventListener("DOMContentLoaded", () => {
  const paisSelect = document.getElementById("pais");
  paisSelect.addEventListener("change", llenarEstados);
  
  // Llenar select de estados al cargar la página
  llenarEstados();
});



//validacion del select si o no para ocultar div datos-personales

let anonimoSelect;
function anonimato() {
  const datosPersonales = document.getElementById("datos-personales");


  if (anonimoSelect.value == 'si') {
    datosPersonales.style.display = "none";
   document.getElementById("nombre").value = "ANONIMO";
  document.getElementById("email").value ="ANONIMO@HOTMAIL.COM";
  document.getElementById("telefono").value = "66666666";
  } else {
    datosPersonales.style.display = "block";
    nombreInput.disabled = false;
    emailInput.disabled = false;
    nombreInput.disabled = false;
  }
}
        
       

       


document.addEventListener("DOMContentLoaded", () => {

   anonimoSelect = document.getElementById("anonimo");
   anonimoSelect.addEventListener("change", anonimato);

  
});



