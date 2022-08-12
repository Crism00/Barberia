<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.jpg">
    <link rel="stylesheet" href="../css/2perfil2.css">
    <link rel="stylesheet" href="../js/bootstrap.bundle.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
        <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Classic Cuts</title>
</head>
<?php
         use MyAPP\Query\Select;
         require("../vendor/autoload.php");

        $query =new Select();
        
         $cadena="SELECT cuenta.nombre, concat(cuenta.nombre,' ',cuenta.ap_paterno,' ',cuenta.ap_materno)as completo,
         cuenta.direccion,cuenta.telefono,cuenta.correo FROM cuenta INNER JOIN usuario
         on cuenta.nombre_usuario=usuario.cuenta_U where usuario.id_Usuario=3 and cuenta.tipo_cuenta='Usuario'";

         $tabla=$query->seleccionar($cadena);
        
        foreach($tabla as $row)
         {
            $nombre=$row->nombre;
            $completo=$row->completo;  
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
            <img src="../../Bootstrap/IMG/R.jfif" alt="" class="img-fluid rounded-circle mt-3">
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
                <li><a href="#productos"><i class="bi bi-scissors"></i><span>Tienda</span></a></li>
                <li><a href="#citas"><i class="bi bi-calendar-event-fill"></i><span>Citas</span></a></li>
                <li><a href="#perfil"><i class="bi bi-person-fill"></i><span>Perfil</span></a></li>
                <li><a href="#historial"><i class="bi bi-envelope-fill"></i><span>Historial</span></a></li>
                <li><a href="#contactanos"><i class="bi bi-envelope-fill"></i><span>Contactanos</span></a></li>
                

            </ul>
        </nav> <!--fine de menu de navegacion-->
        <div class="container mt-3 d-lg-none mobile-nav-toggle">

  <div class="dropdown dropend">
    <button type="button" class="btn  dropdown-toggle btn-outline-dark " data-bs-toggle="dropdown">
   </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Home</a></li>
      <li><a class="dropdown-item " href="#productos">Tienda</a></li>
      <li><a class="dropdown-item " href="#citas">Citas</a></li>
      <li><a class="dropdown-item " href="#perfil">Perfil</a></li>
      <li><a class="dropdown-item" href="#historial">Historial</a></li>
      <li><a class="dropdown-item" href="#contactanos">Contactanos</a></li>

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
  <br>
  <main id="main">

    <section id="productos" class="productos">
        <div class="container">
         
                <h2>Tienda</h2>
                <p>Contamos con variedad de productos</p>
            
       
        <div class="d-flex justify-content-center row">
            <div class="col-md-10">
                <div class="row p-2 bg-white border rounded">
                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="https://i5.walmartimages.com/asr/1e60d9e2-3af6-49c9-94b8-e06a41f40d7d.934132c21c9cf35f932b6c3b1ea4574f.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF"></div>
                    <div class="col-md-6 mt-1">
                        <h5>Dammyty Hair Clippers</h5>
                        <div class="d-flex flex-row ratings mt-2 text-warning">
                            <span><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></span>
                            </div>
                        <p class="text-justify">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                             by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                    </div>
                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                        <div class="d-flex flex-row align-items-center">
                            <h4 class="mr-1">$18.56</h4><span><del>$49.08</del> </span>
                        </div>
                        <h6 class="text-success">Recoger en tienda!</h6>
                        <div class="d-flex flex-column mt-4"><button class="btn btn-outline-primary btn-sm mt-2" type="button">Añadir al Carrito</button></div>
                    </div>
                </div>

                <div class="row p-2 bg-white border rounded">
                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="https://i5.walmartimages.com/asr/37c95d06-4ef8-4ea3-9a3c-bcd20a3e7067.33c2351c16c4c79e1fd65ba4cc325101.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF"></div>
                    <div class="col-md-6 mt-1">
                        <h5>Viking Revolution 4 Beard Balm Wax</h5>
                        <div class="d-flex flex-row ratings mt-2 text-warning">
                            <span><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></span>
                            </div>
                        <p class="text-justify">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                             by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                    </div>
                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                        <div class="d-flex flex-row align-items-center">
                            <h4 class="mr-1">$18.88</h4>
                        </div>
                        <h6 class="text-success">Recoger en tienda!</h6>
                        <div class="d-flex flex-column mt-4"><button class="btn btn-outline-primary btn-sm mt-2" type="button">Añadir al Carrito</button></div>
                    </div>

                </div>  
                <div class="row p-2 bg-white border rounded">
                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="https://i5.walmartimages.com/asr/7e25421d-f93d-4706-a44c-ed4d8461be6d.22a28d04e3d25120b54449058eb335e2.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF"></div>
                    <div class="col-md-6 mt-1">
                        <h5>Dry Shampoo Paste</h5>
                        <div class="d-flex flex-row ratings mt-2 text-warning">
                            <span><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></span>
                            </div>
                        <p class="text-justify">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                             by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                    </div>
                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                        <div class="d-flex flex-row align-items-center">
                            <h4 class="mr-1">$32.99</h4>
                        </div>
                        <h6 class="text-success">Recoger en tienda!</h6>
                        <div class="d-flex flex-column mt-4"><button class="btn btn-outline-primary btn-sm mt-2" type="button">Añadir al Carrito</button></div>
                    </div>
                </div>  
                
                <div class="row p-2 bg-white border rounded">
                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="https://i5.walmartimages.com/asr/1aabe33f-bcb6-46e8-baa6-eeb68afa4de6_1.4a1386403227376c297e0d4590d3a2ac.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF"></div>
                    <div class="col-md-6 mt-1">
                        <h5>Shaving Razor Blade SR-SC1200</h5>
                        <div class="d-flex flex-row ratings mt-2 text-warning">
                        <span><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></span>
                        </div>
                        <p class="text-justify">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                             by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                    </div>
                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                        <div class="d-flex flex-row align-items-center">
                            <h4 class="mr-1">$9.17</h4><span><del>$13.99</del> </span>
                        </div>
                        <h6 class="text-success">Recoger en tienda!</h6>
                        <div class="d-flex flex-column mt-4"><button class="btn btn-outline-primary btn-sm mt-2" type="button">Añadir al Carrito</button></div>
                    </div>
                </div>  
                
                <div class="row p-2 bg-white border rounded">
                    <div class="col-md-3 mt-1"><img class="img-fluid img-responsive rounded product-image" src="https://i5.walmartimages.com/asr/1e60d9e2-3af6-49c9-94b8-e06a41f40d7d.934132c21c9cf35f932b6c3b1ea4574f.jpeg?odnHeight=612&odnWidth=612&odnBg=FFFFFF"></div>
                    <div class="col-md-6 mt-1">
                        <h5>Dammyty Hair Clippers</h5>
                        <div class="d-flex flex-row ratings mt-2 text-warning">
                            <span><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i><i class="bi bi-star"></i></span>
                            </div>
                        <p class="text-justify">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form,
                             by injected humour, or randomised words which don't look even slightly believable.<br><br></p>
                    </div>
                    <div class="align-items-center align-content-center col-md-3 border-left mt-1">
                        <div class="d-flex flex-row align-items-center">
                            <h4 class="mr-1">$18.56</h4><span><del>$49.08</del> </span>
                        </div>
                        <h6 class="text-success">Recoger en tienda!</h6>
                        <div class="d-flex flex-column mt-4"><button class="btn btn-outline-primary btn-sm mt-2" type="button">Añadir al Carrito</button></div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <br>
    <hr>
 
    <!--Citas-->  
    <div id="citas" class="container">
    <section>
      <h2>Citas</h2>
      <form action="">
     <div class="col-md-6">
     <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1"><i class="bi bi-calendar-week"></i></span>
      <input type="date" class="form-control" placeholder="Fecha de cita" aria-label="Username" aria-describedby="basic-addon1" name="fecha">
      </div>
     </div>
       <div class="col-md-6">
      <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon1"><i class="bi bi-clock"></i></span>
      <input type="time" class="form-control" placeholder="Hora de CIta" aria-label="Username" aria-describedby="basic-addon1" name="hora_cita">
        </div>
       </div>
       </div>
       </form>
    </section>
</div>
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
                        <div class="card-body text-center">
                          <img src="../../Bootstrap/IMG/R.jfif" alt="avatar"
                            class="rounded-circle img-fluid" style="width: 90px; height: 111px;">
                          <h5 class="my-3"><?php echo"$nombre"; ?></h5>
                          <p class="text-muted mb-1">Cliente</p>
                       
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
                            <div class="col-sm-9">
                              <p class="text-muted mb-0"><?php echo"$nombre"; ?></p>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0"><?php echo"$email"; ?></p>
                            </div>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">numero</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0"><?php echo"$telefono"; ?></p>
                            </div>
                          </div>
                          <hr>
                         
                          <div class="row">
                            <div class="col-sm-3">
                              <p class="mb-0">direccion</p>
                            </div>
                            <div class="col-sm-9">
                              <p class="text-muted mb-0"><?php echo"$direccion"; ?></p>
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
    <!--Contacto-->
    <hr>
    <br>
    <div id="contactanos" class="container">
    <section>
        <h2>Quejas & Sugerencias</h2>
        <div class="container1">
            <div style="text-align:center">
              <h3>Contactanos</h3>
            </div>
            <div class="row">
             
              <div class="column">
                <form action="#">
               
                  <label for="Motivo">Motivo</label>
                  <textarea id="subject" name="subject" placeholder="Escribe.." required ></textarea>
                  <input type="submit" value="Submit">
                </form>
              </div>
            </div>
          </div>
    </section>
</div>
    
</main>
<br>
</body>
</html>