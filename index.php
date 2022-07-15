<!DOCTYPE html>
<html lang="en">
<head>
<?php
header("Expires: Tue, 01 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
?>
    <?php include "componentes/head.html"; ?>

    <title>Fantic</title>
</head>
<body>
    <?php include "componentes/menu.html"; ?>

    <section class="first flex acenter jcenter">
        <video loop autoplay muted>
            <source src="video/video.mp4" type="video/mp4">
        </video>
        <div class="flow">
            <h1>Feel the flow</h1>
            <h2>Mismo esfuerzo, doble recompensa.</h2>
        </div>
    </section>
    <section class="info">
         <div class="izda">
            <h2>¿Qué es una eBike?</h2>
            <p>
            La eBike es uno de los medios de transporte más sostenibles y desempeña un papel fundamental en la movilidad del futuro. Pero, ¿qué es una eBike, en qué se diferencia de una bicicleta normal y cómo enriquece tu vida?.
            </p>
            <p class="boton"> Más información</p>
        </div>
        <div class="abajo">
            <img src="img/filabicis.svg" alt="">
        </div>
            
    </section>
    <section class="tecnologia wrapper">
        <h4>Tecnología Fantic E-bike</h4>
        <div>
            <h2>Nuevos diseños y estilos de montar</h2>
        </div>
        <div class="tarjetas flex jbetween fwrap">
                <div class="tarjeta uno">
                    <img src="img/image7.jpg" alt="">
                    <div>
                        <h4>Nuevos diseños</h4>
                        <h2>MTB 2.0</h2>
                        <p>La nueva generación de bicicletas para MTB tiene los cuadros completamente rediseñados para más confort durante la marcha y una perfecta adaptabilidad en el día a día.</p>
                        <ul>
                            <li><i class="fa-solid fa-angles-right"></i>   Motores potentes</li>
                            <li><i class="fa-solid fa-angles-right"></i> Pedalada silenciosa</li>
                            <li><i class="fa-solid fa-angles-right"></i> Velocidad limitada</li>
                            <li><i class="fa-solid fa-angles-right"></i> Sin resistencia</li>
                        </ul>
                    </div>
                </div>
                <div class="tarjeta dos">
                    <img src="img/image10.jpg" alt="">
                    <div>
                        <h4>Más ligereza</h4>
                        <h2>Serie Carbon</h2>
                        <p>La nueva generación de bicicletas para MTB tiene los cuadros completamente rediseñados para más confort durante la marcha y una perfecta adaptabilidad en el día a día.</p>
                        <ul>
                            <li><i class="fa-solid fa-angles-right"></i>   Motores potentes</li>
                            <li><i class="fa-solid fa-angles-right"></i> Pedalada silenciosa</li>
                            <li><i class="fa-solid fa-angles-right"></i> Velocidad limitada</li>
                            <li><i class="fa-solid fa-angles-right"></i> Sin resistencia</li>
                        </ul>
                    </div>
                </div>
                <div class="tarjeta tres">
                    <img src="img/image9.jpg" alt="">
                    <div>
                        <h4>Trekking</h4>
                        <h2>Serie Living</h2>
                        <p>La nueva generación de bicicletas para MTB tiene los cuadros completamente rediseñados para más confort durante la marcha y una perfecta adaptabilidad en el día a día.</p>
                        <ul>
                            <li><i class="fa-solid fa-angles-right"></i>   Motores potentes</li>
                            <li><i class="fa-solid fa-angles-right"></i> Pedalada silenciosa</li>
                            <li><i class="fa-solid fa-angles-right"></i> Velocidad limitada</li>
                            <li><i class="fa-solid fa-angles-right"></i> Sin resistencia</li>
                        </ul>
                    </div>
                 </div>
        </div>
    </section>
    <section class="gal">
        <h4>Graba tus experiencias</h4>
        <h2>Gopro y Fantic, un tandem perfecto</h2>
        <div class="galeria wrapper flex jcenter fwrap">
            <div class="col izquierda flex fdcolumn">
                    <div class="arriba">
                        <a href="#"><img src="img/galeria1s.jpg" alt="">
                            <div class="overlay flex acenter jcenter fdcolumn">
                                <h2>
                                Go-pro & Fantic Experience
                                </h2>  
                                <p class="boton">
                                    Ver vídeo
                                </p>      
                            </div>
                        </a> 
                    </div>
                    <div class="abajo">
                        <a href="#"><img class= "foto" src="img/galeria2.webp" alt="">
                            <div class="overlay flex acenter jcenter fdcolumn"> 
                                <h2>
                                ¿Lista para la aventura?
                                </h2>   
                                <p class="boton">
                                    Ver vídeo
                                </p>
                            </div>
                        </a>
                    </div>   
                </div>
                <div class="col derecha flex">
                        <a href=""><img src="img/galeria3s.jpg" alt="">
                            <div class="overlay flex acenter jcenter fdcolumn"> 
                                <h2>
                                    Enduro para todos
                                </h2> 
                                <p class="boton">
                                    Ver vídeo
                                </p> 
                            </div>
                        </a>
                </div>
            </div>
        </div>
            
    </section>
    <section class="slider wrapper">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="img/slider1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Alcanza sitios que jamás soñaste</h5>
                <p>Disfruta como nunca rutas que no estaban a tu alcance.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="img/slider2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Conecta con la E</h5>
                <p>Conecta con otros deportistas que se superan cada día.</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="img/slider3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>No te pongas límites</h5>
                <p>Rueda más lejos, más a menudo.</p>
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
    </section>
    <?php include "componentes/footer.html"; ?>
    <!-- <footer class="flex">
        <div class="container justify-content-center">             
            <div class="row d-flex justify-content-around">
                <div class="col-2 enlaces d-flex flex-column">
                    <p class="tipo">Company</p>
                    <a href="#" class="footer">Media</a> 
                    <a href="#" class="footer">Contacto</a>
                    <a href="#" class="footer">Trabaja con nosotros</a>
                </div>         
                <div class="col-2 d-flex flex-column">
                    <p class="tipo">Fantic World</p>
                    <a href="#" class="footer">Dealers</a> 
                    <a href="#" class="footer">Fantic Racing</a>
                    <a href="#" class="footer">News</a>
                </div>         
                <div class="col-2 d-flex flex-column">
                    <p class="tipo">E-bikes</p>
                    <a href="#" class="footer">E-Mtb Trail</a> 
                    <a href="#" class="footer">E-Mtb Mountain</a>
                    <a href="#" class="footer">E-Mtb Enduro</a>
                    <a href="#" class="footer">E-Mtb Downhill</a>
                    <a href="#" class="footer">E-Mtb Hard Tail</a>
                </div>         
                <div class="col-2 d-flex flex-column">
                    <p class="tipo">Motos</p>
                    <a href="#" class="footer">Caballero </a> 
                    <a href="#" class="footer">Enduro</a>
                    <a href="#" class="footer">Motard</a>
                    <a href="#" class="footer">Motocross</a>
                </div>         
                <div class="col-2 d-flex flex-column">
                    <p class="tipo">E-mobility</p>
                    <a href="#" class="footer">Issimo</a> 
                    <a href="#" class="footer">Scooter</a>
                    <a href="#" class="footer">Eléctrico</a>
                </div>   
                <div class="col-2 d-flex flex-column">
                    <p class="tipo">Informaciones</p>
                    <a href="#" class="footer">Cookies Policy</a> 
                    <a href="#" class="footer">Informaciones</a>
                </div>        
            </div>
            <div class="col-12 d-flex jcenter redsocial">
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-google"></i>
                    <i class="fa-brands fa-instagram"></i>
            </div>  
            <div class="col-12">
                <p class="nota1">Este sitio permite el envío de cookies, incluso de terceros, para enviarte anuncios y servicios en línea con tus preferencias. Si quieres saber más o negar el consentimiento a todos o a algunas cookies.</p>
        </div>

    </footer> -->
</body>
</html>