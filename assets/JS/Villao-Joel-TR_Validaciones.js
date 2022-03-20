var form = document.querySelector("#frmtrabajos");

form.addEventListener('submit',validar);

function validar(event) {
    var frmCorrecto = true;
    var txtNombres = document.getElementById("name");
    var txtApellidos= document.getElementById("lastname");
    var txtTelefono = document.getElementById("phone");
    var txtcorreo = document.getElementById("correo");
    var txtfecha= document.getElementById("date");

    var caracteres = /^[a-zA-ZÀ-ÿ\s]{4,40}$/;
    var telefonos = /^\d{10}$/;
    var correo =  /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;

    limpiar();

    // Validacion Nombre

    if(txtNombres.value===''){
        frmCorrecto = false;
        mensaje("Campo Vacio",txtNombres);
    }
    else if(txtNombres.value.length>20){
        frmCorrecto = false;
        mensaje("Maximo 20 caracteres",txtNombres);
    }
    else if(!caracteres.test(txtNombres.value)){
        frmCorrecto = false;
        mensaje("Caracteres Invalidos",txtNombres);
    }

    // Validacion Apellido

    if(txtApellidos.value===''){
        frmCorrecto = false;
        mensaje("Campo Vacio",txtApellidos);
    }
    else if(txtApellidos.value.length>20){
        frmCorrecto = false;
        mensaje("Maximo 20 caracteres",txtApellidos);
    }
    else if(!caracteres.test(txtApellidos.value)){
        frmCorrecto = false;
        mensaje("Caracteres Invalidos",txtApellidos);
    }

    // Validacion Telefono

    if(txtTelefono.value===''){
        frmCorrecto =false;
        mensaje("Campo Vacio",txtTelefono);
    }
    else if(!telefonos.test(txtTelefono.value)){
        frmCorrecto=false;
        mensaje("Minimo y Maximo de 10 Digitos",txtTelefono);
    }

    // Validacion Correo

    if(txtcorreo.value===""){
        frmCorrecto=false;
        mensaje("Campo Vacio",txtcorreo);
    }
    else if(!correo.test(txtcorreo.value)){
        frmCorrecto=false;
        mensaje("Caracteres Invalidos",txtcorreo);
    }

    // Validacion Fecha

    var datos= txtfecha.value;
    var nacimiento= new Date(datos);
    var Anacimiento = nacimiento.getFullYear();

    var fechaActual = new Date();
    var Aactual = fechaActual.getFullYear();

    if(nacimiento==fechaActual){
        frmCorrecto=false;
        mensaje("Fecha no puede ser actual",txtfecha);
    }
    else if (Anacimiento<1920){
        frmCorrecto=false;
        mensaje("Año de nacimiento no Pude ser Mayor a 1920",txtfecha);
    }
    else if ((Aactual-Anacimiento)<18){
        frmCorrecto=false;
        mensaje("Debe ser mayo de 18",txtfecha);
    }
    else if(txtfecha.value==""){
        frmCorrecto=false;
        mensaje("Campo Vacio",txtfecha);
    }

    //--------------------------------//
    if(!frmCorrecto){
        event.preventDefault();
    }
}

function mensaje(cadena, objeto){
    objeto.focus();
    var nodo = objeto.parentNode;
    var msg= document.createElement("span");
    msg.textContent=cadena;
    msg.setAttribute("class","mensajeError");
    nodo.appendChild(msg);
}

function limpiar(){
    var mensaje = document.querySelectorAll(".mensajeError");
    for(let i=0; i<mensaje.length; i++){
        mensaje[i].remove();
    }
}