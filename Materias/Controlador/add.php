<?php  
require_once('../Modelo/Materias.php');

if($_POST){

	$ModeloMaterias = new Materias();

	$Nombre = $_POST['Nombre'];
	$ModeloMaterias->add($Nombre);
}
else{
	header('Location: ../../index.php');
}
?>