//Validar Formulario

const nombre = document.getElementById("name");
const correo = document.getElementById("mail");
const telefono = document.getElementById("phone");
const titulo = document.getElementById("subject");
const mensaje = document.getElementById("msg");
const form = document.getElementById("form");
const inputs = document.querySelectorAll("#form input");
const textArea = document.querySelectorAll("#form textarea");
const selects = document.querySelectorAll("#form select");
const ciudad = document.getElementById("ciudad");

// expresiones regulares
const expresiones = {
  nombre: /^[a-zA-ZÀ-ÿ\s]{4,40}$/,
  correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
  titulo: /^[a-zA-ZÀ-ÿ\s]{4,30}$/,
  telefono: /^\d{7,10}$/,
};

const campos = {
  nombre: false,
  correo: false,
  titulo: false,
  telefono: false,
  mensaje: false,
  ciudad: false,
  Si: false,
  No: false,
};

//Validar inputs del Formulario

const validarFormulario = (e) => {
  switch (e.target.name) {
    case "fullname":
      validarCampo(expresiones.nombre, e.target, "nombre");
      break;
    case "email":
      validarCampo(expresiones.correo, e.target, "correo");
      break;
    case "phone":
      validarCampo(expresiones.telefono, e.target, "telefono");
      break;
    case "subject":
      validarCampo(expresiones.titulo, e.target, "titulo");
      break;
  }
};

const validarCampo = (expresion, input, campo) => {
  if (expresion.test(input.value)) {
    document
      .getElementById(`seccion_${campo}`)
      .classList.remove("formulario__grupo-incorrecto");
    document
      .getElementById(`seccion_${campo}`)
      .classList.add("formulario__grupo-correcto");
    document
      .querySelector(`#seccion_${campo} i`)
      .classList.add("fa-check-circle");
    document
      .querySelector(`#seccion_${campo} i`)
      .classList.remove("fa-times-circle");
    document
      .querySelector(`#seccion_${campo} .formulario__input-error`)
      .classList.remove("formulario__input-error-activado");
    campos[campo] = true;
  } else {
    document
      .getElementById(`seccion_${campo}`)
      .classList.add("formulario__grupo-incorrecto");
    document
      .getElementById(`seccion_${campo}`)
      .classList.remove("formulario__grupo-correcto");
    document
      .querySelector(`#seccion_${campo} i`)
      .classList.add("fa-times-circle");
    document
      .querySelector(`#seccion_${campo} i`)
      .classList.remove("fa-check-circle");
    document
      .querySelector(`#seccion_${campo} .formulario__input-error`)
      .classList.add("formulario__input-error-activado");
    campos[campo] = false;
  }
};

//Validar textArea del Formulario

function validarTextArea() {
  if (document.getElementById("msg").value.length >= 50) {
    document
      .getElementById("seccion_mensaje")
      .classList.remove("formulario__grupo-incorrecto");
    document
      .getElementById("seccion_mensaje")
      .classList.add("formulario__grupo-correcto");
    document
      .querySelector("#seccion_mensaje i")
      .classList.add("fa-check-circle");
    document
      .querySelector("#seccion_mensaje i")
      .classList.remove("fa-times-circle");
    document
      .querySelector("#seccion_mensaje .formulario__input-error")
      .classList.remove("formulario__input-error-activado");
    campos["mensaje"] = true;
  } else {
    document
      .getElementById("seccion_mensaje")
      .classList.add("formulario__grupo-incorrecto");
    document
      .getElementById("seccion_mensaje")
      .classList.remove("formulario__grupo-correcto");
    document
      .querySelector("#seccion_mensaje i")
      .classList.add("fa-times-circle");
    document
      .querySelector("#seccion_mensaje i")
      .classList.remove("fa-check-circle");
    document
      .querySelector("#seccion_mensaje .formulario__input-error")
      .classList.add("formulario__input-error-activado");
    campos["mensaje"] = false;
  }
}

//Validar Select del Formulario

function validarSelect() {
  var selec_ciudad = document.getElementById("ciudad");
  if (selec_ciudad.value == 0 || selec_ciudad.value == "") {
    document
      .getElementById("seccion_ciudad")
      .classList.add("formulario__grupo-incorrecto");
    document
      .getElementById("seccion_ciudad")
      .classList.remove("formulario__grupo-correcto");
    document
      .querySelector("#seccion_ciudad i")
      .classList.add("fa-times-circle");
    document
      .querySelector("#seccion_ciudad i")
      .classList.remove("fa-check-circle");
    document
      .querySelector("#seccion_ciudad .formulario__input-error")
      .classList.add("formulario__input-error-activado");
    campos["ciudad"] = false;
  } else {
    document
      .getElementById("seccion_ciudad")
      .classList.remove("formulario__grupo-incorrecto");
    document
      .getElementById("seccion_ciudad")
      .classList.add("formulario__grupo-correcto");
    document
      .querySelector("#seccion_ciudad i")
      .classList.add("fa-check-circle");
    document
      .querySelector("#seccion_ciudad i")
      .classList.remove("fa-times-circle");
    document
      .querySelector("#seccion_ciudad .formulario__input-error")
      .classList.remove("formulario__input-error-activado");
    campos["ciudad"] = true;
  }
}

//Validar Radio del Formulario

function validarRadio() {
  var correosSi = document.getElementById("Si");
  var correosNo = document.getElementById("No");
  if (correosSi.checked == true || correosNo.checked == true) {
    console.log("Selccionado");
    campos["Si"] = true;
    campos["No"] = true;
  } else {
    console.log("No seleccionado");
    campos["Si"] = false;
    campos["No"] = false;
  }
}

//Eventos de Escucha

inputs.forEach((input) => {
  input.addEventListener("keyup", validarFormulario);
  input.addEventListener("blur", validarFormulario);
  input.addEventListener("click", validarRadio);
});

selects.forEach((select) => {
  select.addEventListener("click", validarSelect);
});

textArea.forEach((textarea) => {
  textarea.addEventListener("keyup", validarTextArea);
  textarea.addEventListener("blur", validarTextArea);
});

//Validar que no existan campos vacios

form.addEventListener("submit", (e) => {
  if (
    campos.nombre &&
    campos.correo &&
    campos.telefono &&
    campos.mensaje &&
    campos.titulo &&
    campos.ciudad &&
    (Si.checked || No.checked)
  ) {
    //form.reset();

    document
      .getElementById("formulario__mensaje-exito")
      .classList.add("formulario__mensaje-exito-activo");
    setTimeout(() => {
      document
        .getElementById("formulario__mensaje-exito")
        .classList.remove("formulario__mensaje-exito-activo");
    }, 5000);
    document
      .querySelectorAll(".formulario__grupo-correcto")
      .forEach((icono) => {
        icono.classList.remove("formulario__grupo-correcto");
      });
  } else {
    e.preventDefault();
    document
      .getElementById("formulario__mensaje")
      .classList.add("formulario_mensaje-activo");
    setTimeout(() => {
      document
        .getElementById("formulario__mensaje")
        .classList.remove("formulario_mensaje-activo");
    }, 5000);
  }
});
