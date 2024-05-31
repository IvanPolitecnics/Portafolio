<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Portafolio</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kodchasan:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- Barra de navegación -->
    <nav class="navbar">
        <div class="navbar-logo">
            <img src="images/logoPortafolioBlanco.png" alt="Logo">
        </div>
        <ul class="navbar-links">
            <li><a class="nav-link" href="#sobremi">Sobre mi</a></li>
            <li><a class="nav-link" href="#conocimientos">Conocimientos</a></li>
            <li><a class="nav-link" href="#proyectos">Proyectos</a></li>
            <li><a class="nav-link" href="#contacto">Contacto</a></li>
        </ul>
        <script>
            // Desplazamiento suave al hacer clic en los enlaces de la barra de navegación
            document.querySelectorAll('.nav-link').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();

                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
        </script>
    </nav>

    <!-- Sección principal -->
    <section class="section" id="inicio">
        <!-- Lámpara de Lava -->
        <div class="lamp">
            <div class="lava">
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob"></div>
                <div class="blob top"></div>
                <div class="blob bottom"></div>
            </div>
        </div>

        <!-- Fin Lámpara de Lava -->
        <div class="containerInicio">
            <h1>Ivan Jovanovich</h1>
            <p>WEB DEVELOPER</p>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
            <defs>
                <filter id="goo">
                    <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur" />
                    <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7"
                        result="goo" />
                    <feBlend in="SourceGraphic" in2="goo" />
                </filter>
            </defs>
        </svg>
    </section>

    <!-- Sección de sobremi -->
    <section class="section" id="sobremi">
        <div class="container">
            <h2 class="section-title">Sobre mi</h2>
            <br>
            <br>
            <br>
            <br>
            <br>

            <div class="content">
                <div class="left-content">
                    <p>Hola, mi nombre es Ivan y soy estudiante de segundo año de <strong>Desarrollo</strong> de
                        <strong>Aplicaciones Web</strong>.
                        <br>
                        <br>
                        Durante mi formacion he aprendido <strong>gestionar mi tiempo</strong>, <strong>trabajar en
                            equipo</strong> y distintos lenguajes
                        de programacion enfocados en el <strong>desarrollo</strong> y <strong>diseño web</strong> como
                        <strong>JAVA</strong>, <strong>PHP</strong>, <strong>HTML</strong>, <strong>VUE</strong>,
                        <strong>JavaScript</strong>, entre otros.
                        <br>
                        <br>
                        Actualmente, estoy buscando oportunidades para aplicar y expandir mis conocimientos en un
                        entorno profesional.
                    </p>
                </div>
                <div class="right-content">
                    <div class="card">
                        <div class="card-photo"></div>
                        <div class="card-title">IVAN JOVANOVICH <br>
                            <span>Web developer</span>
                        </div>
                        <div class="card-photos">
                            <!-- <img src="images/LinkedIn.png" alt="Imagen 1" class="card-photo-img">
                            <img src="images/GitHub.png" alt="Imagen 2" class="card-photo-img">
                            <img src="images/cv.png" alt="Imagen 3" class="card-photo-img"> -->
                            <a href="https://enlace1.com" target="_blank">
                                <img src="images/LinkedIn.png" alt="Imagen 1" class="card-photo-img">
                            </a>
                            <a href="https://enlace2.com" target="_blank">
                                <img src="images/GitHub.png" alt="Imagen 2" class="card-photo-img">
                            </a>
                            <a href="https://enlace3.com" target="_blank">
                                <img src="images/cv.png" alt="Imagen 3" class="card-photo-img">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Sección de conocimientos -->
    <section class="section" id="conocimientos">
        <div class="container">
            <h2>Conocimientos</h2>
            <br>
            <br>
            <br>
            <br>
            <br>

            <div class="card-grid">
                <div class="card">
                    <img src="images/Java.png" alt="Descripción de la imagen 1" class="card-image">
                </div>
                <div class="card">
                    <img src="images/PHPlogo.png" alt="Descripción de la imagen 2" class="card-image">
                </div>
                <div class="card">
                    <img src="images/HTML5_1.png" alt="Descripción de la imagen 3" class="card-image">
                </div>
                <div class="card">
                    <img src="images/CSS3azul.png" alt="Descripción de la imagen 4" class="card-image">
                </div>
                <div class="card">
                    <img src="images/JavaScript.png" alt="Descripción de la imagen 5" class="card-image">
                </div>
                <div class="card">
                    <img src="images/MySQLdelf.png" alt="Descripción de la imagen 6" class="card-image">
                </div>
            </div>
            </div>
        </div>
    </section>

    <!-- Sección de proyectos -->
    <section class="section" id="proyectos">
        <div class="containerProyectos">
            <h2>Proyectos</h2>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="cards">
                <div class="card">
                    <img src="images/cientifiks.png" alt="Descripción de la imagen 1" class="card-image">
                    <div class="card__content">
                        <p class="card__title">Cientifiks en joc</p>
                        <p class="card__description">Un juego web educativo hecho en JavaScript con cuatro minijuegos: 
                            una carrera por el safari, el juego de la oca, una carrera de elefantes y atrapar la electricidad.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/autoa.png" alt="Descripción de la imagen 1" class="card-image">
                    <div class="card__content">
                        <p class="card__title">Autoavaluació</p>
                        <p class="card__description">Aplicación web desarrollada con Laravel y PHP para gestionar usuarios 
                            (administrador, profesor y alumno) y mostrar datos desde una base de datos.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/jocrol.png" alt="Descripción de la imagen 1" class="card-image">
                    <div class="card__content">
                        <p class="card__title">Joc de rol</p>
                        <p class="card__description">Un juego de rol estilo Dungeons & Dragons desarrollado en Java, 
                            ofreciendo una experiencia de aventura y estrategia.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="images/serpiente.png" alt="Descripción de la imagen 1" class="card-image">
                    <div class="card__content">
                        <p class="card__title">Snake</p>
                        <p class="card__description">Clásico juego de la serpiente hecho en Java, 
                            donde la serpiente crece al comer manzanas, incrementando la dificultad con cada nivel.</p>
                    </div>
                </div>
            </div>
            <!-- Video interactivo -->
        <!-- <div class="video-container">
            <video id="portfolioVideo" width="600" controls>
                <source src="images/0527.mp4" type="video/mp4">
                Tu navegador no soporta el elemento de video.
            </video>
            <button id="togglePlay" class="video-button">Pausar</button> 
        </div>-->
        <!-- <script>
            document.getElementById('togglePlay').addEventListener('click', function () {
                var video = document.getElementById('portfolioVideo');
                if (video.paused) {
                    video.play();
                    this.textContent = 'Pausar';
                } else {
                    video.pause();
                    this.textContent = 'Reanudar';
                }
            });
        </script>
    -->
        </div>

    </section>

    <!-- Sección de contacto -->
    <section class="section" id="contacto">
        <div class="container">
            <h2>Contacto</h2>
            <form class="form">
                <div class="title">Contacto</div>
                <input type="text" placeholder="Tu email" class="input">
                <textarea placeholder="Mensaje"></textarea>
                 
                <button>Enviar</button>
            </form>
        </div>
    </section>
</body>

</html>
