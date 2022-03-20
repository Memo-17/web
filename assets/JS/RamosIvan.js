const nombre = document.getElementById('name');
const apellidos = document.getElementById('lastname');
const usuario = document.getElementById('name-user');
const correo = document.getElementById('email');
const inputs = document.querySelectorAll('#form input');
const textArea = document.querySelectorAll('#form textarea');
const comentario = document.getElementById('Comentario');
const form = document.getElementById('form');

const TIME_OUT = 3000;

// expresiones regulares
const expresiones = {
  nombre: /^[a-zA-ZÀ-ÿ\s]{4,40}$/,
  apellidos: /^[a-zA-ZÀ-ÿ\s]{4,40}$/,
  usuario: /^[a-zA-Z0-9\_\-]{4,16}$/,
  correo: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
};

const campos2 = {
  nombre: false,
  apellidos: false,
  usuario: false,
  correo: false,
  comentario: false,
};

//Validar inputs del Formulario

const validarFormulario = (e) => {
  switch (e.target.name) {
    case 'name':
      validarCampo(expresiones.nombre, e.target, 'nombre');
      break;
    case 'lastname':
      validarCampo(expresiones.apellidos, e.target, 'apellidos');
      break;
    case 'name-user':
      validarCampo(expresiones.usuario, e.target, 'usuario');
      break;
    case 'email':
      validarCampo(expresiones.correo, e.target, 'correo');
      break;
  }
};

const validarCampo = (expresion, input, campo) => {
  if (expresion.test(input.value)) {
    document
      .getElementById(`seccion_${campo}`)
      .classList.remove('formulario__grupo-incorrecto');
    document
      .getElementById(`seccion_${campo}`)
      .classList.add('formulario__grupo-correcto');
    document
      .querySelector(`#seccion_${campo} i`)
      .classList.add('fa-check-circle');
    document
      .querySelector(`#seccion_${campo} i`)
      .classList.remove('fa-times-circle');
    document
      .querySelector(`#seccion_${campo} .formulario__input-error`)
      .classList.remove('formulario__input-error-activado');
    campos2[campo] = true;
  } else {
    document
      .getElementById(`seccion_${campo}`)
      .classList.add('formulario__grupo-incorrecto');
    document
      .getElementById(`seccion_${campo}`)
      .classList.remove('formulario__grupo-correcto');
    document
      .querySelector(`#seccion_${campo} i`)
      .classList.add('fa-times-circle');
    document
      .querySelector(`#seccion_${campo} i`)
      .classList.remove('fa-check-circle');
    document
      .querySelector(`#seccion_${campo} .formulario__input-error`)
      .classList.add('formulario__input-error-activado');
    campos2[campo] = false;
  }
};

//Validar textArea del Formulario

function validarTextArea() {
  if (document.getElementById('Comentario').value.length >= 50) {
    document
      .getElementById('seccion_comentario')
      .classList.remove('formulario__grupo-incorrecto');
    document
      .getElementById('seccion_comentario')
      .classList.add('formulario__grupo-correcto');
    document
      .querySelector('#seccion_comentario i')
      .classList.add('fa-check-circle');
    document
      .querySelector('#seccion_comentario i')
      .classList.remove('fa-times-circle');
    document
      .querySelector('#seccion_comentario .formulario__input-error')
      .classList.remove('formulario__input-error-activado');
    campos2['comentario'] = true;
  } else {
    document
      .getElementById('seccion_comentario')
      .classList.add('formulario__grupo-incorrecto');
    document
      .getElementById('seccion_comentario')
      .classList.remove('formulario__grupo-correcto');
    document
      .querySelector('#seccion_comentario i')
      .classList.add('fa-times-circle');
    document
      .querySelector('#seccion_comentario i')
      .classList.remove('fa-check-circle');
    document
      .querySelector('#seccion_comentario .formulario__input-error')
      .classList.add('formulario__input-error-activado');
    campos2['comentario'] = false;
  }
}

//Eventos de Escucha

inputs.forEach((input) => {
  input.addEventListener('keyup', validarFormulario);
  input.addEventListener('blur', validarFormulario);
});

textArea.forEach((textarea) => {
  textarea.addEventListener('keyup', validarTextArea);
  textarea.addEventListener('blur', validarTextArea);
});

//Validar que no existan campos vacios

form.addEventListener('submit', (e) => {
  e.preventDefault();

  if (
    campos2.nombre &&
    campos2.apellidos &&
    campos2.usuario &&
    campos2.correo &&
    campos2.comentario
  ) {
    form.reset();

    document
      .getElementById('formulario__mensaje-exito')
      .classList.add('formulario__mensaje-exito-activo');
    setTimeout(() => {
      document
        .getElementById('formulario__mensaje-exito')
        .classList.remove('formulario__mensaje-exito-activo');
    }, TIME_OUT);
    document
      .querySelectorAll('.formulario__grupo-correcto')
      .forEach((icono) => {
        icono.classList.remove('formulario__grupo-correcto');
      });
  } else {
    document
      .getElementById('formulario__mensaje')
      .classList.add('formulario_mensaje-activo');
    setTimeout(() => {
      document
        .getElementById('formulario__mensaje')
        .classList.remove('formulario_mensaje-activo');
    }, TIME_OUT);
  }

  campos2.nombre = false;
  campos2.apellidos = false;
  campos2.usuario = false;
  campos2.correo = false;
  campos2.comentario = false;
});
