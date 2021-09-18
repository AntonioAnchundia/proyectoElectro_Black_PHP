/*function validar(){
    console.log("EJECUTANDO...");
    return false;
}*/

function validar(){
    var nombre, apellido, email, cedula, celular, direccion;
	var letras, numeros, alfanumerico, correo;

    letras= /^[a-z ,.'-]+$/i;
    numeros= /^[0-9]{10}$/g;
    n=/^[0-9]{10}$/g;
    correo=  /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
    alfanumerico= /^[a-zA-Z0-9 ]+$/;

	nombre= document.getElementById("nombre").value;
	apellido= document.getElementById("apellido").value;
	email=document.getElementById("email").value;
	cedula= document.getElementById("cedula").value;
	celular=document.getElementById("celular").value;
	direccion=document.getElementById("direccion").value;
	

  if(nombre==="" ){
        alert("El campo nombre es obligatorio");
        return false;
   }
   if(apellido==="" ){
    alert("El campo apellido es obligatorio");
    return false;
}
if(email==="" ){
  alert("El campo email es obligatorio");
  return false;
}
if(cedula==="" ){
  alert("El campo cedula es obligatorio");
  return false;
}
if(celular==="" ){
  alert("El campo celular es obligatorio");
  return false;
}
if(direccion==="" ){
  alert("El campo direccion es obligatorio");
  return false;
}

    if(nombre.length >30){
		alert("El campo nombre es muy largo");
		return false;
	}else if (!letras.test(nombre)){
        alert("El nombre es invalido");
		return false;

    }

    if(apellido.length >30){
		alert("El campo apellido es muy largo");
		return false;
	}else if (!letras.test(apellido)){
        alert("El apellido es invalido");
		return false;

    }

    if(email.length > 50){
		alert("El campo email es muy largo");
		return false;
	}else if (!correo.test(email)){
        alert("El correo es invalido");
		return false;

    }

    if(cedula.length > 10){
		alert("El campo cédula es muy largo");
		return false;
	}else if (!numeros.test(cedula)){
        alert("El número de cédula es invalido");
		return false;
    }

    if(celular.length > 10){
		alert("El campo celular es muy largo");
		return false;
	}else if (!n.test(celular)){
        alert("El número de celular es invalido");
        return false;
    }

    if(direccion.length > 50){
		alert("El campo dirección es muy largo");
		return false;
	}else if (!alfanumerico.test(direccion)){
        alert("La dirección es invalida");
		return false;
    }
    
   

    


}