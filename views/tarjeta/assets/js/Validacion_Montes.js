const tarjeta = document.querySelector('#tarjeta'),
btnAbrirFormulario = document.querySelector('#btn_abrir_formulario'),
formulario = document.querySelector('#formulario_tarjeta'),
numeroTarjeta = document.querySelector('#tarjeta .numero')
nombreTarjeta = document.querySelector('#tarjeta .nombre'),
logoMarca = document.querySelector('#logo-marca')
firma = document.querySelector('#tarjeta .firma p'),
mesExpiracion = document.querySelector('#tarjeta .mes'),
yearExpiracion = document.querySelector('#tarjeta .año');
ccv = document.querySelector('#tarjeta .ccv');

const mostrarFrente = () => {
	if(tarjeta.classList.contains('active')){
		tarjeta.classList.remove('active');
	}
}

//girar tarjeta
tarjeta.addEventListener('click', () => {
	tarjeta.classList.toggle('active');
});

//abrir formulario
btnAbrirFormulario.addEventListener('click',() =>{
    btnAbrirFormulario.classList.toggle('active');
    formulario.classList.toggle('active');
});

//select mes

for(let i = 1; i <=12; i++){
    let option = document.createElement('option');
    option.value = i;
    option.innerText = i;
    formulario.selectMes.appendChild(option);
}

//select año

const añoactual = new Date().getFullYear();

for(let i = añoactual; i <= (añoactual + 8); i++){
    let option = document.createElement('option');
    option.value = i;
    option.innerText = i;
    formulario.selectAño.appendChild(option);
}

// Validacion numero de tarjeta

formulario.inputNumero.addEventListener('keydown', (e) => {
    let valorInput = e.target.value;

    console.log('key: %s', e.key);
        let charCode = e.keyCode;

    //if (!(charCode >= 65 && charCode <= 98) && !(charCode >= 97 &&  (charCode != 32 && charCode != 8) && !(charCode == 9))) {
    if (!(charCode >=96 && charCode <=105) && !(charCode >=48 && charCode <=57) && (charCode != 8 && charCode != 46)){
        e.preventDefault();
    }

    formulario.inputNumero.value = valorInput
    .replace(/\s/g, '')
    .replace(/([0-9]{4})/g, '$1 ')
    .trim();

    numeroTarjeta.textContent = valorInput;

    if(valorInput == ''){
		numeroTarjeta.textContent = '#### #### #### ####';

		logoMarca.innerHTML = '';
	}

	if(valorInput[0] == 4){
		logoMarca.innerHTML = '';
		const imagen = document.createElement('img');
		imagen.src = 'views/tarjeta/assets/images/logos/visa.png';
		logoMarca.appendChild(imagen);
	} else if(valorInput[0] == 5){
		logoMarca.innerHTML = '';
		const imagen = document.createElement('img');
		imagen.src = 'views/tarjeta/assets/images/logos/mastercard.png';
		logoMarca.appendChild(imagen);
	}

	// Volteamos la tarjeta para que el usuario vea el frente.
	mostrarFrente();

});

// * Input nombre de tarjeta
formulario.inputNombre.addEventListener('keyup', (e) => {
	let valorInput = e.target.value;

	formulario.inputNombre.value = valorInput.replace(/[0-9]/g, '');
	nombreTarjeta.textContent = valorInput;
	firma.textContent = valorInput;

	if(valorInput == ''){
		nombreTarjeta.textContent = 'Nombre Apellido';
	}

	mostrarFrente();
});

// * Select mes
formulario.selectMes.addEventListener('change', (e) => {
	mesExpiracion.textContent = e.target.value;
	mostrarFrente();
});

// * Select Año
formulario.selectAño.addEventListener('change', (e) => {
	yearExpiracion.textContent = e.target.value.slice(2);
	mostrarFrente();
});

// * CCV
formulario.inputCCV.addEventListener('keyup', () => {
	if(!tarjeta.classList.contains('active')){
		tarjeta.classList.toggle('active');
	}

	formulario.inputCCV.value = formulario.inputCCV.value
	// Eliminar los espacios
	.replace(/\s/g, '')
	// Eliminar las letras
	.replace(/\D/g, '');

	ccv.textContent = formulario.inputCCV.value;
});
