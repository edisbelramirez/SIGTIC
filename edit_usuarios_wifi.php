<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$tipo = $_POST['tipo'];
		$modelo = $_POST['modelo'];
		$imei = $_POST['imei'];
		$direccion_ip = $_POST['direccion_ip'];
		$direccion_mac= $_POST['direccion_mac'];
		$numero_asociado = $_POST['numero_asociado'];
		$sql = "UPDATE usuarios_wifi SET nombre = '$nombre', apellidos = '$apellidos', tipo = '$tipo', modelo = '$modelo', imei = '$imei', direccion_ip = '$direccion_ip', direccion_mac = '$direccion_mac', numero_asociado = '$numero_asociado' WHERE id = '$id'";

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

	header('location: usuarios_wifi.php');

?>