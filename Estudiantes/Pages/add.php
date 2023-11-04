<?php

require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../../Metodos.php');

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

$ModeloMetodos = new Metodos();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistemas de Notas Estdiantes - Agregar</title>
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
                <h1 class="tituloPrincipal"> Registrar Estudiantes </h1>
            </div>
        </section>
        <form method="POST" action="../Controlador/add.php">
      <label>Nombre</label>
			<input type="text" name="Nombre" class="input-padron" required="" autocomplete="off" > <br>
			<label >Apellido</label>
			<input type="text" name="Apellido" class="input-padron" required="" autocomplete="off"> <br>
			<label for="Documento">Documento</label>
			<input type="text" name="Documento" class="input-padron" required="" autocomplete="off"> <br>
			<label for="Correo">Correo</label>
			<input type="email" name="Correo" class="input-padron" required="" autocomplete="off"> <br>
			<label for="Materia">Materia</label>
			<select name="Materia" class="input-padron" required="">
				<option>Seleccionar</option>
				<?php
				$Materias = $ModeloMetodos->getMaterias();
				if($Materias != null){
					foreach($Materias as $Materia){
						?>
						<option value="<?php echo $Materia['MATERIA']; ?>"> <?php echo $Materia['MATERIA']; ?> </option>
					<?php
					}
				}
				?>
			</select>
			<label for="Docente">Docente</label>
			<select name="Docente" class="input-padron" required="">
				<option>Seleccionar</option>
				<?php
				$Docentes = $ModeloMetodos->getDocentes();
				if($Docentes != null){
					foreach($Docentes as $Docente){
						?>
						<option value="<?php echo $Docente['NOMBRE'] . ' '. $Docente['APELLIDO']; ?>"><?php echo $Docente['NOMBRE'] . ' '. $Docente['APELLIDO']; ?></option>
						<?PHP
					}
				}
				?>	
			</select>
			<label for="Promedio">Promedio</label>
			<input type="number" name="Promedio" class="input-padron" required="" autocomplete="off"> <br>
			<input type="submit" value="Registrar Estudiante" class="enviar">
        </form>
    </main>
    <footer>
      <p class="copyright">&copy Copyrigth BRIAN-DEV- 2023</p>
    </footer>
</body>
</html>