<!DOCTYPE html>
<html lang="es-pe">
<head>
<!-- Cojunto de caracter universal -->
<meta charset="UTF-8">
    <!-- Para que la pagina se visible -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titulo para la pestaña del navegador -->
    <title>Panel de Sesion</title>
    <!-- Vinculacion con CSS y fontello-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/fontello.css">
    <!-- Utilizado para la declaracion del asunto en el sitio web -->
    <meta name="subject" content="Insertar asunto"> <!--Añadir-->
    <!-- Palabras claves para indicar la tematica de la web  -->
    <meta name="keywords" content="Asunto"> <!--Añadir-->
    <!-- Es la URL que considera reprensentativa en los navegadores -->
    <link rel="canonical" href="https://www.midominio.com"> <!--Añadir-->
    <!-- Es para que el navegador comienze a descargar este archivo primero -->
    <link rel="preload" href="css/style.css" as="style">
</head>
<body>
    <header class="navbar-hackathon">
        <img src="img/main.png" alt="imagen logo">
        <div>
            <h1>Hackathon en casa</h1>
            <p>Conoce qué consejos seguir durante el estado de emergencia por el COVID-19</p>
        </div>
        <img src="img/hackaton-senati.png" alt="logo imagen" class="hackaton">
    </header>
    <main class="main-panel">
        <div class="box1">
            <img src="img/imagen-perfil.png" alt="imagen de perfil">
            <div class="form__interactuar">
                <a href="iniciar.php" class="enlace_0">Cerrar Sesión</a>
            </div>
        </div>
        <nav class="nav-bar-box0">
            <img src="img/main.png" alt="">
            <div class="enlaces">
                <a href="index.html">Inicio</a>
                <a href="nuevousuario.php">Registro</a>
            </div>
        </nav>
        <div class="box2">
            <h2 class="box2_title">PANEL DE CONTROL</h2>
            <div class="box2_perfil">
                <h2>Mi perfil</h2>
                <div>
                    <img src="img/editar-perfil.png" alt="imagen de perfil">
                    <a href="#">Editar perfil</a>
                </div>
            </div>
        </div>
        <div class="box3">
            <h4>Bienvenido :</h4>
            <?php 
                $name = $_POST["usuario"];
                echo"<p>$name</p>";
            ?>
        </div>
    </main>
</body>
</html>