const form = document.getElementById('form');
const name = document.getElementById('eventName');
const email = document.getElementById('contactEmail');
const phone = document.getElementById('contactPhone');
const date = document.getElementById('estimatedDate');
const time = document.getElementById('estimatedHour');
const message = document.getElementById('message');
const attendes = document.getElementById('estimatedAttendees');

let errors = {};

// Show input error message
function showError(input, message) {
  const formGroup = input.parentElement;
  formGroup.className = 'form__group form__group--error';
  const small = formGroup.querySelector('small');
  small.innerText = message;
}

// Show success outline
function showSuccess(input) {
  const formGroup = input.parentElement;
  formGroup.className = 'form__group form__group--success';
}

// Check email is valid
function checkEmail(input) {
  const re =
    /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (re.test(input.value.trim())) {
    showSuccess(input);
  } else {
    showError(input, 'Email inválido');
    errors.email = 'Email inválido';
  }
}

// Check required fields
function checkRequired(inputArr) {
  let isRequired = false;
  inputArr.forEach(function (input) {
    if (input.value.trim() === '') {
      showError(input, `${getFieldName(input)} es requerido`);
      isRequired = true;
    } else {
      showSuccess(input);
    }
  });

  return isRequired;
}

// Check input length
function checkLength(input, min, max) {
  if (input.value.length < min) {
    showError(
      input,
      `${getFieldName(input)} debe contener al menos ${min} caracteres`
    );
    errors[`length${input.name}`] = `${getFieldName(
      input
    )} debe contener al menos ${min} caracteres`;
  } else if (input.value.length > max) {
    showError(
      input,
      `${getFieldName(input)} debe tener menos ${max} caracteres`
    );
    errors[`length${input.name}`] = `${getFieldName(
      input
    )} debe tener menos ${max} caracteres`;
  } else {
    showSuccess(input);
  }
}

// Check phone
function checkPhone(input) {
  const re = /^\d{8,10}$/;
  if (re.test(input.value.trim())) {
    showSuccess(input);
  } else {
    showError(input, 'Teléfono inválido');
    errors.phone = 'Teléfono inválido';
  }
}

// Get fieldname
function getFieldName(input) {
  return input.id.charAt(0).toUpperCase() + input.id.slice(1);
}

// Event listeners
form.addEventListener('submit', function (e) {
  e.preventDefault();

  errors = {};

  if (!checkRequired([name, email, phone, date, time, message, attendes])) {
    checkLength(name, 4, 40);
    checkLength(phone, 8, 10);
    checkLength(message, 10, 300);
    checkLength(attendes, 1, 2);

    checkEmail(email);
    checkPhone(phone);

    console.log(errors);

    if (Object.keys(errors).length === 0) {
      console.log('Enviando formulario');
      form.submit();
    }
  }
});
