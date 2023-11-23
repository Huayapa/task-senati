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
    <!-- Link de enlace con Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body class="body-landing">
    <!-- ++++++++++++++++++++ NAV ++++++++++++++++++ -->
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark" style="position: sticky; top: 0;">
        <div class="container-fluid">
        <a class="navbar-brand pad_logo" href="index.php">
        <img src="img/logo-png.png" alt="olinea">
        </a>
        <button class="navbar-toggler " type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto text-light">
                <!-- inicio -->
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Ir a la página principal</a>
                </li>
                <!-- Servicio -->
                <li class="nav-item">
                <a class="nav-link text-light" href="#footer">Nosotros</a>
                </li>
                <!-- Contacto -->
                <li class="nav-item">
                <a class="nav-link text-light" href="#footer">Redes sociales</a>
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
    <main class="container-fluid main">
        <div class="row py-5 fila-main">
            <div class="col-lg-7 text-light text-center">
                <h2 class="px-5 titulo-landing">Encuentra los mejores productos y accesorios para este verano</h2><br>
                <!-- ORDENADOR -->
                <div class="row py-4 px-2">
                    <div class="contenedor-productos">
                        <img src="img/dc-carrusel-1.jpg" alt="">
                        <img src="img/dc-carrusel-2.jpg" alt="">                       
                        <img src="img/dc-carrusel-5.jpg" alt="">
                        <img src="img/dc-carrusel-4.jpg" alt="">                        
                        <img src="img/dc-carrusel-6.jpg" alt="">                        
                        <img src="img/dc-carrusel-3.jpg" alt="">    
                    </div>
                </div>
                <a href="index.php">
                    <input class="btn-conocer-mas fw-semibold" type="submit" value="Ver Más">
                </a>
            </div>
            <div class="col-lg-5 d-flex justify-content-center">
                <div class="container-form ">
                    <h1 class="titulo-landing fw-semibold">Enterate de nuestras proximas ofertas </h2>
                    <p>Ingresa tus datos para informarte cada que salgan nuevas novedades.</p>
                    <!-- Formulario POST -->
                    <form action="#" method="post">
                        <label for="#"><strong>Nombres:</strong></label><br>
                        <input class="w-100" type="text" placeholder="Ingrese sus nombres aquí" required><br>
                        <label for="#"><strong>Apellido:</strong></label><br>
                        <input class="w-100" type="text" placeholder="Ingrese sus apellidos aquí" required><br>
                        <label for="#"><strong>Correo electrónico:</strong></label><br>
                        <input class="w-100" type="email" placeholder="Ingrese su correo aquí" required><br>
                        <label for=""><input type="checkbox" required>Acepto los <a href="#">Terminos y condiciones</a>.</label><br><br>
                        <!-- Recapcha-->
                        <div class="text-center align-item-center">
                        <div class="g-recaptcha" data-sitekey="6LfFNBopAAAAABMWhUJ5Dx60Y-B41AUTsWfznU5m"></div>
                        </div>
                        <!-- boton enviar datos -->
                        <div class="d-flex justify-content-center">
                            <input class="btn-enviar fw-semibold" type="submit" value="Enviar Datos">
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>  
    </main>
    <!-- ++++++++++++++++++++ FOOTER +++++++++++++++++ -->
    <footer class="container-fluid text-center bg-dark text-light py-4" id="footer">
        <div class="row d-flex align-items-center">
            <div class="col-md-7 px-5">
                <h5 class="fw-light">Nosotros</h5>
                <h6 class="fw-light">
                    Somos una empresa de venta en productos generales, nuestro proposito de la empresa es ofrecer articulos del hogar, al menor precio posible, ademas que destacamos por tener beneficios a nuestros clientes, como descuento o campañas de promociones.
                </h6>  
            </div>
            <div class="col-md-5 d-flex align-items-center justify-content-center px-5">
                <h5 class="fw-light">Siguenos en redes:</h5>
                <img class="ps-2" src="img/fb.png" alt="" height="20">
                <img class="ps-2" src="img/ig.png" alt="" height="20">
                <img class="ps-2" src="img/tw.png" alt="" height="20">
                <img class="ps-2" src="img/yt.png" alt="" height="20">
            </div>
        </div>
    </footer>
    <article class="container-fluid">
        <div class="row derechos-reservados text-center">
            <p class="pt-3 fw-semibold">© Comprando en linea, todos los derechos reservados.</p>
        </div>
    </article>
    <!--  Boostrap js y Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>