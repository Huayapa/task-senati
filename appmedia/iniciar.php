<!DOCTYPE html>
<html lang="es-pe">
<head>
<!-- Cojunto de caracter universal -->
<meta charset="UTF-8">
    <!-- Para que la pagina se visible -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Titulo para la pestaña del navegador -->
    <title>Iniciar Sesion</title>
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
    <link rel="preload" href="css/fontello.css" as="style">
</head>
<body>
    <header class="nav-bar">
        <a href="index.html">
            <img src="img/main.png" alt="imagen logo">
        </a>
    </header>
    <main class="main">
        <h2>Iniciar Sesión</h2>
        <form action="panel.php" method="post" class="main__form">
            <div class="form__datos">
                <input type="text" name="usuario" id="usuario" placeholder="Ingrese su Usuario" required><br>
                <input type="password" name="password" id="password" placeholder="Ingrese su Password" required><br>
            </div>
            <div class="form__interactuar">
                <input type="submit" value="Ingresar">
                <a href="nuevousuario.php" class="enlace_1">Registrarse</a>
                <a href="index.html" class="enlace_2">Regresar</a>
            </div>
        </form>
    </main>
</body>
</html>