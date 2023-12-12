<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head><script src="/docs/5.3/assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="Hugo 0.115.4">
    <title>Blog Template · Bootstrap v5.3</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/blog/">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Favicons -->
<link rel="apple-touch-icon" href="/docs/5.3/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<link rel="manifest" href="/docs/5.3/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.3/assets/img/favicons/safari-pinned-tab.svg" color="#712cf9">
<link rel="icon" href="/docs/5.3/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#712cf9">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }
      .bd-mode-toggle {
        z-index: 1500;
      }

      .ac--container {
    width: 535px; /* Ancho del contenedor del acordeón */
}
.ac--container figure {
    position: absolute; /* Esto permite que las imágenes se vean solapadas */
    top: 0;
    left: 50px; /* Ancho de imagen contraída */
    width: 335px;
}

.ac--container input {
    position: absolute;
    top: 0;
    left: 0;
    width: 50px;
    height: 100%;
    z-index: 100;
    appearance: none;
}
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="blog.css" rel="stylesheet">
  </head>
  <body data-bs-theme="dark">
    <header data-bs-theme="dark">
        <nav class="navbar navbar-dark bg-dark fixed-top" style="height: 2.5cm;">
          <div class="container-fluid">
            <a class="navbar-brand" href="Index.html"><img src="imagenes\Iconos\Logo Oscuro.png" alt="Logo Oscuro" style="height: 2cm;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
              <div class="offcanvas-header">
                <img src="imagenes\Iconos\Logo Oscuro.png" alt="">
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
              </div>
              <div class="offcanvas-body">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="Index.html">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      ROCAS IGNEAS 
                    </a> 
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li><a class="dropdown-item" href="rocas_igneas_intrusivas.html">INTRUSIVAS</a></li>
                      <li><a class="dropdown-item" href="rocas_igneas_extrusivas.html">EXTRUSIVAS</a></li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="#"></a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      ROCAS SEDIMENTARIAS 
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark">
                      <li><a class="dropdown-item" href="rocas_sedimentarias.html">DETRITICAS</a></li>
                      <li><a class="dropdown-item" href="rocas_quimicas.html">QUIMICAS</a></li>
                      <li>
                        <hr class="dropdown-divider">
                      </li>
                      <li><a class="dropdown-item" href="#"></a></li>
                    </ul>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        ROCAS METAMORFICAS 
                      </a> 
                      <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="rocas_metamorficas_foliadas.html">FOLIADAS</a></li>
                        <li><a class="dropdown-item" href="rocas_metamorficas_no_foliadas.html">NO FOLIADAS</a></li>
                        <li>
                          <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#"></a></li>
                      </ul>
      
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            MINERALES
                          </a> 
                      <ul class="dropdown-menu dropdown-menu-dark">
                          <li><a class="dropdown-item" href="minerales_nativos.html">GRUPO I</a></li>
                          <li><a class="dropdown-item" href="minerales_sulfuros_y_sulfasales.html">GRUPO II</a></li>
                          <li><a class="dropdown-item" href="minerales_haluros.html">GRUPO III</a></li>
                          <li><a class="dropdown-item" href="minerales_oxidos_e_hidroxidos.html">GRUPO IV</a></li>
                          <li><a class="dropdown-item" href="minerales_grupo_V.html">GRUPO V</a></li>
                          <li><a class="dropdown-item" href="grupo_VI.html">GRUPO VI</a></li>
                          <li><a class="dropdown-item" href="grupo VII.html">GRUPO VII</a></li>
                          <li><a class="dropdown-item" href="grupo_VIII.html">GRUPO VIII</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="#"></a></li>
                        </ul>
      
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            PETROGRAFICAS
                          </a> 
                      <ul class="dropdown-menu dropdown-menu-dark">
                          <li><a class="dropdown-item" href="petro_ignea.html">IGNEA</a></li>
                          <li><a class="dropdown-item" href="petro_metamorfica.html">METAMORFICA</a></li>
                          <li>
                            <hr class="dropdown-divider">
                          </li>
                          <li><a class="dropdown-item" href="#"></a></li>
                        </ul>
                </ul>
                <li class="nav-item ">
                  <a class="nav-link Toggle" href="fosiles.html" role="button" data-bs-toggle="nav-item" aria-expanded="false">
                    FOSILES
                  </a> 
                  
            </ul>
               
              </div>
            </div>
          </div>
        </nav>
        
  </header>
  <br>
  <br>
  <br>
<br>


<main class="container">
    <div id="carouselExampleFade" class="carousel slide carousel-fade">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="fosiles.html"><img src="imagenes\videos_fosiles\FOSILES\FOSILES DE LA UNIVERSIDAD DE SANTANDER.gif" class="d-block w-100" alt="..."></a>
          </div>
          <div class="carousel-item">
           <a href="minerales_opcion.html"> <img src="imagenes\minerales\MINERALES\MINERALES DE LA UNIVERSIDAD DE SANTANDER.gif" class="d-block w-100" alt="..."></a>
          </div>
          <div class="carousel-item">
           <a href="rocas_opcion.html"> <img src="imagenes\Las-rocas-de-la-UnIversIdad-de-Santander.gif" class="d-block w-100" alt="..."></a>
          </div>
          <div class="carousel-item">
            <a href="petro_opcion.html"><img src="imagenes\PETROGRAFICAS-20230904T231216Z-001\PETROGRAFICAS\PETROGRAFIA UDES.gif" class="d-block w-100" alt="..." ></a>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
<br>
<br>
  

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
       
      </h3>

      <article class="blog-post">
        <h2 class="display-5 link-body-emphasis mb-1">Bienvenido al Geomuseo UDES</h2>
        

        <p>Descubre el Fascinante Mundo de la Geología en Línea</p>
        <hr>
        <p>El <strong>Geomuseo UDES</strong> es una plataforma en línea que te invita a explorar el apasionante mundo de la geología desde la comodidad de tu hogar. Este museo virtual, desarrollado por la Universidad de Educación Superior (UDES), es un lugar de aprendizaje interactivo que ofrece una experiencia única para aficionados y estudiantes de geología, así como para cualquier persona interesada en descubrir los secretos de la Tierra.</p>
        <h2>Geología y Nosotros</h2>
        <p>La geología es una disciplina que nos permite entender la historia de nuestro planeta, desde la formación de las montañas hasta la creación de valiosos minerales y fósiles. En el Geomuseo UDES, podrás sumergirte en un mundo de conocimiento y maravilla geológica. Aquí hay algunas de las emocionantes características que encontrarás en nuestro museo en línea:</p>
        <blockquote class="blockquote">
          <p>Exploración de Rocas y Minerales</p>
        </blockquote>
        <p>Sumérgete en la <strong>Salas de Rocas y Minerales</strong>, donde podrás examinar una amplia colección de muestras de rocas y minerales . Cada muestra viene acompañada de detalles sobre su origen, propiedades y usos, lo que te permitirá profundizar en la diversidad de nuestro planeta..</p>
        
        <p>El Geomuseo UDES es un recurso educativo valioso y una fuente de inspiración para aquellos que desean explorar las maravillas de la geología. ¡Te invitamos a sumergirte en este emocionante viaje y a descubrir el asombroso mundo que se encuentra bajo nuestros pies!</p>
       
        

 
    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-body-tertiary rounded">
          <h4 class="fst-italic">Inspiración</h4>
          <p class="mb-0">"La verdadera grandeza de la ciencia acaba valorandose por su utilidad"</p>
        </div>

        


</main>

<footer class="text-body-secondary py-5">
    <div class="container">
      <p class="float-end mb-1">
        <a href="#">Sube</a>
      </p>
      <p class="mb-1">Album Creado Por Angelica Salazar y Daniela </p>
      <p class="mb-0">Quieres ver mas? <a href="/">Visita el inicio</a>.</p>
    </div>
  </footer>
  <script src="/docs/5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  
      </body>
  </html>
