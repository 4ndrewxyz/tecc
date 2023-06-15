<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/navegador.css">
    <title>TEC</title>
</head>
<body>
<header class="n">
        <nav class="navegador" id="nav-bar">
            <h2 class="logo"><a href="/">Logo |<span>| Logo</span></a></h2>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Servicios</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Contacto</a></li>
                <li><a href="#">Soporte tecnico</a></li>
            </ul>
        </nav>
    </header>
    
 <!-- IMAGENES CAROUSEL -->

 <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="/static/slides/2.jpeg" class="d-block w-100 carousel-image">
      <h2 class="heading1"> "La mejor<br>        Clinica <br> de la region"</h2>
    </div>
    <div class="carousel-item" data-bs-interval="4000">
      <img src="/static/slides/3.jpg" class="d-block w-100 carousel-image">
      <h2 class="heading2"> "Doctores <br>comprobados"</h2>
    </div>
    <div class="carousel-item" data-bs-interval="4000">
      <img src="/static/slides/1.jpeg" class="d-block w-100 carousel-image">
      <h2 class="heading3"> "Mejor servicio<br> garantizado" </h2>
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
<!--FIN DE IMAGES CAROUSEL-->

</body>
<script src="/public/vendor/boostrap/js/bootstrap.bundle.min.js"></script>
</html>