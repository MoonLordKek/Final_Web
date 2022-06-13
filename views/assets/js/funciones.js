function iniciar_Ses(){
	var email = document.getElementById("email").value;
	var pass = document.getElementById("password").value;
	apdata = {email : email, pass: pass}
	$.ajax({
		url: "/FINAL_WEB/login.php",
		method:'POST',
		data: apdata,
		success: function(data) {
			var result = JSON.parse(data);
			//var result = data;;
			console.log(data);
			if (result.resul==true) {
				alert("Sesión iniciada con éxito.");
				window.location.href = "index.php";
			}else if(result.errores!=undefined){
				for (var i = 0; i < 6; i++) {
					if (result.errores[i]!=undefined) {
						alert(result.errores[i]);
					}
				}
			}else{
				//alert("Por favor rellena todos los campos");
			}
		}
	});
}

function env_email(){
	var email = document.getElementById("email").value;
	var apdata = {email : email};
	$.ajax({
		url: "/FINAL_WEB/env_email.php",
		method:'POST',
		data: apdata,
		success: function(data) {
			console.log(data);
			var result = JSON.parse(data);
			//var result = data;
			if (result.errores!=undefined) {
				for (var i = 0; i < 6; i++) {
					if (result.errores[i]!=undefined) {
						alert(result.errores[i]);
					}
				}
			}else if (result.result==true) {
				alert("Recuperación de contraseña enviado al correo electrónico.");
				window.location.href = "index.php";
			}else{
				alert('Error desconocido');
			}
		}
	});
}

function addUsu(){
	var email = document.getElementById("email").value;
	var pass = document.getElementById("password").value;
	var boleta = document.getElementById("boleta").value;
	var telefono = document.getElementById("telefono").value;
    var nombre = document.getElementById("nombre").value;
	apdata = {email : email, pass: pass, boleta : boleta, nombre: nombre,telefono: telefono}
	console.log(apdata);
	$.ajax({
		url: "/FINAL_WEB/registration_student.php",
		method:'POST',
		data: apdata,
		success: function(data) {
			var resul = data;
			console.log(resul);
			var result = JSON.parse(data);
			console.log(data);
			if (result.resul==true) {
				alert("El usuario se ha registrado exitosamente.");
				window.location.href = "login.php";
				//header("index.php");
			}else if(result.error!=undefined){
				for (var i = 0; i < 6; i++) {
					if (result.error[i]!=undefined) {
						alert(result.error[i]);
					}
				}
			}
		}
	});
}

function addProf(){
	
	var apdata = new FormData(document.getElementById("form_profe"));

	console.log(apdata.values);

	$.ajax({
		url: "/FINAL_WEB/registration_teacher.php",
		method:'POST',
		dataType: "html",
		data: apdata,
		cache: false,
		contentType: false,
		processData: false,
		success: function(data) {
			var resul = data;
			console.log(resul);
			var result = JSON.parse(data);
				console.log(data);
			if (result.resul==true) {
				alert("Profesor registrado con éxito.");
				window.location.href = "login.php";
				//header("index.php");
			}else if(result.error!=undefined){
				for (var i = 0; i < 6; i++) {
					if (result.error[i]!=undefined) {
						alert(result.error[i]);
					}
				}
			}
		}
	});
}

function registro_protocolo(){
	/*var titulo = document.getElementById("titulo").value;
	var desc = document.getElementById("desc").value;
	var nombre1 = document.getElementById("name-1").value;
	var nombre2 = document.getElementById("name-2").value;
    var nombre3 = document.getElementById("name-3").value;
	var nombre4 = document.getElementById("name-4").value;
	var archivo = document.getElementById("archivo").value;
	var nombres = {nombre1,nombre2,nombre3,nombre4};
	//apdata = {
	//	titulo : titulo, desc: desc, nombres : nombres,archivo: archivo
	}*/
	var apdata = new FormData(document.getElementById("formulario"));

	console.log(apdata);

	$.ajax({
		url: "/FINAL_WEB/protocolo_registro.php",
		method:'POST',
		dataType: "html",
		data: apdata,
		cache: false,
		contentType: false,
		processData: false,
		success: function(data) {
			var resul = data;
			console.log(resul);
			var result = JSON.parse(data);
				console.log(data);
			if (result.resul==true) {
				alert("El protocolo se ha registrado exitosamente.");
				window.location.href = "inscrito_protocolo.php";
				//header("index.php");
			}else if(result.error!=undefined){
				for (var i = 0; i < 6; i++) {
					if (result.error[i]!=undefined) {
						alert(result.error[i]);
					}
				}
			}
		}
	});
}

function rec_Con(){
	var email = document.getElementById("email").value;
	var pass = document.getElementById("pass").value;
	var pass_2 = document.getElementById("pass2").value;

	apdata = {email : email, pass: pass, pass2 : pass_2}
	$.ajax({
		url: "/BANANAWARE/olvidar_c_nueva.php",
		method:'POST',
		data: apdata,
		success: function(data) {
//			var result = data;
			var result = JSON.parse(data);
			console.log(data);
			if (result.resul==true) {
				alert("Recuperación de contraseña exitoso.");
				//header("index.php");
				window.location.href = "IS.php";
			}else if(result.error!=undefined){
				for (var i = 0; i < 6; i++) {
					if (result.error[i]!=undefined) {
						alert(result.error[i]);
					}
				}
			}else{
				alert("Es necesario que se llenen todos los campos.");
			}
		}
	});
}

function valTelLet(tel){
	var ex = /([0-9]*[a-zA-Z])+/
	return ex.test(tel);
}

document.getElementById("submit").addEventListener("click",()=>{event.preventDefault()});