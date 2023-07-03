
// VALIDACIÓN DEL PRIMER FORMULARIO DE SERVICIOS.HTML
// function validar1() {
//   const nombre = document.getElementById("nombre").value;
//   const descripcion = document.getElementById("descripcion").value;


//   var Vnombre = /^[A-Za-zÁáÉéÍíÓóÚúÑñ\s]+$/; // Expresión regular para validar solo letras y espacios

//   if (nombre == "" || descripcion == "") {
//     Swal.fire({
//       icon: "error",
//       title: "Oops...",
//       text: "Ingrese informacion en los campos vacios",
//     });
//   } else if (!Vnombre.test(nombre)) {
//     Swal.fire({
//       icon: "error",
//       title: "Oops...",
//       text: "Nombre incorrecto",
//     });
//   } else if (!Vnombre.test(descripcion)) {
//     Swal.fire({
//       icon: "error",
//       title: "Oops...",
//       text: "Descripción incorrecta",
//     });
//   } else {
//     Swal.fire({
//       icon: "success",
//       title: "Excelente",
//       text: "¡Servicio Agregado!",
//     }).then((result) => {
//       if (result.isConfirmed) {
//         window.location.href = 'servicios.html';
//       }
//     })
//   }

// }

// // VALIDACIÓN DEL SEGUNDO FORMULARIO DE SERVICIOS.HTML
// function validar2() {
//   const nombre2 = document.getElementById("nombre2").value;
//   const descripcion2 = document.getElementById("descripcion2").value;


//   var Vnombre = /^[A-Za-zÁáÉéÍíÓóÚúÑñ\s]+$/; // Expresión regular para validar solo letras y espacios

//   if (nombre2 == "" || descripcion2 == "") {
//     Swal.fire({
//       icon: "error",
//       title: "Oops...",
//       text: "Ingrese informacion en los campos vacios",
//     });
//   } else if (!Vnombre.test(nombre2)) {
//     Swal.fire({
//       icon: "error",
//       title: "Oops...",
//       text: "Nombre incorrecto",
//     });
//   } else if (!Vnombre.test(descripcion2)) {
//     Swal.fire({
//       icon: "error",
//       title: "Oops...",
//       text: "Descripción incorrecta",
//     });
//   } else {
//     Swal.fire({
//       icon: "success",
//       title: "Excelente",
//       text: "¡Servicio editado!",
//     }).then((result) => {
//       if (result.isConfirmed) {
//         window.location.href = 'servicios.html';
//       }
//     });
//   }

// }
  

// FUNCIÓN DE LIMPIAR FORMULARIOS
// function cancelar() {
  // Cerrar el formulario aquí
  // document.getElementById('formulario').reset();
  // window.location.href = 'servicios.html';


// }
  

document.getElementById("editForm").addEventListener("submit", function (event) {
  event.preventDefault(); // Evita que se envíe el formulario automáticamente


  
  // Obtiene los valores de los campos
  var nombre_servicio = document.getElementById('nombre_servicio').value;
  var descripcion = document.getElementById('descripcion').value;

  var validarAmbos = /^[A-Za-zÁáÉéÍíÓóÚúÑñ\s]+$/; // Expresión regular para validar solo letras y espacios


  // Realiza las validaciones
  if (nombre_servicio == "" || descripcion == "") {
    
    Swal.fire({
      icon: "error",
      title: "Oops!",
      text: "Llenar los campos vacios",
  });
    

  } else if (!validarAmbos.test(nombre_servicio)) {
      Swal.fire({
          icon: "error",
          title: "Oops!",
          text: "Ingresar un servicio válido",
      });
  }
  else if (!validarAmbos.test(descripcion)) {
      Swal.fire({
          icon: "error",
          title: "Oops!",
          text: "Ingresar una descripción válida",
      });
  }

  else {
      this.submit()
  }

});











