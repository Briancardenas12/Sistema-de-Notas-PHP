<?php  

require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Docentes.php');

$ModeloUsuarios = new Usuarios();
$ModeloDocentes = new Docentes();

$ModeloUsuarios-> validateSessionAdministrador();

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistemas de Notas Docentes - Tabla</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../css/style_form.css" />
    <link rel="stylesheet" href="../../css/style_table.css" />
</head>
<body>
	<header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #151859;">
            <div class="container">
              <a class="navbar-brand" href="#">BRIAN DEV</a>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="../../Estudiantes/Pages/index.php">Estudiantes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Docentes</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../Administradores/Pages/index.php">Administradores</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../Materias/Pages/index.php">Materias</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contactos</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="../../Usuarios/Controlador/Salir.php">Salir</a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    </header>
    <main>
    	<section class="principal">
            <div>
                <h1 class="tituloPrincipal"> Tabla Docentes</h1>
                <h3 class="tituloSecundario"><?php echo $ModeloUsuarios->getNombre(); ?> - <?php echo $ModeloUsuarios->getPerfil(); ?></h3>
            </div>
        </section>
        <section>
            <div class="contenedor">
                <button type="button" class="btn btn-primary"><a href="add.php" target="_blank">Agregar</a></button>
            </div>
            <div class="contenedor">
                <table border="3">
                    <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Usuario</th>
                                <th>Perfil</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                    </thead>
                    <?php
                    $Docentes = $ModeloDocentes->get();
                    if($Docentes != null){
                        foreach($Docentes as $Docente){
                    ?>
                    <tbody>
                        <tr>
                            <td><?php echo $Docente['ID_USUARIO']; ?></td>
                            <td><?php echo $Docente['NOMBRE']; ?></td>
                            <td><?php echo $Docente['APELLIDO']; ?></td>
                            <td><?php echo $Docente['USUARIO']; ?></td>
                            <td><?php echo $Docente['PERFIL']; ?></td>
                            <td><?php echo $Docente['ESTADO']; ?></td>
                            <td>
                                <button type="button" class="btn btn-warning"><a href="edit.php?Id=<?php echo $Docente['ID_USUARIO']; ?>" target="_blank">Editar</a></button>
                                <button type="button" class="btn btn-danger"><a href="delete.php?Id=<?php echo $Docente['ID_USUARIO']; ?>" target="_blank">Eliminar</a></button>
                            </td>
                        </tr>
                    </tbody>
                    <?php
                        }
                    }
                    ?>
                </table>
            </div>
    	</section>
    </main>
    <footer>
      <p class="copyright">&copy Copyrigth BRIAN-DEV- 2023</p>
    </footer>
</body>
</html>