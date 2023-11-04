<?php

require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Materias.php');
$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

$Modelo = new Materias();

$Id = $_GET['Id'];
$InformacionMaterias = $Modelo->getById($Id);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistemas de Notas Materia - Editar</title>
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
                <h1 class="tituloPrincipal"> Editar Materias </h1>
            </div>
        </section>
        <form method="POST" action="../Controlador/edit.php">
          <input type="hidden" name="Id" value="<?php echo $Id; ?>">
          <?php
          if($InformacionMaterias != null){
            foreach($InformacionMaterias as $Info){ 
          ?>
          <label for="Nombre">Nombre</label>
          <input type="text" name="Nombre" class="input-padron" required="" autocomplete="off" value="<?php echo $Info['MATERIA'] ?>"> <br>
          <?php
              }
          }
          ?>
          <input type="submit" value="Editar Materia" class="enviar">
        </form>
    </main>
     <footer>
      <p class="copyright">&copy Copyrigth BRIAN-DEV- 2023</p>
    </footer>
</body>
</html>