<?php session_start();
	
	if(isset($_SESSION['boleta'])){
		require 'funciones.php';
		if($_SERVER['REQUEST_METHOD']=='GET'){
			$conexion = conexion();	
			$statement = $conexion->prepare('SELECT * FROM tt_alumno WHERE boletaA = :boleta');
			$statement->execute(array(':boleta' => $_SESSION['boleta']));
			$resultado = $statement->fetch();
			if($resultado!=false)
				header('Location: inscrito_protocolo.php');
			else
				require ('views/protocolo_registro.view.php');

		}else{
			$result['resul'] =false;
			$ruta = "./ArchivosProtocolo/";
			if(isset($_POST['titulo']) && isset($_POST['desc'])){
				$errores = '';
				if(empty($_POST['titulo']) or empty($_POST['desc']) or empty($_POST['nombre-2']) or empty($_POST['nombre-3'])){
					$result["error"][0]="Es necesario que se llenen los campos titulo y descripción; y al menos 3 alumnos.";
				}else if($_FILES['archivo']['type']!="application/pdf"){
					echo $result["error"][1]="Es necesario que se suba un archivo pdf";
				}else{
					if(move_uploaded_file($_FILES['archivo']['tmp_name'],$ruta.$_FILES['archivo']['name'])!=false){
						$conexion = conexion();
						if ($conexion) {
							$flag=true;
							$value = 3;
							$alumnos = array($_SESSION['usuario'],$_POST['nombre-2'],$_POST['nombre-3']);
							$boletas = array($_SESSION['boleta'],$_POST['boleta-2'],$_POST['boleta-3']);
							if(!empty($_POST['nombre-4'])){
								array_push($alumnos,$_POST['nombre-4']);
								array_push($boletas,$_POST['boleta-4']);
								$value = 4;
							}
							for($i = 0 ; $i < $value ; $i++){
								$statement = $conexion->prepare('SELECT * FROM alumnos Where nombre = :nombre LIMIT 1');
								$statement->execute(array(':nombre' => $alumnos[$i]));
								$resultado = $statement->fetch();
								if($resultado==false){
									$result["error"][3]="El alumno ".($i+1)." no existe";
									break;
									$flag=false;
								}
							}
						} else {
							$result["error"][2]="Error al conectar a la base de datos.";
						}
						$conexion = null;
					}else
						$result["error"][4]="Error al subir el archivo.";
				} 
				if (isset($flag) && $flag) {
					$conexion = conexion();
					$statement = $conexion->prepare('SELECT NumeroTT FROM tt ORDER BY NumeroTT DESC LIMIT 1');
					$statement->execute();
					$fet = $statement->fetch();
					if ($fet)
						$tmp = intval(substr($fet[0],6))+1;
					else
						$tmp = "1";
					$half = 1;
					if(date('m')<=6){
						$half = 2;
					}
					if($tmp<10){						
						$numTT = date('Y')."-".$half."0".$tmp;
					}else{
						$numTT = date('Y')."-".$half.$tmp;
					}
					$query = 'INSERT INTO tt VALUES ("'.$numTT.'",0,"'.$_POST['titulo'].'","'.$_POST['desc'].'",0)';
					if($conexion->query($query)!=false){
						for($i = 0 ; $i < $value ; $i++){
							if($i==0)
								$rol = 0;
							else
								$rol = 1;
							$query = 'INSERT INTO tt_alumno (boletaA,NoTT,rol_a) VALUES ("'.$boletas[$i].'","'.$numTT.'",'.$rol.')';
							$conexion->query($query);
						}
					}
					$result['resul']=true;
				}
			}
			echo json_encode($result);
		}
	}
 ?>