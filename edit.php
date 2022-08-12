<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$ci = $_POST['ci'];
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$departamento = $_POST['departamento'];
		$cargo = $_POST['cargo'];
		$usuario = $_POST['usuario'];
		$sql = "UPDATE usuarios_dominio SET ci = '$ci', nombre = '$nombre', apellidos = '$apellidos', departamento = '$departamento', cargo = '$cargo', usuario = '$usuario' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Usuario actualizado satisfactoriamente';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: usuarios_dominio.php');

?>