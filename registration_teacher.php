<?php session_start();
	if(!isset($_SESSION['boleta'])){
		
		if($_SERVER['REQUEST_METHOD']=='GET')
			require ('views/Teachers/registration_teacher.view.php');
		else{
			require 'funciones.php';
            
			if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name'])){
				$nombre = filter_var($_POST['name'],FILTER_SANITIZE_STRING);
                $email = filter_var($_POST['email'],FILTER_SANITIZE_STRING);
				$pass = filter_var($_POST['password'],FILTER_SANITIZE_STRING);
                if(isset($_POST['telefono']))    
    				$telefono = filter_var($_POST['telefono'],FILTER_SANITIZE_STRING);
                if(isset($_FILES['archivo'])){
                    $ruta = "./CV_Profs/".$_FILES['archivo']['name'];
                    if(!move_uploaded_file($_FILES['archivo']['tmp_name'],$ruta))
                        $result["error"][4]="Error al subir el archivo";
                }
				if(empty($email) or empty($pass) or empty($nombre)){
					$result["error"][0]="Es necesario que se llenen todos los campos.";
				}elseif (valEmail($email)) {

					$result["error"][1]="Formato de correo invalido. \n Intente: example@ejemplo.com";

				}else if(valPass($pass)){
					$result["error"][1]="Formato invalido de contraseña.\nLa contraseña debe tener al menos 6 carácteres, una mayúscula, una minúscula, un número y un símbolo especial.";
				}else{
					$conexion = conexion();
					if ($conexion) {
						$statement = $conexion->prepare('SELECT * FROM profesor Where email = :email LIMIT 1');
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
							$insert = 'INSERT INTO profesor VALUES ("'.$email.'","'.$nombre.'","'.$pass.'")';
						else
							$insert = 'INSERT INTO profesor VALUES ("'.$email.'","'.$nombre.'","'.$pass.'","'.$telefono.'")';
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
			}else{
                $result["error"][0]=isset($_POST['email']);
            }
			echo json_encode($result);
		}
	}
	else
	header('Location: index.php');
 ?>