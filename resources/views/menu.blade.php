<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cafe Paris</title>

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
                <li><a href="{{route('menu')}}" class="active" >Menu</a></li>
                <li><a href="{{route('index_login')}}">inicio de sesión</a></li>
                <li><a href="{{route('contacto')}}" >Contacto</a></li>
                <li><a href="{{route('crear_cuenta')}}"  >crear una cuenta</a></li>
              </ul>
            </nav>   
          </div>           
        </div>    
      </div>
    </div>
    <section class="tm-welcome-section">
      <div class="container tm-position-relative">
        <div class="tm-lights-container">
          <img src="images/app/img/light.png" alt="Light" class="light light-1">
          <img src="images/app/img/light.png" alt="Light" class="light light-2">
          <img src="images/app/img/light.png" alt="Light" class="light light-3">  
        </div>        
        <div class="row tm-welcome-content">
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="images/app/img/header-line.png" alt="Line" class="tm-header-line">&nbsp;Menu&nbsp;&nbsp;<img src="images/app/img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">Café Paris</h2>
          <p class="gray-text tm-welcome-description">Café Paris ofrece los mejores <span class="gold-text">Café, postres y snaks</span> de <span class="gold-text">tecamachalco</span>. Ofrecemos el mejor Café para que lo disfrutes en tus tiempos libres y te desconectes del mundo por un momento.</p>   
          </div>
        <img src="images/app/img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">  
      </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <section class="tm-section row">            
        </section>          
        <section class="tm-section row">
          <div class="col-lg-12 tm-section-header-container margin-bottom-30">
            <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="images/app/img/logo.png" alt="Logo" class="tm-site-logo"> Nuestro Menu</h2>
            <div class="tm-hr-container"><hr class="tm-hr"></div>
          </div>          
            <div class="tm-menu-product-content col-lg-9 col-md-9"> 
              <div class="tm-product">
                <img src="images/app/img/menu-1.jpg" alt="Product">
                <div class="tm-product-text">
                  <h3 class="tm-product-title">Café Americano </h3>
                  <p class="tm-product-description">El café americano, refiriéndose al café típico que se bebe en los Estados Unidos, es la mezcla de agua caliente y café procesado en una cafetera con filtro de café.</p>
                </div>
                <div class="tm-product-price">
                  <a href="#" class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>25</a>
                </div>
              </div>
              <div class="tm-product">
                <img src="images/app/img/menu-2.jpg" alt="Product">
                <div class="tm-product-text">
                  <h3 class="tm-product-title">Café Capuchino</h3>
                  <p class="tm-product-description">Esta preparada con café expreso y leche montada con vapor para darle cremosidad. Un capuchino se compone de 125 ml de leche y 25 ml de café expreso.</p>
                </div>
                <div class="tm-product-price">
                  <a href="#" class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>25</a>
                </div>
              </div>
              <div class="tm-product">
                <img src="images/app/img/menu-3.jpg" alt="Product">
                <div class="tm-product-text">
                  <h3 class="tm-product-title">Café Moca</h3>
                  <p class="tm-product-description">El café mocasuele llevar un tercio de expreso y dos tercios de leche vaporizada, pero se añade una parte de chocolate, normalmente en forma de jarabe de chocolate.</p>
                </div>
                <div class="tm-product-price">
                  <a href="#" class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>25</a>
                </div>
              </div>
              <div class="tm-product">
                <img src="images/app/img/menu-4.jpg" alt="Product">
                <div class="tm-product-text">
                  <h3 class="tm-product-title">Café Expreso</h3>
                  <p class="tm-product-description">Debe su término a la obtención de esta bebida a través de una cafetera expreso.​ Se caracteriza por su rápida preparación a una alta presión y por un sabor y textura más concentrados.</p>
                </div>
                <div class="tm-product-price">
                  <a href="#" class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>25</a>
                </div>
              </div>
              <div class="col-lg-12 tm-section-header-container margin-bottom-30">
                <h2 class="tm-section-header gold-text tm-handwriting-font"><img src="images/app/img/logo.png" alt="Logo" class="tm-site-logo"> Postres</h2>
                <div class="tm-hr-container"><hr class="tm-hr"></div>
              </div>    
              <div class="tm-product">
                <img src="images/app/img/menu-5.jpg" alt="Product">
                <div class="tm-product-text">
                  <h3 class="tm-product-title">Pastel De chocolate</h3>
                  <p class="tm-product-description">El pastel de chocolate, tarta de chocolate o torta de chocolate, es un postre conocido internacionalmente.</p>
                </div>
                <div class="tm-product-price">
                  <a href="#" class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>30</a>
                </div>
              </div>
                <div class="tm-product">
                  <img src="images/app/img/menu-4.jpg" alt="Product">
                  <div class="tm-product-text">
                    <h3 class="tm-product-title">Pay De Limon</h3>
                    <p class="tm-product-description">Hecho con una corteza de masa quebrada, relleno de crema de limón y un esponjoso merengue en la parte superior.</p>
                  </div>
                  <div class="tm-product-price">
                    <a href="#" class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>30</a>
                  </div>
                </div>
                <div class="tm-product">
                  <img src="images/app/img/menu-4.jpg" alt="Product">
                  <div class="tm-product-text">
                    <h3 class="tm-product-title">Galleta De Coco</h3>
                    <p class="tm-product-description">Galletas de coco caseras, con una textura suave y un potente sabor inconfundible a coco.</p>
                  </div>
                  <div class="tm-product-price">
                    <a href="#" class="tm-product-price-link tm-handwriting-font"><span class="tm-product-price-currency">$</span>15</a>
              </div>
            </div>
          </div>          
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
     </div>
   </footer> 

   <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>      
   <script type="text/javascript" src="js/templatemo-script.js"></script>      

 </body>
 </html>