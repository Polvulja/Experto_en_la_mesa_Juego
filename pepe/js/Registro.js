/*--------Variables-------*/
let validacion = [0,0,0,0,0];
/*--------Funciones------*/


function Validar_nombre(nombre){
	  if (nombre.value == " " || nombre.value == "") nombre.style.borderColor='red';
	  else if (nombre.value != "") nombre.style.borderColor='green';
	  return false;
}
function Validar_apellido(apellido){
	  if (apellido.value == "") apellido.style.borderColor='red';
	  else if (apellido.value != "") apellido.style.borderColor='green';
	  return false;
}
function validar_mail(mail) {
  var mailRevi = /^[-\w.%+]{1,64}@(?:[A-Z0-9-]{1,63}\.){1,125}[A-Z]{2,63}$/i;
  if (mail.value == "") {
    mail.style.borderColor='red';
  } else if (mailRevi.test(mail.value)) {
    mail.style.borderColor='green';
  } else if (mail.value != mailRevi || mail.value == /^[-\w.%+]{1,64}/
  ) {
  	mail.style.borderColor='red';
  	window.alert('El Campo de mail requiere poseer @ (arroba) y un . (punto)');
    
  }
  return false;
}
function validar_contra(contra){
  var revi_contra=/^[a-z0-9_-]{4,20}$/;
  if (contra.value == "" || contra.value == "0" || contra.value == " " ) {
    contra.style.borderColor='red';
  }
  if (revi_contra.test(contra.value)){
    contra.style.borderColor='green';
  }
  else{
    contra.style.borderColor='red';
    window.alert('La contraseña debe poseer entre 4 y 20 caracteres');
  }
  return false;
}

function validar_contra2(contra2){
    var contra = document.getElementById('contra');
    if (contra2.value == "" ||contra2.value == " "){
    contra2.style.borderColor='red';
    }
    else if (contra2.value == contra.value){
    contra2.style.borderColor='green';
    }
    else if(contra2.value != contra.value){
    window.alert('La contraseña debe conincidir con la anterior');
    contra2.style.borderColor='red';
    }
    return false;
}
function Enviar_Formulario(){
	if (validacion.reduce((a, b) => a + b, 0) >= 4)
    document.getElementById('form').submit();
	console.log("ppee");
	return false;
}