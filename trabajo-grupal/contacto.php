<!DOCTYPE html>
<html lang="en">
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
            <a class="nav-link active" href="contacto.php">Contacto</a>
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
    <main class="main-contacto">
        <form class="form">
            <img src="" alt="">
            <h1>contactanos</h1>
            <img src="https://www.poluxrt.com/assets/images/contacto.jpg" alt="" class="hero-img-">
                <p>
                    si tienes alguna duda o quieres contactarnos
                    puedes enviarnos un correo 
                </p>
            <h2>completa tu informacion </h2>
            <div class="input-group">
                <label for="name">Nombre Completo</label>
                <input type="text" name="name" id="name" placeholder="" >
                <label for="name">Apellido Completo</label>
                <input type="text" name="name" id="name" placeholder="" >
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="" >
                <label for="message">Asunto</label>
                <textarea name="message" id="message" cols="30" rows="5" placeholder=""></textarea>
                <input class="btn" type="submit" value="Enviar">
            </div>
            <p><i>gracias por confiar en nosotros</i> </p> 
        </form>
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