<?php  

require_once('../../Usuarios/Modelo/Usuarios.php');

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios-> validateSession();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistemas de Notas Docente - Agregar</title>
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
                <h1 class="tituloPrincipal"> Registrar Docente </h1>
            </div>
            <form method="POST" action="../Controlador/add.php">
            	<label for="Nombre">Nombre</label>
				<input type="text" name="Nombre" class="input-padron" required="" autocomplete="off"> <br>
				<label for="Apellido">Apellido</label>
				<input type="text" name="Apellido" class="input-padron" required="" autocomplete="off"> <br>
				<label for="Usuario">Usuario</label>
				<input type="text" name="Usuario" class="input-padron" required="" autocomplete="off"> <br>
				<label for="Password">Password</label>
				<input type="password" name="Password"class="input-padron" required="" autocomplete="off"><br>
				<input type="submit" value="Registrar Docente" class="enviar">
            </form>
        </section>
    </main>
    <footer>
      <p class="copyright">&copy Copyrigth BRIAN-DEV- 2023</p>
    </footer>
</body>
</html>