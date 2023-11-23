<!DOCTYPE html>
<html lang="es-pe">
<head>
    <!-- Cojunto de caracter universal -->
    <meta charset="UTF-8">
    <!-- Para que la pagina se visible -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titulo para la pestaña del navegador -->
    <title>Olinea</title>
    <!--  Boostrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Vinculacion con CSS-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Utilizado para la declaracion del asunto en el sitio web -->
    <meta name="subject" content="Venta de productos">
    <!-- Palabras claves para indicar la tematica de la web  -->
    <meta name="keywords" content="comprar polos ropa articulos accesorios">
    <!-- Es la URL que considera reprensentativa en los navegadores -->
    <link rel="canonical" href="https://www.olinea.com">
    <!-- Es para que el navegador comienze a descargar este archivo primero -->
    <link rel="preload" href="css/style.css" as="style">
    <!-- Icono para la pestaña -->
    <link rel="icon" href="img/logo-png.png" type="image/x-png">
</head>
<body>
    <!-- ++++++++++++++++++++ NAV ++++++++++++++++++ -->
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
        <img src="img/logo-png.png" alt="olinea">
        </a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
            <!-- inicio -->
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
            </li>
            <!-- Servicio -->
            <li class="nav-item">
            <a class="nav-link" href="servicios.php">Servicio</a>
            </li>
            <!-- Contacto -->
            <li class="nav-item">
            <a class="nav-link" href="contacto.php">Contacto</a>
            </li>
            <!-- Noticias -->
            <li class="nav-item">
            <a class="nav-link" href="noticia.php">Noticia</a>
            </li>
            <!-- Landing Page -->
            <li class="nav-item">
            <a class="nav-link" href="landing.php">Landing Page</a>
            </li>
            <!-- categoria -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Categorias
            </a>
                <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Cocina</a></li>
                <li><a class="dropdown-item" href="#">Electrodomesticos</a></li>
                <li><a class="dropdown-item" href="#">Ropa</a></li>
                <li><a class="dropdown-item" href="#">Accesorios</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Mas informacion: 949 76 209</a></li>
                </ul>
            </li>
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
        </div>
    </nav>
    <!-- ++++++++++++++++++ HEADER ++++++++++++++++++ -->
    <header>
        <section class="container text-center my-3">
            <h1>Comprando en Linea</h1>
            <h3>Productos y Servicios a tu medida</h3>
        </section>
        <section class="container-fluid p-0">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img src="img/contenido creativo (2).jpg" class="d-block img-hero">
                    </div>
                    <div class="carousel-item">
                    <img src="img/contenido educativo (2).jpg" class="d-block img-hero">
                    </div>
                    <div class="carousel-item">
                    <img src="img/contenido promocional (2).jpg" class="d-block img-hero">
                    </div>
                    <div class="carousel-item">
                    <img src="img/contenido valor (2).jpg" class="d-block img-hero">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>

    </header>
    <!-- ++++++++++++++++++++ main ++++++++++++++++++ -->
    <main>
        <!-- Bienvenidos a Comprando en Línea -->
        <section class="container text-center">
            <h2 class="my-4">Bienvenidos a Comprando en Línea</h2>
            <article class="section-info container bg-dark text-light">
                <section>
                    <p>
                        Olinea es una web pensada en la comodidad del usuario y ofrecer articulos de su gusto, a mejores precios.Nuestros clientes pueden recibir cupones de descuento dependiendo de sus compras o festividades.
                    </p>
                    <a href="#">
                        <button type="submit" class="btn btn-primary px-5">Conocer Mas</button>
                    </a>
                </section>
                <img src="img/compralinea.jpg">
            </article>
        </section>
        <!-- Productos de la semana -->
        <section class="container text-center">
            <h2 class="my-4">Productos de la semana</h2>
            <article class="container products">
                <section>
                    <img src="img/camisa.svg">
                    <b>S/50.00</b>
                </section>
                <section>
                    <img src="img/celular.svg">
                    <b>S/753.00</b>
                </section>
                <section>
                    <img src="img/mesa.svg">
                    <b>S/.120.00</b>
                </section>
                <section>
                    <img src="img/olla.svg">
                    <b>S/.20.00</b>
                </section>
            </article>
        </section>
        <!-- ¿Estás listo para cambiar tu vida? -->
        <section class="text-center mb-4">
            <h2 class="my-4">¿Estás listo para cambiar tu vida? <br>Combierte el mundo en un mejor lugar</h2>
            <!-- ++++++++++++++carrusel+++++++ -->
            <div id="carouselExample" class="carousel">
                <!-- items del carrusel -->
                <div class="carousel-inner carousel-inner1">
                    <!-- articulo 1 -->
                    <div class="carousel-item carousel-item1 active">
                        <div class="card1 card">
                            <div class="img-wrapper">
                                <img src="img/mesa.svg" class="img">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Tableta Grafica</h5>
                                <p class="card-text">Descripcion - informacion</p>
                                <b>S./50.00</b>
                                <a href="#" class="btn btn-primary">Mas Informacion</a>
                            </div>
                        </div>
                    </div>
                    <!-- articulo 2 -->
                    <div class="carousel-item carousel-item1">
                        <div class="card1 card">
                            <div class="img-wrapper">
                                <img src="img/celular.svg" class="img">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Tableta Grafica</h5>
                                <p class="card-text">Descripcion - informacion</p>
                                <b>S./50.00</b>
                                <a href="#" class="btn btn-primary">Mas Informacion</a>
                            </div>
                        </div>
                    </div>
                    <!-- articulo 3 -->
                    <div class="carousel-item carousel-item1">
                        <div class="card1 card">
                            <div class="img-wrapper">
                                <img src="img/lejia.webp" class="img">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Tableta Grafica</h5>
                                <p class="card-text">Descripcion - informacion</p>
                                <b>S./50.00</b>
                                <a href="#" class="btn btn-primary">Mas Informacion</a>
                            </div>
                        </div>
                    </div>
                    <!-- articulo 4 -->
                    <div class="carousel-item carousel-item1">
                        <div class="card1 card">
                            <div class="img-wrapper">
                                <img src="img/zapato.jpg" class="img">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Tableta Grafica</h5>
                                <p class="card-text">Descripcion - informacion</p>
                                <b>S./50.00</b>
                                <a href="#" class="btn btn-primary">Mas Informacion</a>
                            </div>
                        </div>
                    </div>
                    <!-- articulo 5 -->
                    <div class="carousel-item carousel-item1">
                        <div class="card1 card">
                            <div class="img-wrapper">
                                <img src="img/teclado.png" class="img">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Tableta Grafica</h5>
                                <p class="card-text">Descripcion - informacion</p>
                                <b>S./50.00</b>
                                <a href="#" class="btn btn-primary">Mas Informacion</a>
                            </div>
                        </div>
                    </div>
                    <!-- articulo 6 -->
                    <div class="carousel-item carousel-item1">
                        <div class="card1 card">
                            <div class="img-wrapper">
                                <img src="img/tacho.png" class="img">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Tableta Grafica</h5>
                                <p class="card-text">Descripcion - informacion</p>
                                <b>S./50.00</b>
                                <a href="#" class="btn btn-primary">Mas Informacion</a>
                            </div>
                        </div>
                    </div>
                    <!-- articulo 7 -->
                    <div class="carousel-item carousel-item1">
                        <div class="card1 card">
                            <div class="img-wrapper">
                                <img src="img/cuaderno.jpg" class="img">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Tableta Grafica</h5>
                                <p class="card-text">Descripcion - informacion</p>
                                <b>S./50.00</b>
                                <a href="#" class="btn btn-primary">Mas Informacion</a>
                            </div>
                        </div>
                    </div>
                    <!-- articulo 8 -->
                    <div class="carousel-item carousel-item1">
                        <div class="card1 card">
                            <div class="img-wrapper">
                                <img src="img/pantalla.png" class="img">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Tableta Grafica</h5>
                                <p class="card-text">Descripcion - informacion</p>
                                <b>S./50.00</b>
                                <a href="#" class="btn btn-primary">Mas Informacion</a>
                            </div>
                        </div>
                    </div>
                    <!-- articulo 9 -->
                    <div class="carousel-item carousel-item1">
                        <div class="card1 card">
                            <div class="img-wrapper">
                                <img src="img/camisa.svg" class="img">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Tableta Grafica</h5>
                                <p class="card-text">Descripcion - informacion</p>
                                <b>S./50.00</b>
                                <a href="#" class="btn btn-primary">Mas Informacion</a>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <!-- botones de mover el carrusel -->
                <button class="carousel-control-prev ccp" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next ccn" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <!-- fan page -->
        <section class="section1 text-center mb-4">
            <h2 class="my-4">Fan PAGE</h2>
            <article class=" fanpage border rounded-3">
                <div class="box1">
                    <img src="img/fanpage.jpg">
                </div>
                <div class="logo">
                    <img src="img/logo-icon.png" alt="">
                </div>
                <div class="box2">
                    <h2>OLINEA</h2>
                    <p>70 mil Me gusta * 100 mill seguidores</p>
                </div>
            </article>
        </section>
    </main>
    <!-- ++++++++++++++++++++ FOOTER +++++++++++++++++ -->
    <footer class="text-light m-0">
        <section class="container-fluid bg-dark">
            <article class="container text-center py-2">
                <h5>Nosotros</h5>
                <p>
                Nosotros somos una empresa de venta en productos generales, nuestro proposito de la empresa es ofrecer articulos del hogar, al menor precio posible, ademas que destacamos por tener beneficios a nuestros clientes, como descuento o campañas de promociones.
                </p>
            </article>
            <article class="container-sm text-center pb-3">
                <form action="#" method="POST" class="container-md">
                    <h5>Escribenos</h5>
                    <hr>
                    <div class="mb-3 container">
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Correo electronico">
                    </div>
                    <div class="mb-3 container">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary px-5">Enviar</button>
                </form>
            </article>
        </section>
        <section class="footer-bottom p-2">
            <h6 class="text-center">© Comprando en linea, todos los derechos reservados</h6>
        </section>
    </footer>
    <!--  Boostrap js y Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="js/libreria.js"></script>
</body>
</html>