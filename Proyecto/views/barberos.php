<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.jpg">
    <link rel="stylesheet" href="../css/2perfil2.css">
    <link rel="stylesheet" href="/Proyecto/js/bootstrap.bundle.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="/Proyecto/css/bootstrap.min.css">
        <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Classic Cuts</title>
</head>
<?php
$DateAndTime = Date('Y-d-m');
         use Barberia\Query\Select;
         require("../vendor/autoload.php");

        $query =new Select();
        
         $cadena="SELECT * from cuenta where nombre_usuario='XxMarcelaxX'";

         $tabla=$query->seleccionar($cadena);
        
        foreach($tabla as $row)
         {
            $nombre_usuario=$row->nombre_usuario;
            $nombre=$row->nombre;
            $direccion=$row->direccion;
            $telefono=$row->telefono;
            $email=$row->correo;
         }
         ?>

<body>
    <!--Seccion de Encabezado-->
  <header id="header">
    <div class="d-flex flex-column">
        <div class="profile">
        <?php
        $query = new Select();
        $cadena="SELECT * from cuenta where nombre_usuario='XxMarcelaxX'";
        $tabla = $query->seleccionar($cadena);
        foreach($tabla as $registro)
        {
            if(!isset($registro->imagen_cuenta))
            {
                echo"<td> <img width=15% src='/Proyecto/img/perfil.jfif'</td>";
            }
            else{
            echo"<td> <img width=15% src='/Proyecto"."/$registro->imagen_cuenta"."'</td>";
            echo"</tr>";
        }
        }
        ?>
        
            <h1 class="text-light"><a href="#" ></a></h1>
            <div class="social-links mt-3 text-center">
                <a href="https://www.facebook.com/profile.php?id=100063500375166" class="Facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://www.instagram.com/Classic.Cuts_Barberia/?fbclid=IwAR3gMkl_NnnES0o54LZS4fWnokOArjdW6ZnlnB3OPtGaO_Nc1Md9iKvevKE" class="Instagram"><i class="bi bi-instagram"></i></a>
            </div>
        </div>
        <!--Menu de Navegacion-->
        <nav class="nav-menu" id="men">
            <ul>
                <li class="active"><a href="#"><i class="bi bi-house-door-fill"></i><span>Home</span></a></li>
                <li><a href="#citas"><i class="bi bi-calendar-event-fill"></i><span>Citas</span></a></li>
                <li><a href="#perfil"><i class="bi bi-person-fill"></i><span>Perfil</span></a></li>
                <li><a href="#historial"><i class="bi bi-envelope-fill"></i><span>Historial</span></a></li>

                <li><a href="/Proyecto/index.php">Inicio</a></li>
                
                

            </ul>
        </nav> <!--fine de menu de navegacion-->
        <div class="container mt-3 d-lg-none mobile-nav-toggle">

  <div class="dropdown dropend">
    <button type="button" class="btn  dropdown-toggle btn-outline-dark " data-bs-toggle="dropdown">
   </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#home">Home</a></li>
      <li><a class="dropdown-item " href="#citas">Citas</a></li>
      <li><a class="dropdown-item " href="#perfil">Perfil</a></li>
      <li><a class="dropdown-item" href="#historial">Historial</a></li>

    </ul>
  </div>
</div>
        
    </div>
  </header><!--Fin de menu de navegacion-->
  <!--Hero Section-->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
        <div class="typing">
            <pre class="text-uppercase">Bienvenido</pre>
            <pre class="text-uppercase"><?php echo"$nombre"; ?></pre>
        </div>
    </div>
  </section>
  <!--Tienda-->
    <!--Citas-->  
    <main id="main">
    <div class="container" id="citas">
          <section>
              <h2>Citas</h2>
              <div class="row">
                <div class="col-12">
                  <fieldset>
                  <?php
        $query = new Select();

        $cadena = "SELECT c.nombre_usuario,servicios.nombre_servicio,citas.hora_cita,citas.fecha from cuenta c INNER JOIN usuario us 
        on c.nombre_usuario=us.cuenta_U INNER JOIN citas on us.id_usuario=citas.Usuario_C INNER JOIN servicio_cita ser on citas.id_citas=ser.dt_cita INNER JOIN servicios 
        on ser.servicio_sc=servicios.id_servicio where citas.fecha='$DateAndTime'";
        $tabla = $query->seleccionar($cadena);
        echo"<table class='table table-hover'>
        <thead class='table-dark'>
        <tr>
        <th>USUARIO</th><th>SERVICIO</th><th>HORA_CITA</th>
        </tr>
        </thead>
         ";
        foreach($tabla as $registro)
        { 
          echo "<tr>";
          echo"<td>$registro->nombre_usuario";
          echo"<td>$registro->nombre_servicio";
          echo"<td>$registro->hora_cita";
          echo "</tr>";
        }
        "</tbody>
        </table>";
              ?>
                  </fieldset>
                </div>
              </div>
      </div>
        </section>
    </div>
    <!--Perfil-->
        <br>
        <div id="perfil" class="container "> 
            <section >
                <h2 >Perfil</h2>
                <br>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="card mb-4">
                      <?php
        $query = new Select();
        $cadena="SELECT * from cuenta where nombre_usuario='XxMarcelaxX'";
        $tabla = $query->seleccionar($cadena);
        foreach($tabla as $registro)
        {
            if(!isset($registro->imagen_cuenta))
            {
                echo"<td> <img width=15% src='/Proyecto/img/perfil.jfif'</td>";
            }
            else{
            echo"<td> <img width=15% src='/Proyecto"."/$registro->imagen_cuenta"."'</td>";
            echo"</tr>";
        }
        }
        ?>
                        <div class="card-body text-center">
                          <h5 class="my-3"><?php echo"$nombre_usuario"; ?></h5>
                          <p class="text-muted mb-1">Barbero</p>
                       
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="card mb-4">
                        <div class="card-body">
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Nombre completo</p>
                            </div>
                            <div class="col-sm-5">
                              <p class="text-muted mb-0"><?php echo"$nombre"; ?></p>
                            </div>
                            <div class="col-sm-4"><button type='button' class='btn btn-outline-primary'data-bs-toggle='modal' data-bs-target='#nombre'>Modificar</button></div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-5">
                              <p class="text-muted mb-0"><?php echo"$email"; ?></p>
                            </div>
                            <div class="col-sm-4">
                            <button type='button' class='btn btn-outline-primary'data-bs-toggle='modal' data-bs-target='#email'>Modificar</button>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">numero</p>
                            </div>
                            <div class="col-sm-5">
                              <p class="text-muted mb-0"><?php echo"$telefono"; ?></p>
                            </div>
                            <div class="col-sm-4">
                            <button type='button' class='btn btn-outline-primary'data-bs-toggle='modal' data-bs-target='#telefono'>Modificar</button>
                            </div>
                          </div>
                          <hr>
                         
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">direccion</p>
                            </div>
                            <div class="col-sm-5">
                              <p class="text-muted mb-0"><?php echo"$direccion"; ?></p>
                            </div>
                            <div class="col-sm-4">
                            <button type='button' class='btn btn-outline-primary' data-bs-toggle='modal' data-bs-target='#direccion'>Modificar</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
        </div>
              </section>
        </div>
          <div class="container" id="historial">
            <section>
              <h3>Historial</h3>
            </section>
          </div>
</main>
<br>
<!-- Modals -->
<!-- Usuario -->
<div class="modal fade" id="usuario" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <form action="/Proyecto/views/scripts/Modificar/nombre.php" method="POST">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Nombre de usuario:</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Ingresa nuevo nombre de usuario:</p>
        <input type="text" class="form-control col-md-12" name="usuario">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
  </form>
</div>
    <!-- NOMBRE -->
    <div class="modal fade" id="nombre" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="/Proyecto/views/scripts/Modificar/nombre.php" method="POST">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar Nombre</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Ingresa nuevo nombre:</p>
        <input type="text" class="form-control col-md-12" name="nombre">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
  </form>
</div>
    <!-- DIRECCION -->
    <div class="modal fade" id="direccion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="/Proyecto/views/scripts/Modificar/direccion.php" method="POST">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar direccion</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Ingresa nueva direccion:</p>
        <input type="text" class="form-control col-md-12" name="direccion">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
      </form>
</div>
    <!-- TELEFONO -->
    <div class="modal fade" id="telefono" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="/Proyecto/views/scripts/Modificar/telefono.php" method="POST">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar telefono</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Ingresa nuevo telefono:</p>
        <input type="text" class="form-control col-md-12" name="telefono">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
  </div>
      </form>
</div>
    <!-- EMAIL -->
    <div class="modal fade" id="email" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <form action="/Proyecto/views/scripts/Modificar/mail.php" method="POST">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modificar email</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Ingresa nuevo e-mail:</p>
        <input type="email" class="form-control col-md-12" name="mail">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
      </div>
    </div>
    </form>
  </div
</body>
</html>