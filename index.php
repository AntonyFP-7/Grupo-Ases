<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
        integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
        integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous"> -->
        <link rel="stylesheet" href="css/boobootstrap-theme.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="icon" href="favicon.ico" type="image/png">
    
</head>
 
<body>
    <header class=" nav  navbar-fixed-top " role="navigation">
        <!-- <div class="container-fluid nav1">

            <ul class="nav  nav-tabs textos-nav1">
                <li role="presentation" class="active"><a href="#">Para tesis</a></li>
                <li role="presentation"><a href="pestanas/invesion.php">Para inversiones</a></li>
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
                    <a href="index.php" class="navbar-brand logo"><img src="img/logo.png" alt="" class="img-responsive"></a>
                </div>
                <div class="collapse navbar-collapse " id="myNavbar">
                    <ul class="nav navbar-nav  enlaces-person ">
                        <li><a href="pestanas/about.php">Nosotros</a></li>
                        <li><a href="pestanas/especialidades.php">Especialidades</a></li>
                        <li><a href="pestanas/contac.php">Contacto</a></li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <section class="banner">
        <div class="contenedor">

            <div class="textos">
                <h1><strong>Grupo Ases  </strong>  </h1>
                <h2>Tu futuro en nuestras manos</h2>
                <a  href="pestanas/contac.php" class="btn">Contactános</a>
            </div>
            <img class="img-vector" src="img/vector.png" alt="">
        </div>

    </section>
    <div class="wave">
        <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #edf6ff;"></path>
            </svg></div>
    </div>

    <section class="container section-motivos">
        <div class="container contenedor-motivos">

            <div class="container-fluid textos-motivos slideanim">
                <h3><strong>¿Por qué Grupo Ases?</strong> </h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum fugiat ipsa, reiciendis nobis
                    tenetur laudantium aut! Laboriosam blanditiis animi sed.</p>
            </div>


            <div class="container-fluid">
                <div class="row slideanim">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 img-valores">
                        <div class="informacion-set">
                            <div class="media">
                                <div class="media-left  contenedor-icono-motivos">
                                    <img src="img/proyecto.png" class="media-object" width="55px" height="55px" alt="">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">Innovadores</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, saepe.</p>
                                </div>
                            </div>
                        </div>
                        <div class="informacion-set">
                            <div class="media">
                                <div class="media-left contenedor-icono-motivos">
                                    <img src="img/consejo.png" class="media-object" width="55px" height="55px" alt="">
                                </div>
                                <div class="media-body textos-media">
                                    <h3 class="media-heading">Ética</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, illo?</p>
                                </div>
                            </div>
                        </div>
                        <div class="informacion-set">
                            <div class="media">
                                <div class="media-left contenedor-icono-motivos">
                                    <img src="img/responsabilidad.png" class="media-object" width="55px" height="55px"
                                        alt="">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">Experiencia</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, illo?</p>
                                    <a href="pestanas/about.php" class="btn btn-seccion-motivos">¡Conócenos más!</a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 valores slideanim">
                        <img src="img/personasinfondo.png" class="img-responsive" alt="">
                    </div>
                </div>
            </div>



        </div>

    </section>
    <!-- <div style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
            style="height: 100%; width: 100%;">
            <path d="M0.28,107.06 C150.96,174.17 347.90,-16.28 502.54,75.48 L500.00,150.00 L0.00,150.00 Z"
                style="stroke: none; fill:#fff;"></path>
        </svg></div> -->
    <section class="container-fluid bg-grey especialidades">

        <h3><strong> Nuestras Especialidades</strong></h3>
        <p>Siempre mejorando para ti</p>
        <div class="row tex-center caja-servicios slideanim">
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="img/medicina.jpg" height="273px" alt="">
                    <h4><strong>Biomédicas</strong> </h4>
                    <a href="pestanas/especialidades.php">Más información</a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="img/economia.jpg" height="273px" alt="">
                    <h4><strong>Empresariales</strong> </h4>
                    <a href="pestanas/especialidades.php">Más información</a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="img/humanidades.jpg" alt="">
                    <h4><strong>Humanidades</strong> </h4>
                    <a href="pestanas/especialidades.php">Más información</a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="img/derecho.jpg" height="273px" alt="">
                    <h4><strong>Derecho</strong> </h4>
                    <a href="pestanas/especialidades.php">Más información</a>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="img/ingenieria.jpg" alt="">
                    <h4><strong>Ingenería</strong> </h4>
                    <a href="pestanas/especialidades.php">Más información</a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="thumbnail">
                    <img src="img/tecnologia.jpg" alt="">
                    <h4><strong>Tecnologia</strong> </h4>
                    <a href="pestanas/especialidades.php">Más información</a>
                </div>
            </div>
        </div>
    </section>
    <section class="container-fluid equipo">
        <div class="container-fluid textos-equipo slideanim">


            <p> <strong>
                Nuestro equipo de trabajo esta en pleno crecimiento, se parte de los más de 100 profesionales
                pertenecientes a nuestro grupo. ¡Estamos esperándote!
            </strong>
                
            </p>
            <a href="pestanas/contac.php" >Regístrate</a>





        </div>

    </section>
    <section class="comentarios">
        <h2><strong>Ya son más de 500 asesorados </strong> </h2>
        <div id="myCarousel" class="carousel slide text-center slideanim" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <h4>"This company is the best. I am so happy with the result!"<br><span
                            style="font-style:normal;">Michael Roe, Vice President, Comment Box</span></h4>
                </div>
                <div class="item">
                    <h4>"One word... WOW!!"<br><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>
                </div>
                <div class="item">
                    <h4>"Could I... BE any more happy with this company?"<br><span style="font-style:normal;">Chandler
                            Bing, Actor, FriendsAlot</span></h4>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- <section class="contac">
        <div class="container background-contac">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="col-xs-12 col-sm-12 col-md-5">
                        <h3 class="black section-heading">Listo para cambiar tu vida</h3>
                        <p class="black text-cta">Contactános desde cualquier lugar del Perú</p>
                    </div>
                   
                    <div class="col-xs-12 col-sm-12 col-md-4">
                        <a href="" class="btn  btn-primary btn-lg btn-right">Llena el formulario</a>
                    </div>

                </div>

            </div>
        </div>
    </section> -->
   
    <div class="wave">
        <div style="height: 150px; overflow: hidden;" ><svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;"><path d="M-1.41,130.75 C113.71,103.13 271.49,-49.98 502.54,108.05 L500.00,0.00 L0.00,0.00 Z" style="stroke: none; fill: #fff;"></path></svg></div>
    </div>
    <section class="experimento">
          <div class="container-experimento"></div>
          <div class="container experimento2">
              <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6 textos-experimento">
                   <h2> <strong> 
                       ¡Tu tesis ya!
                   </strong>
                  
                   </h2>
                   <p>Escribenos y manténganse en contacto</p>
                   <a href="pestanas/contac.php" class="btn ">Contáctanos <!--<i class="fas fa-arrow-right"></i>--></a>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 img-experimento slideanim">
                <img src="img/asesoria.jpg" alt="" class="img-responsive ">
          </div>
        </div>
          </div>
          
    </section>
    <footer class="footer-empresa">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 footer-logo">
                    <a href="index.php"><img src="img/logo.png" class="img-responsive" alt=""></a>
                </div>
                <div class="col-sm-4 footer-contacto">
                    <h4>Contacto</h4>
                    <div class="contacto-footer">
                        <p><span><img src="img/phone.png" alt=""></span> 567567</p>
                        <p><span><img src="img/ubicacion.png" alt=""></span> Calle alfredo lapoin 545</p>
                        <p><span><img src="img/correo.png" alt=""></span> info@gmil.com</p>
                    </div>

                </div>
                <div class="col-sm-4 footer-redes">
                    <h4>Redes Sociales</h4>
                    <div class="redes">
                        <a href=""><span><img src="img/instagram.png" alt=""></span> Instagram</a>
                        <a href="https://www.facebook.com/pages/category/Educational-Research-Center/GRUPO-ASES-2351503965092856/"><span><img src="img/facebook.png" alt=""></span> Facebook</a>
                        <a href=""><span><img src="img/whatsapp.png" alt=""></span> whatsapp</a>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="js/jquery.js"></script>
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>