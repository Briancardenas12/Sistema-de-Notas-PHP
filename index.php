<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistemas de Notas</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/style_form.css" />
	<link rel="stylesheet" href="css/style_form_session.css" />
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
                <h1 class="tituloPrincipal"> Iniciar Sesión </h1>
            </div>
        </section>
		<form method="POST" action="Usuarios/Controlador/Login.php">
			<label for="Usuario">Usuario</label>
			<input type="text" name="Usuario" class="input-padron"required="" autocomplete="off" placeholder="Usuario"> <br>
			<label for="Contrasena">Contrasena</label>
			<input type="password" name="Contrasena"class="input-padron" required="" autocomplete="off" placeholder="Contrasena"><br>
			<input type="submit" value="Iniciar Sesión" class="enviar">
		</form>
	</main>
	<footer>
      <p class="copyright">&copy Copyrigth BRIAN-DEV- 2023</p>
    </footer>
</body>
</html>