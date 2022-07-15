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
            <source src="video/video_2.mp4" type="video/mp4">
        </video>
        <div class="flow">
            <h1>Seven Days Living Easy</h1>
            <h2>Urban bike for the everyday</h2>
        </div>
    </section>
    <section class="general flex">
         <div id="negra" class="colbic1 activo flex fdcolumn">
             <img src="img/easyesp1.webp" alt="">
             <img src="img/easyesp2.webp" alt="">
             <img src="img/negra3.webp" alt="">
         </div>
         <div id="roja" class="colbic1roja flex fdcolumn">
             <img src="img/roja1.webp" alt="">
             <img src="img/roja2.webp" alt="">
             <img src="img/roja3.webp" alt="">
         </div>
         <div class="colbic2">
             <h2>7D Living Easy</h2>
             <h4> 2.600,00 €</h4>
             <p>Color</p>
             <div class="flex">
                 <div data-bici="negra" class="fuera">
                     <div class="cirblack"></div>
                </div>
                 <div  data-bici="roja" class="fuera">
                    <div class="cirroj"></div>
                 </div>
             </div>
             <p class="talla">Por favor, selecciona una Talla</p>
             <div class="grid flex acenter jcenter fwrap">
                 <div class=""><p>S1</p></div>
                 <div><p>S2</p></div>
                 <div><p>S3</p></div>
                 <div><p>S4</p></div>
                 <div><p>S5</p></div>
                 <div><p>S6</p></div>
             </div>
             <p class="guia">Guía de Tallas  <i class="fa-solid fa-ruler-horizontal"></i></p>
            <span class="boton">
                Añadir a la cesta
            </span>
            <span class="boton">
                Disponibilidad en tienda
            </span>
            <p class=rollofinal>La Seven Days Living Easy incorpora todas las novedades que deseas de la Stumpjumper, como la nueva cinemática de la suspensión y geometría, en un cuadro de aluminio que es tanto ligero como extraordinariamente resistente. Remátala con un fiable grupo SRAM SX de 12 velocidades, y tienes la bici perfecta para tu próxima aventura Trail. </p>
         </div>
    </section>
    <section class="caracteristicas wrapper">
        <h2>Geometría</h2>
        <div class="flex">
        <div class="tabla">
            <div class="row titulo">
                <div class="col"> </div>
                <div class="col"> S </div>
                <div class="col"> M </div>
                <div class="col"> L </div>
                <div class="col"> XL </div>
            </div>
            <div class="row">
                <div class="col">Longitud de biela </div>
                <div class="col"> 170mm </div>
                <div class="col"> 175mm </div>
                <div class="col"> 175mm </div>
                <div class="col"> 175mm </div>
            </div>
            <div class="row">
                <div class="col">Ancho manillar </div>
                <div class="col"> 760mm </div>
                <div class="col"> 760mm </div>
                <div class="col"> 760mm </div>
                <div class="col"> 760mm </div>
            </div>
            <div class="row">
                <div class="col">Longitud Potencia</div>
                <div class="col"> 60mm </div>
                <div class="col"> 75mm </div>
                <div class="col"> 75mm </div>
                <div class="col"> 75mm </div>
            </div>
            <div class="row">
                <div class="col">Saddle Width </div>
                <div class="col"> 155mm </div>
                <div class="col"> 143mm </div>
                <div class="col"> 143mm </div>
                <div class="col"> 143mm </div>
            </div>
            <div class="row">
                <div class="col">Longitud Tija Sillín </div>
                <div class="col"> 170mm </div>
                <div class="col"> 175mm </div>
                <div class="col"> 175mm </div>
                <div class="col"> 175mm </div>
            </div>
            <div class="row">
                <div class="col">Stack </div>
                <div class="col"> 760mm </div>
                <div class="col"> 760mm </div>
                <div class="col"> 760mm </div>
                <div class="col"> 760mm </div>
            </div>
            <div class="row">
                <div class="col">Reach</div>
                <div class="col"> 60mm </div>
                <div class="col"> 75mm </div>
                <div class="col"> 75mm </div>
                <div class="col"> 75mm </div>
            </div>
            <div class="row">
                <div class="col">Longitud de Pipa </div>
                <div class="col"> 155mm </div>
                <div class="col"> 143mm </div>
                <div class="col"> 143mm </div>
                <div class="col"> 143mm </div>
            </div>
        </div>
        </div>
       
    </section>
    <section class="masinfo flex acenter">
         <div class="izda">
            <h2>Aceleración suave</h2>
            <h2>con el motor Fantic</h2>
            <p>
            Porque al final del día, lo que importa es la ruta. Créetelo.Nuestro motor Turbo Full Power 2.2, y la Unidad de Control Turbo MasterMind (TCU) que lo controla, proporciona a la Levo una amplificación suave y perfecta de tu esfuerzo. 
            </p>
            <ul>
                <li>Autonomía media de 70 km</li>
                <li>Sensor de aceleración suave</li>
                <li>Capacidad de batería de 336 Wh</li>
            </ul>
        </div>
        <div class="dcha">
            <img src="img/image11.jpeg" alt="">
        </div>
    </section>
    <section class="masinfo dos flex acenter">
        <div class="dcha dos">
            <img src="img/image12.jpg" alt="">
        </div>
         <div class="izda">
            <h2>Display integrado</h2>
            <h2>elegancia Fantic</h2>
            <p>
            Nuestro motor Turbo Full Power 2.2, y la Unidad de Control Turbo MasterMind (TCU) que lo controla, proporciona a la Levo una amplificación suave y perfecta de tu esfuerzo. El cuadro optimizado cuenta con 150 mm de suspensión trasera personalizada y geometría ajustable que ofrece una conducción como ninguna otra. 
            </p>
            <ul>
                <li>Autonomía media de 70 km</li>
                <li>Capacidad de batería de 336 Wh</li>
                <li>Sensor de aceleración suave</li>
                <li>Par de 45 Nm</li>
            </ul>
        </div>
        
    </section>
    <section class="caracteristicas tecnicas wrapper">
        <h2>Especificaciones técnicas</h2>
        <div class="flex">
            <div class="tabla">
                <div class="row">
                    <div class="col">CUADRO </div>
                    <div class="col"> <h3>CUADRO</h3>Fibra de carbono completa FACT 11m, Geometría Trail 29, batería integrada en tubo diagonal, guiado de tija Command, espacio de 148mm, rodamientos ellados, 150 mm de recorrido<H3>ABRAZADERA SILLÍN</H3> Specialized Ti-bolt-type, alloy, 38.6mms </div>
                </div>
                <div class="row">
                    <div class="col">SUSPENSIÓN </div>
                    <div class="col"> <h3>AMORTIGUADOR</h3>
                    Fox Float DPX2 Factory, 3- position adjustment, 52.5x210mm, Rx Trail Tune</div>
                </div>
                <div class="row">
                    <div class="col">DIRECCIÓN </div>
                    <div class="col"> <h3>PUÑOS</h3>Deity, Knuckleduster, Negro <h3>TIJA DE SILLÍN</h3> RockShox Reverb AXS, 30.9mm, S: 125, M:150, L/XL: 170mm <h3>POTENCIA </h3> Deity Copperhead, 35.0mm
                    </div>
                </div>
                <div class="row">
                    <div class="col">TRANSMISiÓN </div>
                    <div class="col"> <h3>CAMBIO</h3> SRAM XX1 Eagle AXS <h3>MANDOS DE CAMBIO</h3> SRAM AXS Eagle Controller <h3>CADENA </h3> SRAM XX1 (arcoiris)
                    </div>
                </div>
            </div>
        </div>
       
    </section>
    <section class="slider dos">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="img/slider2_1.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>7D Living Easy</h5>
                <p>Tija doble de carbono</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="img/slider2_2.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Country & City</h5>
                <p>Manillar ancho técnico</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="img/slider2_3.jpeg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Segura y ligera</h5>
                <p>Freno de disco ultra ligero</p>
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
</body>
</html>