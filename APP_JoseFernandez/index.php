<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>App Ejercicios PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-dark">
    <div class="container">
        <!-- Cabecera -->
        <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom border-success">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="images/logo-fp.jpg" alt="FP Pro" height="28" style="margin: 5px;" class="shadow"/>
            </a>

            <ul class="nav nav-pills">
                <li class="nav-item"><a href="index.php" class="nav-link active bg-success text-white" aria-current="page">Home</a></li>
                <li class="nav-item"><a href="ejercicios/variables/index.php" class="nav-link text-success">Variables</a></li>
                <li class="nav-item"><a href="ejercicios/arrays/index.php" class="nav-link text-success">Arrays</a></li>
                <li class="nav-item"><a href="ejercicios/estructuras/index.php" class="nav-link text-success">Estructuras de Control</a></li>
                <li class="nav-item"><a href="ejercicios/funciones/index.php" class="nav-link text-success">Funciones</a></li>
                <li class="nav-item"><a href="ejercicios/formularios/index.php" class="nav-link text-success">Formularios</a></li>
                <li class="nav-item"><a href="ejercicios/sesiones/index.php" class="nav-link text-success">Sesiones y Cookies</a></li>
            </ul>
        </header>
        <!-- Fin Cabecera -->

        <main>
            <div id="carouselExampleCaptions" class="carousel slide mb-4 border rounded-3 border-success">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active " aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/php_imagen.jpg" class="d-block w-100 rounded" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="shadow">Practicas realizadas en PHP</h5>
                            <p class="shadow">Realizadas para Entorno Servidor por Jose Fernandez Moreno</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="images/Agradecimiento-Open-Day.jpg" class="d-block h-100 w-100 rounded" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="shadow">Hecho para FPPro</h5>
                            
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="row align-items-md-stretch ">
                <div class="col-md-6">
                    <div class="h-100 p-5 text-bg-dark rounded-3 border border-success">
                        <h2>Actividades</h2>
                        <p>Es necesario que cada actividad debe estar includida en su carpeta correspondiente. Navega a través de la estructura de carpetas de la aplicación antes de añadir cualquier ejercicio de manera que quede claro donde debe ir cada una..</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="h-100 p-5 bg-body-tertiary border rounded-3">
                        <h2>Enlaces de Ayuda</h2>
                        <p>Puedes editar las páginas de la aplicación para darle el formato deseado. Recuerda que puedes consultar las páginas oficiales de documentación de las técnologias que usamos en esta app.</p>
                        <a src="https://www.php.net/docs.php" class="btn btn-outline-secondary" target="_blank">Ir a PHP Docs</a>
                        <a src="https://getbootstrap.com" class="btn btn-outline-secondary" target="_blank">Ir a Bootstrap</a>

                    </div>
                </div>
            </div>

            <footer class="pt-3 mt-4 text-body-secondary border-top border-success">
                © 2024 FPPRO Desarrollo Aplicaciones Web en Entorno Servidor
            </footer>
    </div>
    </main>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>