<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="/public/css/navegador.css">
    <link rel="stylesheet" href="/public/css/servicios.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>TEC</title>
</head>
<body>

<?php include 'navegacion.php'; ?>

<!--Seccion de carrusel-->
<br><br><br><br><!---->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/public/img/carousel.jpeg" alt="First slide">
            <h2 class="heading1">Bienvenido a TECC</h2>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="/public/img/carousel2.jpg" alt="Second slide">
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
<div class="servicios-contenedor" id="servicios">
    <h1>Servicios</h1>
    <div class="contenedor">
    <div class="servicio" data-aos="fade-right">
            <figure>
                    <img src="/public/img/servicio1.jpeg" alt="">
            </figure>
            <div class="contenido">
                <h3>Refacciones</h3>
                <div class="contenido-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam natus eum repellat magni! Harum ipsum sit illum animi! Officia nemo deleniti, totam provident aspernatur labore ad cupiditate tempore commodi ducimus? Quisquam voluptate iste maxime consequuntur non nesciunt, ipsum ipsa, explicabo quis minus tenetur. Ipsum facere magnam tempora ex porro error vel eum aliquam recusandae neque mollitia illum, eius nesciunt ipsa placeat enim repellendus vero laudantium nostrum delectus assumenda omnis. Ipsam delectus dolor quidem eos laborum officiis officia fugiat dolore animi cupiditate, quae reiciendis temporibus sunt aperiam repudiandae. Impedit commodi iure, hic, nemo quasi nulla minus laborum ducimus sunt, aut rerum.</p>
                </div>
                <a href="#">Leer más</a>
            </div>
    </div>
    <div class="servicio" data-aos="fade-right">
            <figure>
                <img src="/public/img/carousel2.jpg" alt="">
            </figure>
            <div class="contenido">
                <h3>Impresoras</h3>
                <div class="contenido-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, cumque.</p>
                </div>
                <a href="#">Leer más</a>
            </div>
    </div>
    <div class="servicio" data-aos="fade-right">
            <figure>
                <img src="/public/img/carousel3.jpeg" alt="">
            </figure>
            <div class="contenido">
                <h3>Redes</h3>
                <div class="contenido-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, cumque.</p>
                </div>
                <a href="#">Leer más</a>
            </div>
    </div>
    </div>
</div>

<!--Productos-->

<div class="productos-contenedor" id="productos">
    <h1>Productos</h1>
    <div class="contenedor-producto">
    <div class="productos-categoria" data-aos="fade-right">
            <img src="/public/img/servicio1.jpeg" alt="">
            <h3>Producto</h3>
    </div>
    <div class="productos-categoria" data-aos="fade-right">
            <img src="/public/img/servicio1.jpeg" alt="">
            <h3>Producto</h3>
    </div>
    <div class="productos-categoria" data-aos="fade-right">
            <img src="/public/img/servicio1.jpeg" alt="">
            <h3>Producto</h3>
    </div>
    <div class="productos-categoria" data-aos="fade-right">
            <img src="/public/img/servicio1.jpeg" alt="">   
            <h3>Producto</h3>
    </div>
    <div class="productos-categoria" data-aos="fade-right">
            <img src="/public/img/servicio1.jpeg" alt="">
            <h3>Producto</h3>
    </div>
    <div class="productos-categoria" data-aos="fade-right">
            <img src="/public/img/servicio1.jpeg" alt="">
            <h3>Producto</h3>
    </div>
    <div class="productos-categoria" data-aos="fade-right">
            <img src="/public/img/servicio1.jpeg" alt="">
            <h3>Producto</h3>
    </div>
    <div class="productos-categoria" data-aos="fade-right">
            <img src="/public/img/servicio1.jpeg" alt="">
            <h3>Producto</h3>
    </div>
    </div>
</div>

<div class="footer" id="footer">
<?php include 'footer.php'; ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
<script src="/public/js/mobile.js"></script>
</body>
</html>
