<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/navegador.css">
    <link rel="stylesheet" href="/public/css/servicios.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>TEC</title>
</head>
<body>

<!--Seccion de navegacion-->
    <header class="n">
        <nav class="navegador" id="nav-bar">
            <img class="logo" src="/public/img/logo.png"> <!--Logo de la empresa-->
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="#sobre-nosotros">Soporte Tecnico</a></li>
            </ul>
        </nav>
</header>
    
<!--Seccion de carrusel-->
<br><br><br><br><br>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/public/img/carousel.jpeg" alt="First slide">
            <h2 class="heading1">Bienvenido a TECC</h2>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/public/img/carousel2.jpeg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/public/img/carousel3.jpeg" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>


<!--Seccion de servicios-->
<div class="contenedor">
  <div class="servicio" data-aos="fade-right">
          <figure>
                <img src="/public/img/carousel2.jpeg" alt="">
          </figure>
          <div class="contenido">
              <h3>Servicios</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, cumque.</p>
              <a href="#">Leer más</a>
          </div>
  </div>
  <div class="servicio" data-aos="fade-right">
          <figure>
              <img src="/public/img/carousel2.jpeg" alt="">
          </figure>
          <div class="contenido">
              <h3>Servicios</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, cumque.</p>
              <a href="#">Leer más</a>
          </div>
  </div>
  <div class="servicio" data-aos="fade-right">
          <figure>
              <img src="/public/img/carousel2.jpeg" alt="">
          </figure>
          <div class="contenido">
              <h3>Servicios11</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, cumque.</p>
              <a href="#">Leer más</a>
          </div>
  </div>
</div>

  <div class="footer">
    <div class="acerca">
      <p>Sobre nosotros</p>
      <p>conocenos</p>
    </div>
    <div class="atencion">
      <p>Atención al cliente</p>
      <p>texto</p>
    </div>
    <div class="Contactanos">
      <p>Contactanos</p>
      <p>redes.</p>
    </div>
</div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
