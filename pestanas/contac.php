<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<link rel="stylesheet" href="../css/styelcontact.css">
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link rel="icon" href="../favicon.ico" type="image/png">
</head>
<body>
    <header class=" nav  navbar-fixed-top " role="navigation">
        <!-- <div class="container-fluid nav1">

            <ul class="nav  nav-tabs textos-nav1">
                <li role="presentation" class="active"><a href="/index.php">Para tesis</a></li>
                <li role="presentation"><a href="/pestanas/invesion.php">Para inversiones</a></li>
            </ul>

        </div> -->
        <nav class="nav navbar nav2">
            <div class="container contenedor-menu-nav2">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle barra" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="../index.php" class="navbar-brand logo"><img src="../img/logo.png" alt=""
                            class="img-responsive"></a>
                </div>
                <div class="collapse navbar-collapse " id="myNavbar">
                    <ul class="nav navbar-nav  enlaces-person ">
                        <li><a href="about.php">Nosotros</a></li>
                        <li><a href="especialidades.php">Especialidades</a></li>
                         <li><a href="#">Contacto</a></li>
                    </ul>
                </div>
        </nav>

    </header>
    <section class="banner-principal">
       <div class="container">
           <h1><strong>Contáctanos</strong> </h1>
           <p>Estaríamos encantado de ayudarte</p>
       </div>
    </section>
    
    <section class="form-texto">
       <div class="container">
           <div class="row">
               <div class="col-sm-12 col-md-12  col-lg-6 formulario slideanim">
                   <form action="../archivosphp/formularioContact.php" method="POST" class="formulario-contacto">
                   
                   
                       <div class="form-group grupo">
                           <label for="nombre" class="sr-only">Nombre</label>
                           
                               <input type="text" class="form-control" placeholder="Nombre" name="nombre" id="nombre" data-toggle="tooltip" placement="right">
                               <div class="alert alert-danger alert-dismissible hide" id="alerta-nombre">
                      
                       <stron>Ingresa este campo o escribe correctamente tu nombre</strong>
                   </div>
                           
                       </div>
                       <div class="form-group grupo">
                           <label for="celular" class="sr-only">Celular</label>
                           
                               <input type="tel" class="form-control" placeholder="Celular" name="celular" id="celular" data-toggle="tooltip" placement="right" >
                               <div class="alert alert-danger alert-dismissible hide" id="alerta-celular">
                      
                       <stron>Ingresa este campo o el celular debe tener 9 números</strong>
                   </div>
                   </div>
                   <div class="form-group grupo">
                           <label for="especialidad" class="sr-only">Especialidad</label>
                           
                               <input type="text" class="form-control" placeholder="Especialidad" name="especialidad" id="especialidad" data-toggle="tooltip" placement="right" >
                               <div class="alert alert-danger alert-dismissible hide" id="alerta-especialidad">
                      
                       <stron>Ingresa este campo</strong>
                   </div>
                     </div>      
                     <div class="form-group grupo">
                           <label for="region" class="sr-only">Region</label>
                           
                               <input type="text" class="form-control" placeholder="Región" name="region" id="region" data-toggle="tooltip" placement="right" >
                               <div class="alert alert-danger alert-dismissible hide" id="alerta-region">
                      
                       <stron>Ingresa este campo </strong>
                   </div>
                   </div>
                       <div class="form-group grupo">
                        <label for="emil" class="sr-only">Email</label>
                        <input type="email" class="form-control" placeholder="Correo electrónico" name="email" id="email" >
                    <div class="alert alert-danger hide" id="alerta-correo">
                       
                       <stron>Completa este campo o escribe un formato correcto</strong>
                   </div>
                    </div>
                    <div class="form-group grupo">
                        <label for="mensaje" class="sr-only">Mensaje</label>
                        
                        <textarea name="mensaje" id="mensaje" style="resize: none;" class="form-control" cols="8" rows="3" required="required" placeholder="Mensaje" ></textarea>
                        <div class="alert alert-danger hide" id="alerta-mensaje">
                       
                       <stron>Completa este campo</strong>
                   </div>
                    </div>
                    
                    <input name="enviar" id="enviar" type="submit" class="btn btn-enviar" value="Enviar" >                    
                   </form>                  
               </div>
               
               <div class="col-sm-12 col-md-12 col-lg-6 textos-confe">
                   <div class="textos">
                       <h3>
                    Llámenos, Escríbanos O Llame A Nuestra Puerta
                   </h3>
                   <h2>
                    Estaremos Encantados De Conocerte 
                   </h2>
                   <p>
                       Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed animi, harum quaerat mollitia aliquid amet ut, reprehenderit temporibus velit dignissimos voluptatibus, magnam iste eligendi sapiente accusamus neque consequatur nisi doloremque.
                   </p>
                   <p>Domingo: cerrado</p>
                    <p>Lunes - jueves: 9AM - 7PM</p> 
                    <p>Viernes: 9AM - 5PM</p> 
                   </div>
                   
               </div>
           </div>
       </div>
    </section>
    <section class="container vamos-a-quedar">
          <h2><strong>Vamos a quedar</strong> </h2>
          
          <div class="container-fluid">
              <div class="row datos slideanim">
                  <div class="col-sm-4 ">
                    <span class="glyphicon glyphicon-phone  logo-small"></span>
                    <h3>Danos una llamada</h3>
                    <p>4354354</p>
                  </div>
                  <div class="col-sm-4">
                    <span class="glyphicon glyphicon-envelope  logo-small"></span>
                        <h3>Envianos un mensaje</h3>
                        <p>info@gmail.com</p>
                  </div>
                  <div class="col-sm-4">
                    <span class="glyphicon glyphicon-map-marker logo-small "></span>
                    <h3>Danos una visita</h3>
                    <p>Alfredo Lapoint 324</p>
                  </div>
              </div>
          </div>
    </section>
    <div class="wave">
        <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-1.41,130.75 C113.71,103.13 271.49,-49.98 502.54,108.05 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </div>
    <section class="experimento">
          <div class="container-experimento"></div>
          <div class="container experimento2">
              <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6 textos-experimento">
                   <h2>
                  ¡Tu tesis ya!
                   </h2>
                   <p>Escribenos y manténganse en contacto</p>
                   <a href="about.php" class="">Contáctanos<!--<i class="fas fa-arrow-right"></i>--></a>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 img-experimento slideanim">
                <img src="../img/asesoria.jpg" alt="" class="img-responsive ">
          </div>
        </div>
          </div>
    </section>
    <footer class="container-fluid ">
       <p>Siguenos </p>
       <div class="redes">
        <a href=""><span><img src="../img/instagram.png" alt=""></span></a>
    <a href=""><span><img src="../img/facebook.png" alt=""></span> </a>
    <a href=""><span><img src="../img/whatsapp.png" alt=""></span> </a>
    </div>
    <p>Desarrollado por Brayan Chiroque Paz</p>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="../js/main.js"></script>
    
</body>
</html>