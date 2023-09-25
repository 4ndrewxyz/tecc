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
<br><br><br><!---->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="/public/img/carousel.jpeg" alt="First slide">
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
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maxime, eius minus. Aut voluptates voluptatum aperiam aspernatur amet nobis, ex animi.</p>
                    <a href="#">Saber más</a>
                </div>
        </div>
        <div class="servicio" data-aos="fade-right">
                <figure>
                    <img src="/public/img/carousel2.jpg" alt="">
                </figure>
                <div class="contenido">
                    <h3>Impresoras</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos rerum blanditiis cumque accusamus tenetur? Sit eveniet laborum obcaecati? Expedita, explicabo.</p>
                    <a href="#">Saber más</a>
                </div>
        </div>
        <div class="servicio" data-aos="fade-right">
                <figure>
                    <img src="/public/img/carousel2.jpg" alt="">
                </figure>
                <div class="contenido">
                    <h3>Impresoras</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos rerum blanditiis cumque accusamus tenetur? Sit eveniet laborum obcaecati? Expedita, explicabo.</p>
                    <a href="#">Saber más</a>
                </div>
        </div>
        <div class="servicio" data-aos="fade-right">
                <figure>
                    <img src="/public/img/carousel3.jpeg" alt="">
                </figure>
                <div class="contenido">
                    <h3>Redes</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, cumque.</p>
                    <a href="#">Saber más</a>
                </div>
        </div>
    </div>
</div>

<!--Productos-->

<div class="productos-contenedor" id="productos">
    <h1>Productos</h1>
    <div class="contenedor-producto">
        <div class="productos-categoria" data-aos="fade-right">
                <img src="/public/img/producto1.jpg" alt="">
                <h3>Producto</h3>
        </div>
        <div class="productos-categoria" data-aos="fade-right">
                <img src="/public/img/producto2.jpeg" alt="">
                <h3>Producto</h3>
        </div>
        <div class="productos-categoria" data-aos="fade-right">
                <img src="/public/img/producto3.jpeg" alt="">
                <h3>Producto</h3>
        </div>
        <div class="productos-categoria" data-aos="fade-right">
                <img src="/public/img/producto4.jpg" alt="">   
                <h3>Producto</h3>
        </div>
        <div class="productos-categoria" data-aos="fade-right">
                <img src="/public/img/producto5.jpg" alt="">
                <h3>Producto</h3>
        </div>
        <div class="productos-categoria" data-aos="fade-right">
                <img src="/public/img/producto6.jpeg" alt="">
                <h3>Producto</h3>
        </div>
        <div class="productos-categoria" data-aos="fade-right">
                <img src="/public/img/producto7.jpeg" alt="">
                <h3>Producto</h3>
        </div>
        <div class="productos-categoria" data-aos="fade-right">
                <img src="/public/img/producto8.jpg" alt="">
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
