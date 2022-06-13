<?php session_start();
	if(!isset($_SESSION['boleta'])){
		
		if($_SERVER['REQUEST_METHOD']=='GET')
			require ('views/registration_student.view.php');
		else{
			require 'funciones.php';
			if(isset($_POST['email']) && isset($_POST['pass']) && isset($_POST['boleta']) && isset($_POST['nombre']) && isset($_POST['telefono']) ){
				$email = filter_var($_POST['email'],FILTER_SANITIZE_STRING);
				$pass = filter_var($_POST['pass'],FILTER_SANITIZE_STRING);
				$boleta = filter_var($_POST['boleta'],FILTER_SANITIZE_STRING);
				$nombre = filter_var($_POST['nombre'],FILTER_SANITIZE_STRING);
				$telefono = filter_var($_POST['telefono'],FILTER_SANITIZE_STRING);
				$errores = '';

				$email = filtrado($email);
				$pass = filtrado($pass);
				$boleta = filtrado($boleta);
				$nombre = filtrado($nombre);
				$telefono = filtrado($telefono);

				if(empty($email) or empty($pass) or empty($boleta) or empty($nombre)){
					$result["error"][0]="Es necesario que se llenen todos los campos.";
				}elseif (valEmail($email)) {

					$result["error"][1]="Formato de correo invalido. \n Intente: example@ejemplo.com";

				}else if(valPass($pass)){
					$result["error"][1]="Formato invalido de contraseña.\nLa contraseña debe tener al menos 6 carácteres, una mayúscula, una minúscula, un número y un símbolo especial.";
				}else{
					$conexion = conexion();
					if ($conexion) {
						$statement = $conexion->prepare('SELECT * FROM alumnos Where email = :email LIMIT 1');
						$statement->execute(array(':email' => $email));
						$resultado = $statement->fetch();
					} else {
						$result["error"][2]="Error al conectar a la base de datos.";
					}
					if($resultado != false){
						$result["error"][3]="El correo electrónico que ha ingresado ya está vinculado a una cuenta existente.";
					}
				} 
				$flag = false;
				if (isset($result["error"])) {
					$flag = true;
				}
				if($flag != true){
					$conexion = conexion();
					if ($conexion) {
						if(empty($telefono))
							$insert = 'INSERT INTO alumnos VALUES ("'.$boleta.'","'.$nombre.'","'.$pass.'","'.$email.'")';
						else
							$insert = 'INSERT INTO alumnos VALUES ("'.$boleta.'","'.$nombre.'","'.$pass.'","'.$email.'","'.$telefono.'")';
						//$statement = $conexion->prepare('INSERT INTO alumnos VALUES (:email,:pass,:nom_usu)');
						//if($statement->execute(array(':email' => $email,':pass' => $pass, ':nom_usu' => $nom_usu))===false){
						if ($conexion->query($insert)!=false) {
							$result["num"] = "cero";
						}else{
							$result["num"] = $insert;
						}
						$result["resul"] = true;
					} else {
						$result["error"][2]="Error al conectar a la base de datos.";
					}
				}
			}
			echo json_encode($result);
		}
	}
	else
	header('Location: index.php');
 ?>