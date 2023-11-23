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
    <!-- Link bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
    <!-- ++++++++++++++++++++ NAV ++++++++++++++++++ -->
    <nav class="navbar navbar-dark navbar-expand-lg bg-dark" style="position: sticky; top: 0;">
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
            <a class="nav-link active" href="servicios.php">Servicio</a>
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
    <!-- ++++++++++++++++++++ main ++++++++++++++++++ -->
    <main>
        <article class="container-fluid text-center">
            <div class="row py-5">
                <div class="col">
                    <h2 class="titulo-landing fw-bolder">Servicios</h2>
                    <p class="px-5">Ofrecemos diversos servicios para mejorar la experiencia de nuestros clientes de forma presencial en nuestros locales, como también de forma virtual con la usabilidad de nuestra página.</p>
                </div>
            </div>
        </article>
        <article class="container-fluid bg-servicios text-center py-5">
            <div class="row">
                <div class="col-lg-4 bg-servicios-gris bg-servicios-general">
                    <div>
                        <h5><strong>Redes sociales</strong></h5>
                        <img class="round rounded-circle" src="img/redes.jpg" alt="" height="250">
                    </div>
                    <div class="info px-5">
                        <p>Nos puedes encontrar en las redes sociales, para que poder comunicarnos y también interacuar con las dinámicas que proponemos.</p>
                        <!-- Botón Modal -->
                        <button class="btn btn-mas-info btn-lg" data-bs-toggle="modal" data-bs-target="#mi-modal-1">Más información</button>
                        <div class="modal fade" id="mi-modal-1" tabindex="-1" aria-hidden="true" aria-labelledby="label-modal-1" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><strong>Redes sociales</strong></h5>
                                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                    </div>
                                    <div class="modal-body text-start">
                                        En el transcurso de los meses nos dimos cuenta que en la actualidad la mejor forma de llevar a ustedes los consumidores es a través de las redes sociales. Haci que es un placer para nosotros, <strong>Olinea</strong>, invitarlos a sumarse a esta comunidad, donde proximamente ofreceremos regalos y ofertas exclusivas. <br><br>
                                        Siguenos: 
                                        <a href="#">Facebook</a> <a href="#">Twitter</a> <a href="#">Youtube</a> <a href="#">Instagram</a>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Continuar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fin de botón modal -->
                    </div>
                </div>
                <div class="col-lg-4 bg-servicios-general">
                    <div>
                        <h5><strong>Entrega a domicilio</strong></h5>
                        <img class="round rounded-circle" src="img/domicilio.jpg" alt="" height="250">
                    </div>
                    <div class="info px-5">
                        <p>Tenemos entregas a domicilio en todo el país y algunos países vecinos, ofreciendo el contenido deseado y sin ningún daño.</p>
                        <!-- Botón Modal -->
                        <button class="btn btn-mas-info btn-lg" data-bs-toggle="modal" data-bs-target="#mi-modal-2">Más información</button>
                        <div class="modal fade" id="mi-modal-2" tabindex="-1" aria-hidden="true" aria-labelledby="label-modal-2" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><strong>Entregas a domicilio</strong></h5>
                                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                    </div>
                                    <div class="modal-body text-start">
                                        Porque nuestro consumidor es lo primero, implementamos la modalidad de entrega a domicilio, para que evitarles los riesgos de salir a altas horas de la noche. Garantizamos que el producto llegue en óptimas condiciones y en un corto tiempo. <br><br>
                                        Para pedidos comunicarse al: 904567123
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Continuar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fin de botón modal -->
                    </div>
                </div>
                <div class="col-lg-4 bg-servicios-gris bg-servicios-general">
                    <div>
                        <h5><strong>Sucursales</strong></h5>
                        <img class="round rounded-circle" src="img/sucursal.jpg" alt="" height="250">
                    </div>
                    <div class="info px-5">
                        <p>Contamos con sucursales distribuidas en varios puntos del país encuentra las más cercanas habilitando tu ubicación.
                        </p>
                        <!-- Botón Modal -->
                        <button class="btn btn-mas-info btn-lg" data-bs-toggle="modal" data-bs-target="#mi-modal-3">Más información</button>
                        <div class="modal fade" id="mi-modal-3" tabindex="-1" aria-hidden="true" aria-labelledby="label-modal-3" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><strong>Sucursales</strong></h5>
                                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                    </div>
                                    <div class="modal-body text-start">
                                        Porque usted lo pidio, ahora estamos más cerca de ustedes, actualmente contamos con 15 puntos de venta físico a lo largo y ancho del país y posteriormente implementaremos más puntos. Participa en nuestra encuesta para poder llegar a más localidades. <br><br>
                                        Clic en el link para  realizar encuesta: <a href="#">Valoramos tu opinión</a>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Continuar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fin de botón modal -->
                    </div>
                </div>
            </div>
            <div class="row  pt-5">
                <div class="col-lg-4 bg-servicios-general">
                    <div>
                        <h5><strong>Técnicos especializados</strong></h5>
                        <img class="round rounded-circle" src="img/tecnico.jpg" alt="" height="250">
                    </div>
                    <div class="info px-5">
                        <p>Si algun producto llega a fallar, tenemos contratados a varios técnicos especializados para el arreglo de su producto.</p>
                        <!-- Botón Modal -->
                        <button class="btn btn-mas-info btn-lg" data-bs-toggle="modal" data-bs-target="#mi-modal-4">Más información</button>
                        <div class="modal fade" id="mi-modal-4" tabindex="-1" aria-hidden="true" aria-labelledby="label-modal-4" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><strong>Técnicos especializados</strong></h5>
                                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                    </div>
                                    <div class="modal-body text-start">
                                        Dado el caso de contar con garantia por parte de la marca del artefacto o de parte de <strong>Olinea</strong>, comuniquese al siguiente número para ponerse en contacto con nuestros técnicos especializados. <br><br>
                                        Teléfono: (01)-200200 
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Continuar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fin de botón modal -->
                    </div>
                </div>
                <div class="col-lg-4 bg-servicios-gris bg-servicios-general">
                    <div>
                        <h5><strong>Metodos de pago</strong></h5>
                        <img class="round rounded-circle" src="img/pago.jpg" alt="" height="250">
                    </div>
                    <div class="info px-5">
                        <p>Puede pagar con efectivo u optar por targeta de crédito con la cual obtiene descuentos (dependiendo si lo compras online o localmente).</p>
                        <!-- Botón Modal -->
                        <button class="btn btn-mas-info btn-lg" data-bs-toggle="modal" data-bs-target="#mi-modal-5">Más información</button>
                        <div class="modal fade" id="mi-modal-5" tabindex="-1" aria-hidden="true" aria-labelledby="label-modal-5" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><strong>Métodos de pago</strong></h5>
                                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                    </div>
                                    <div class="modal-body text-start">
                                        Para evitar largas colas en cajeros electrónicos o agentes te ofrecemos la opción de realizar el pago contra entrega o hacerlo a través de aplicativos de pago como <strong>Yape, </strong><strong>Plin, </strong><strong>Tunqui..</strong>.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Continuar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fin de botón modal -->
                    </div>
                </div>
                <div class="col-lg-4 bg-servicios-general">
                    <div>
                        <h5><strong>Control de calidad</strong></h5>
                        <img class="round rounded-circle" src="img/control.jpg" alt="" height="250" width="250">
                    </div>
                    <div class="info px-5">
                        <p>Contamos con un grupo especializado dedicado a comprobar la calidad de nuestros productos antes de ser entregados al cliente.</p>
                        <!-- Botón Modal -->
                        <button class="btn btn-mas-info btn-lg" data-bs-toggle="modal" data-bs-target="#mi-modal-6">Más información</button>
                        <div class="modal fade" id="mi-modal-6" tabindex="-1" aria-hidden="true" aria-labelledby="label-modal-6" data-bs-backdrop="static">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title"><strong>Control de calidad</strong></h5>
                                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                                    </div>
                                    <div class="modal-body text-start">
                                        Porque queremos ver a nuestros clientes contentos y a gustos de sus compras, contamos con personal capacitado y entrenado para comprobar el buen estado de nuestros productos, para asi brindar un servicio de calidad y usted regrese a visitarnos. <br><br>
                                        <strong>¡Muchas gracias por tu preferencia!</strong>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Continuar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- fin de botón modal -->
                    </div>
                </div>
            </div>
        </article>
    </main>
    <!-- ++++++++++++++++++++ FOOTER +++++++++++++++++ -->
    <footer class="container-fluid bg-dark text-light">
        <section class="row footer-servicios py-4">
            <article class="col-md-5 col-xl-7 container text-center py-2">
                <h5>Nosotros</h5>
                <p class="fw-light px-4">
                Somos una empresa de venta en productos generales, nuestro proposito de la empresa es ofrecer productos y articulos, al menor precio posible, ademas que destacamos por tener beneficios a nuestros clientes, como descuento o campañas de promociones. Y constantemente desarrollamos actividades dinámicas con nuestros clientes.
                </p>
            </article>
            <article class="col-md-6 col-xl-5 container text-center pb-3">
                <form action="#" method="POST">
                    <h5>Escribenos</h5>
                    <hr>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Correo electronico">
                    </div>
                    <div class="mb-3">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mensaje"></textarea>
                        <div class="text-center align-item-center recaptcha">
                        <div class="g-recaptcha" data-sitekey="6LfFNBopAAAAABMWhUJ5Dx60Y-B41AUTsWfznU5m"></div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary px-5">Enviar</button>
                </form>
            </article>
            
        </section>
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