<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cafe paris</title>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
  <link href="css/app/css/bootstrap.min.css" rel="stylesheet">
  <link href="css/app/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/app/css/templatemo-style.css" rel="stylesheet">
  <link rel="shortcut icon" href="images/app/img/favicon.ico" type="image/x-icon" />

  </head>
  <body>
    <div class="tm-top-header">
      <div class="container">
        <div class="row">
          <div class="tm-top-header-inner">
            <div class="tm-logo-container">
              <img src="images/app/img/logo.png" alt="Logo" class="tm-site-logo">
              <h1 class="tm-site-name tm-handwriting-font">Café Paris</h1>
            </div>
            <div class="mobile-menu-icon">
              <i class="fa fa-bars"></i>
            </div>
            <nav class="tm-nav">
              <ul>
                <li><a href="{{route('index_home')}}" >Inicio</a></li>
                <li><a href="{{route('menu')}}" >Menu</a></li>
                <li><a href="{{route('index_login')}}">inicio de sesión</a></li>
                <li><a href="{{route('contacto')}}"  class="active">Contacto</a></li>
                <li><a href="{{route('crear_cuenta')}}" >crear una cuenta</a></li>
              </ul>
            </nav>   
          </div>           
        </div>    
      </div>
    </div>
    <section class="tm-welcome-section">
      <div class="container tm-position-relative">
        <div class="tm-lights-container">
          <img src="images/app/imgs/light.png" alt="Light" class="light light-1">
          <img src="images/app/img/light.png" alt="Light" class="light light-2">
          <img src="images/app/img/light.png" alt="Light" class="light light-3">  
        </div>        
        <div class="row tm-welcome-content">
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="images/app/img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Contacto&nbsp;&nbsp;<img src="images/app/img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">Café Paris</h2>
          <p class="gray-text tm-welcome-description">Café Paris ofrece los mejores <span class="gold-text">Café, postres y snaks</span> de <span class="gold-text">tecamachalco</span>. Ofrecemos el mejor Café para que lo disfrutes en tus tiempos libres y te desconectes del mundo por un momento.</p>   
          </div>
        <img src="images/app/img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">            
      </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section row">
          <h2 class="col-lg-12 margin-bottom-30">Escribenos tu duda</h2>
          <form action="#" method="post" class="tm-contact-form">
            <div class="col-lg-6 col-md-6">
              <div class="form-group">
                <input type="text" id="contact_name" class="form-control" placeholder="Nombre" />
              </div>
              <div class="form-group">
                <input type="email" id="contact_email" class="form-control" placeholder="Correo Electronico" />
              </div>
              <div class="form-group">
                <input type="text" id="contact_subject" class="form-control" placeholder="Telefono" />
              </div>
              <div class="form-group">
                <input type="text" id="contact_subject" class="form-control" placeholder="Asunto" />
              </div>
              <div class="form-group">
                <textarea id="contact_message" class="form-control" rows="6" placeholder="Mensaje"></textarea>
              </div>
              <div class="form-group">
                <button class="tm-more-button" type="submit" name="submit">Enviar Mensaje</button> 
              </div>               
            </div>
            <div class="col-lg-6 col-md-6">
              <div id="google-map"></div>
            </div> 
          </form>
        </section>
      </div>
    </div> 
    <footer>
      <div class="tm-black-bg">
        <div class="container">
          <div class="row margin-bottom-60">
            <div class="col-lg-5 col-md-5 tm-footer-div">
              <h3 class="tm-footer-div-title">Acerca de</h3>
              <p class="margin-top-15">Somos Cafe Paris y ofrecemos deliciosos cafes en Tecamachalco, contamos con algunas especialidades en cafes, postres y snaks</p>
              <p class="margin-top-15">Tecamachalco, pue, mx</p>
            </div>
            <div class="col-lg-4 col-md-4 tm-footer-div">
              <h3 class="tm-footer-div-title">Nuestras redes Sociales</h3>
              <p>Nos pueden segir en nuestras redes sociales para saber mas sobre nuestros productos y mas novedades.</p>
              <div class="tm-social-icons-container">
                <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
                <a href="#" class="tm-social-icon"><i class="fa fa-whatsapp"></i></a>
              </div>
            </div>
          </div>          
        </div>  
      </div>      
      <div>
        <div class="container">
          <div class="row tm-copyright">
           <p class="col-lg-12 small copyright-text text-center"> &copy; Cafe Paris</p>
         </div>  
      </div>
   </footer>  

   <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      
   <script type="text/javascript" src="js/templatemo-script.js"></script>      
   <script>
      /* Google map
      ------------------------------------------------*/
      var map = '';
      var center;

      function initialize() {
        var mapOptions = {
          zoom: 16,
          center: new google.maps.LatLng(18.87544413257759, -97.71421038862677),
          scrollwheel: false
        };
        
        map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

        google.maps.event.addDomListener(map, 'idle', function() {
          calculateCenter();
        });
        
        google.maps.event.addDomListener(window, 'resize', function() {
          map.setCenter(center);
        });
      }

      function calculateCenter() {
        center = map.getCenter();
      }

      function loadGoogleMap(){
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
        document.body.appendChild(script);
      }
      $(document).ready(function(){                
        loadGoogleMap();                
      });
      </script>
    </body>
    </html>