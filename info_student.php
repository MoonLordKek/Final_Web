<?php session_start();

	if(isset($_SESSION['boleta'])){
			
		require 'funciones.php';
		$conexion = conexion();
		$statement = $conexion->prepare('SELECT NoTT,rol_a FROM tt_alumno WHERE boletaA = :boleta');
		$statement->execute(array(':boleta' => $_SESSION['boleta']));
		$resultado = $statement->fetch();
		if($resultado[1]==0)
			$rol = "Lider";
		else
			$rol = "Integrante";
		
		if($resultado!=false){
			$integrantes = array();
			$sinodales = array();
			$directivos = array();
			$statement = $conexion->prepare('SELECT tt.*,alumnos.nombre,alumnos.boleta,tt_alumno.* FROM tt_alumno JOIN tt ON tt.NumeroTT=tt_alumno.NoTT JOIN alumnos ON alumnos.boleta=tt_alumno.boletaA WHERE NoTT=:nott ORDER BY rol_a');
			$statement->execute(array(':nott' => $resultado[0]));
			$resultado2 = $statement->fetch();
			$res = $resultado2;
			if($resultado2[4]!=0){
				while($resultado2!=false){
					array_push($integrantes,$resultado2[5]);
					$resultado2 = $statement->fetch();
				}
			
				$statement = $conexion->prepare('SELECT tt_profesor.*,profesor.nombre FROM tt_profesor JOIN profesor ON profesor.boleta=tt_profesor.boletaP WHERE NoTT=:nott ORDER BY rol ASC');
				$statement-> execute(array(':nott'=>$resultado[0]));
				while(($resultado2=$statement->fetch())!=false){
					if($resultado2[3]!=0)
						array_push($directivos,$resultado2[4]);
					else
						array_push($sinodales,$resultado2[4]);
				}
			}else
				$result['errores']="Su protocolo aún no está aceptado";
			
		}else{
			$result['errores']="No hay protócolo inscrito";
		}
		
		require ('views/info_student.view.php');	
	}else
		header('Location: index.php');
 ?>