<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <title>Flexi Frio Automotive</title>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-W9MF8K2');</script>
    <!-- End Google Tag Manager -->
    
    <meta name="viewport" content="width=device-width, initial-scale=0.8">
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-136312216-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-136312216-1');

    </script>


</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W9MF8K2"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
    <script type="text/javascript" src="scripts/myscript.js"></script>
    <div id="header" class="container sticky-top">
        <div id="header-row" class="row">
            <div class="col-6 col-md-3 mt-1">              
                <img class="icon" src="icons/v2.0/whatsapp-logo.svg" alt="Whatsapp">           
                <img class="icon" src="icons/v2.0/facebook-logo.fw.svg" alt="Facebook">          
                <img class="icon" src="icons/v2.0/logo-de-instagramwhite.fw.svg" alt="Instagram">                
            </div>
            <div class="col-3 offset-6 col-md-9 ml-auto">
                <nav class="navbar navbar-expand-lg navbar-light">                 
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#inicio_flota">Flota</a>
                        </li>                        
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.html">Contacto</a>
                        </li>                         
                    </div>
                  </nav>
            </div>
        </div>        
    </div>
    <div class="container">
        <div class="row">
            <div class="col portada  text-right">
                <img src="/Prototipos/fachada.jpg" id="header_img" alt="Automotive">
                <div id="titulo">
                    <h1>ALQUILER Y RENTING FLEXIBLE DE VEHICULOS FRIGORIFICOS</h1>
                    <h2>Alquiler a corto o largo plazo</h2> 
                </div>                    
            </div>            
        </div>
        <div class="row">
            <div class="col">
                <div class="alert alert-primary" role="alert">
                    <?php echo $_GET['message'];
                    ?>
                  </div>
            </div>
        </div>
        <div id="presentación" class="row">
            <div class="col-6 mt-4">                
                <p>Bienvenido a la pagina web de AUTOMOTIVE FLEXIFRIO, alquiler y renting de vehículos frigoríficos</p>
                <p>Automotive es una empresa innovadora, dinámica y actual. Por ello siempre busca nuevas líneas de negocio que puedan aportar 
                    mayor valor añadido a nuestros clientes, en esta línea de crecimiento, hemos desarrollado un proyecto de alquiler y renting 
                    especializado en vehículos isotermo y frigoríficos. 
                <br>Poniendo a disposición de nuestros clientes, no solo el gran parqué de vehículos que disponemos en stock, 
                sino también toda la experiencia acumulada en la fabricación, optimización y venta de vehículos refrigerados.<br></p>
                <p>En años como carroceros, hemos desarrollado nuestras aptitudes en la fabricación de isotermos y mejorado los procesos 
                    de producción y postventa. Aportándonos la confianza de nuestros clientes y la seguridad para emprender nuevas líneas de desarrollo. 
                </p>
            </div>        
            <div  class="col-6 mt-4 text-center oficina">
                <img class="img" src="/images/oficina.jpg" alt="oficina">
            </div>
        </div>
        <div class="row campa mt-4">
            <div class="col-6 text-center oficina">
                <img class="img" src="/images/campa.jpg" alt="campa">
            </div>
            <div id="inicio_flota"  class="col-6">
                <p>Ponemos a disposición de nuestros clientes, no solo el gran parqué de vehículos que disponemos en stock, 
                    sino también toda la experiencia acumulada en la fabricación, optimización y venta de vehículos refrigerados.</p>
                <p>En años como carroceros, hemos desarrollado nuestras aptitudes en la fabricación de isotermos y mejorado los procesos de producción y postventa. 
                    Aportándonos la confianza de nuestros clientes y la seguridad para emprender nuevas líneas de desarrollo. </p>
            </div>
        </div>
        <div class="row">
            <div id="titulo_flota" class="col">
                <h2> Nuestra Flota </h2>
            </div>
        </div>
        <div class="row mb-3" id="flota">
            <div class="col-6">
                <div class="card card-home p-2 mb-2">
                    <img src="/images/FIAT-DOBLO-ISO.png" class="card-img-top" alt="Fiat Dobló">
                    <div class="card-body">
                      <h5 class="card-title">Volumen < 2m3</h5>
                      <p class="card-text">Vehículos versátiles, con bajo consumo y una agilidad perfecta. El vehículo ideal para repartos en zonas estrechas.</p>
                      <a href="#" class="btn btn-primary">Mas info</a>
                    </div>
                  </div>
            </div>
            <div class="col-6">
                <div class="card card-home p-2 mb-2">
                    <img src="/images/MERCEDES-VITO-ISO.png" class="card-img-top" alt="Mercedes Vito">
                    <div class="card-body">
                      <h5 class="card-title">Volumen < 4m3</h5>
                      <p class="card-text">Vehículos de tamaño medio, la combinación perfecta entre diseño compacto y capacidad de carga.</p>
                      <a href="#" class="btn btn-primary">Mas info</a>
                    </div>
                  </div>
            </div>
            <div class="col-6">
                <div class="card card-home p-2 mb-2">
                    <img src="/images/DUCATO-L4H3.png" class="card-img-top" alt="Fiat Ducato">
                    <div class="card-body">
                      <h5 class="card-title">5m3 < Volumen  < 12m3</h5>
                      <p class="card-text">Vehículos de gran volumen, capacidad para cargas grandes sin renunciar a la movilidad.</p>
                      <a href="#" class="btn btn-primary">Mas info</a>
                    </div>
                  </div>
            </div>
            <div class="col-6">
                <div class="card card-home p-2 mb-2">
                    <img src="/images/SPRINTER_CARROZADO.png" class="card-img-top" alt="Mercedes Sprinter">
                    <div class="card-body">
                      <h5 class="card-title">Volumen > 12m3</h5>
                      <p class="card-text">Vehículos carrozados de varios tamaños  y pesos máximos. Para los repartos mas exigentes.</p>
                      <a href="#" class="btn btn-primary">Mas info</a>
                    </div>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-between mb-2">               
                <img class="sideimages" src="icons/flexibilidad.svg" alt="Flexibilidad"/>
                <img class="sideimages" src="icons/atencion.svg" alt="Atencion Personalizada"/>
                <img class="sideimages" src="icons/localizacion.svg" alt="Servicios de Geolocalización"/>
                <img class="sideimages" src="icons/mantenimiento.svg" alt="Mantenimientos"/>
                <img class="sideimages" src="icons/neumaticos.svg" alt="Sustitución de Neumáticos"/>
                <img class="sideimages" src="icons/entrega.svg" alt="Entrega Nacional"/>                
            </div>
        </div>
        <div class="row footer">
            <div class="col-4 footitem">
                <p> <span>© </span>
                    AUTOMOTIVE SERVICES 2014 SLU<br>
                    CARRETERA. N-340a KM 1043,5 <br>
                    BENICARLO 12580 CASTELLON
                </p>
    
                <ul>
                    <li><span>Telefono:<a class="link" href=""> 964471950</a></span></li>
                    <li><span>Email:<a class="link" href=""> alquileres@flexifrio.com</a></span></li>
                </ul>
            </div>
            <div class="col-4 footitem">
                <ul id="list_legal">
                    <li><a class="link" href="">Política de Privacidad</a></li>
                    <li><a class="link" href="">Política de Cookies</a></li>
                    <li><a class="link" href="">Aviso legal</a></li>
                </ul>
            </div>
            <div class="col-4 footitem">
                <h3>Sigue Conectado</h3>
                <a href=""><img src="icons/fdefacebook.png" alt="Facebook"/></a>
                <a href=""><img src="icons/whatsappwhite.png" alt="WhatsApp"/></a>
                <a href=""><img src="icons/logo-de-instagramwhite.png" alt="Instagram"/></a>
                <a href=""><img src="icons/linkedin-logowhite.png" alt="LinkedIn"/></a>
            </div> 
            <div class="col footitem text-center">
                <span>Designed by <a class="link" href="http://www.tpgimeno.com">@TpGimeno</a></span>
            </div>          
        </div>
        <div class="row">
            <div class="col">
                <div>Icons made by <a href="https://www.flaticon.es/autores/chanut" title="Chanut">Chanut</a> from <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.com</a></div>
            </div>
        </div>
        
    </div> 

     
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>

