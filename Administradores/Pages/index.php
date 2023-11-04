<?php
require_once('../../Usuarios/Modelo/Usuarios.php');
require_once('../Modelo/Administradores.php');

$ModeloUsuarios = new Usuarios();
$ModeloUsuarios-> validateSession();

$ModeloAdministradores = new Administradores();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sistemas de Notas Administrador - Tabla</title>
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
                <h1 class="tituloPrincipal"> Tabla Administradores</h1>
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
                    $Administradores = $ModeloAdministradores->get();
                    if($Administradores != null){
                        foreach($Administradores as $Administrador){
                    ?>
                    <tbody>
                        <tr>
                            <td> <?php echo $Administrador['ID_USUARIO']; ?> </td>
                            <td><?php echo $Administrador['NOMBRE']; ?></td>
                            <td><?php echo $Administrador['APELLIDO']; ?></td>
                            <td><?php echo $Administrador['USUARIO']; ?></td>
                            <td><?php echo $Administrador['PERFIL']; ?></td>
                            <td><?php echo $Administrador['ESTADO']; ?></td>
                            <td>
                                <button type="button" class="btn btn-warning"><a href="edit.php?Id=<?php echo $Administrador['ID_USUARIO']; ?>" target="_blank">Editar</a></button>
                                <button type="button" class="btn btn-danger"><a href="delete.php?Id=<?php echo $Administrador['ID_USUARIO']; ?>" target="_blank">Eliminar</a></button>
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