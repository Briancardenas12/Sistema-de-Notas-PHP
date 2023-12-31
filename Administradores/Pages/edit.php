<?php

require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Administradores.php');

$ModeloUsuarios = new Usuarios();
$ModeloAdministradores = new Administradores();

$ModeloUsuarios->validateSession();

$Id = $_GET['Id'];

$Administradores = $ModeloAdministradores->getById($Id);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistemas de Notas Administrador - Editar</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../css/style_form.css" />
</head>
<body>
	<header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #151859;">
            <div class="container">
              <a class="navbar-brand" href="#">BRIAN DEV</a>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contactos</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    </header>
    <main>
    	<section class="principal">
            <div>
                <h1 class="tituloPrincipal"> Editar Administador </h1>
            </div>
            <form method="POST" action="../Controlador/edit.php">
              <?php  
              if($Administradores != null){
                foreach($Administradores as $Info){
              ?>
                <input type="hidden" name="Id" value="<?php echo $Id; ?>"> <br>
              	<label for="Nombre">Nombre</label>
        				<input type="text" name="Nombre" class="input-padron" required="" autocomplete="off" value="<?php echo $Info['NOMBRE']; ?>"> <br>
        				<label for="Apellido">Apellido</label>
        				<input type="text" name="Apellido" class="input-padron" required="" autocomplete="off" value="<?php echo $Info['APELLIDO']; ?>"> <br>
        				<label for="Usuario">Usuario</label>
        				<input type="text" name="Usuario" class="input-padron" required="" autocomplete="off" value="<?php echo $Info['USUARIO']; ?>"> <br>
        				<label for="Password">Password</label>
        				<input type="password" name="Password"class="input-padron" required="" autocomplete="off" value="<?php echo $Info['PASSWORD']; ?>"><br>
                        <label for="Estado">Estado</label>
                        <select name="Estado" class="input-padron" required="">
                            <option value="<?php echo $Info['ESTADO']; ?>"><?php echo $Info['ESTADO']; ?></option>
                            <option value="Activo">Activo</option>
                            <option value="Inactivo">Inactivo</option>
                        </select>
              <?php
                  }
              }
              ?>
				<input type="submit" value="Editar Administrador" class="enviar">
            </form>
        </section>
    </main>
    <footer>
      <p class="copyright">&copy Copyrigth BRIAN-DEV- 2023</p>
    </footer>
</body>
</html>