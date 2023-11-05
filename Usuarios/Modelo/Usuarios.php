<?php
require_once('../../conexion.php');
session_start();

class Usuarios extends Conexion{

	public function __construct(){
		$this->db = parent::__construct();
	}

	public function login($Usuario, $Password){
		$statement = $this->db->prepare("SELECT * FROM usuarios WHERE USUARIO = :usuario AND PASSWORD = :password");
		$statement->bindParam(':usuario', $Usuario);
		$statement->bindParam(':password', $Password);
		$statement->execute();
		if($statement->rowCount() == 1){
			$result = $statement->fetch();
			$_SESSION['NOMBRE']= $result['NOMBRE']. " ". $result["APELLIDO"];
			$_SESSION['ID']= $result['ID_USUARIO'];
			$_SESSION['PERFIL']= $result['PERFIL'];
			return true;
		}
		return false;
	}


	public function getNombre(){
		return $_SESSION['NOMBRE'];
	}

	public function getId(){
		return $_SESSION['ID'];
	}

	public function getPerfil(){
		return $_SESSION['PERFIL'];
	}

	public function validateSession(){
		if($_SESSION['ID'] == null){
			header('Location: ../../index.php');
		}
	}

	public function validateSessionAdministrador(){
		if($_SESSION['ID'] != null){
			if($_SESSION['PERFIL'] == 'Docente'){
				header('Location: ../../Estudiantes/Pages/index.php');
			}

		}
	}

	public function salir(){
		$_SESSION['ID'] = null;
		$_SESSION['NOMBRE'] = null;
		$_SESSION['PERFIL'] = null;
		session_destroy();
		header('Location: ../../index.php');
	}
}
?>