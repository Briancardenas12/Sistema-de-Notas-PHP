<?php 

require_once('../Modelo/Administradores.php');

if($_POST){

	$Modelo = new Administradores();

	$Id= $_POST['Id'];
	$Modelo->delete($Id);
}
else{
	header('Location: ../../index.php');
}

?>