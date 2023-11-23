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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
            <a class="nav-link" aria-current="page" href="index.php">Inicio</a>
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
            <a class="nav-link active" href="noticia.php">Noticia</a>
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
    <!-- ++++++++++++++++++++ main ++++++++++++++++++ -->
    <main class="container text-center">
        <!-- Aqui escribe tu codigo -->
        <br>
        <br>
            <h1>NOTICIAS COMPRANDO EN LINEA</h1>
        <br>
        <br>
                <img src="img/mundo.png" alt="noticias" class="img-fluid">
        <br>
        <br>
        <br>
        <br>
            <h1 class="text-dark text-decoration-underline">Articulos de la semana</h1>
        <br>
        <br>
        <!--  ROPA -->
                <main class="container text-center border p-4 bg-light text-black rounded-5">
            <h1 class="text-dark">Ventajas de usar ropa casual</h1>
            <br>
            <br>
                <img src="img/ropa.png" alt="ropa" class="img-fluid">
        <br>
        <br>
        <br>
            <h4>Comodidad: La ropa casual tiende a ser más cómoda que la ropa formal. </h4>
            <h4>Versatilidad: La ropa casual es generalmente más versátil y fácil de combinar. </h4>
        <br>
        <br>
                <button class="btn btn-primary btn-lg" >Conocer mas</button>   
        <br>
        <br>
        </main>
        <!--  VIDRIO-->
        <br>
        <br>
        <br>
                <main class="container text-center border p-4 bg-light text-black rounded-5">
            <h1 class="text-dark">¿Por que es importante comprar
            envases de vidrio?</h1>
            <br>
            <br>
                <img src="img/vidrio.png" alt="vidrio" class="img-fluid">
            <br>
            <br>
        <h4>Preservación de sabores y olores: A diferencia de algunos materiales plásticos, el vidrio<br>
             no retiene olores ni sabores, lo que garantiza que los alimentos y bebidas conserven <br> su calidad original.</h4>
             <br>
             <br>
             <button class="btn btn-primary btn-lg" >Conocer mas</button>
             <br>
             <br>   
        </main>
        <!--  TIENDA -->
        <br>
        <br>
        <br>
        <main class="container text-center border p-4 bg-light text-black rounded-5">
        <h1 class="text-dark">¿Por que es importante 
            una tienda en linea?</h1> 
            <br>
            <br>
            <img src="img/tienda.png" alt="tienda" class="img-fluid">  
            <br>
            <br>
        <h4>Accesibilidad: Una tienda en línea proporciona acceso a productos y servicios 
            las 24 horas <br>del día, los 7 días de la semana, lo que permite a los clientes 
            comprar  en cualquier <br>momento que les resulte conveniente.</h4> 
            <br>
            <br>
        <button class="btn btn-primary btn-lg" >Conocer mas</button>  
        <br>
        <br> 
        </main>
        <br>
        <br>
        <br>
        <br>
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
                    <div class="text-center align-item-center recaptcha">
                        <div class="g-recaptcha" data-sitekey="6LfFNBopAAAAABMWhUJ5Dx60Y-B41AUTsWfznU5m"></div>
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
</body>
</html>