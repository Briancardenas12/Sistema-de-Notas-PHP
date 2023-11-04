<?php  

require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Estudiantes.php');
require_once('../../Metodos.php');

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios->validateSession();

$Modelo = new Estudiantes();
$Id = $_GET['Id'];
$InformacionEstudiantes = $Modelo->getBytId($Id);

$ModeloMetodos = new Metodos();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistemas de Notas Estdiantes - Editar</title>
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
                <h1 class="tituloPrincipal"> Editar Estudiantes </h1>
            </div>
        </section>
        <form method="POST" action="../Controlador/edit.php">
        	<input type="hidden" name="Id" value="<?php echo $Id; ?>"> <br>
        	<?php
        	if($InformacionEstudiantes != null){
        		foreach($InformacionEstudiantes as $Info){	
        	?>
        	<label for="Nombre">Nombre</label>
					<input type="text" name="Nombre" class="input-padron" required="" autocomplete="off" placeholder="Nombre" value="<?php echo $Info['NOMBRE'] ?>"> <br>
					<label for="Apellido">Apellido</label>
					<input type="text" name="Apellido" class="input-padron" required="" autocomplete="off" placeholder="Apellido" value="<?php echo $Info['APELLIDO'] ?>"> <br>
					<label for="Documento">Documento</label>
					<input type="text" name="Documento" class="input-padron" required="" autocomplete="off" placeholder="Cédula" value="<?php echo $Info['DOCUMENTO'] ?>"> <br>
					<label for="Correo">Correo</label>
					<input type="email" name="Correo" class="input-padron" required="" autocomplete="off" placeholder="email@dominio.com" value="<?php echo $Info['CORREO'] ?>"> <br>
					<label for="Materia">Materia</label>
					<select name="Materia" class="input-padron" required="">
						<option value="<?php echo $Info['MATERIA'] ?>"><?php echo $Info['MATERIA'] ?></option>
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
						<option value="<?php echo $Info['DOCENTE'] ?>"><?php echo $Info['DOCENTE'] ?></option>
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
					<input type="number" name="Promedio" class="input-padron" required="" autocomplete="off" placeholder="Promedio" value="<?php echo $Info['PROMEDIO'] ?>"> <br>
					<?php
							 }
					}
					?>
					<input type="submit" value="Editar Estudiante" class="enviar">
        </form>
    </main>
    <footer>
      <p class="copyright">&copy Copyrigth BRIAN-DEV- 2023</p>
    </footer>
</body>
</html>