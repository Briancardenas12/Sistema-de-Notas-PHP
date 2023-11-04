<?php 

require_once('../Modelo/Usuarios.php');

if($_POST){
	$Usuario = $_POST['Usuario'];
	$Password = $_POST['Contrasena'];

	$Modelo = new Usuarios();
	if($Modelo->login($Usuario, $Password)){
		header('Location: ../../Estudiantes/Pages/index.php');
	}
	else{
		header('Location: ../../index.php');
	}	
}
else{
	header('Location: ../../index.php');
}

?>