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
  <link href="css/app/css/custom.css" rel="stylesheet">

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
                <li><a href="{{route('index_login')}}" >inicio de sesión</a></li>
                <li><a href="{{route('contacto')}}" >Contacto</a></li>
                <li><a href="{{route('crear_cuenta')}}" class="active">crear una cuenta</a></li>
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
          <h2 class="white-text tm-handwriting-font tm-welcome-header"><img src="images/app/img/header-line.png" alt="Line" class="tm-header-line">Inicia sesión<img src="images/app/img/header-line.png" alt="Line" class="tm-header-line"></h2>
          <h2 class="gold-text tm-welcome-header-2">Café Paris</h2>
        </div>
        <img src="images/app/img/table-set.png" alt="Table Set" class="tm-table-set img-responsive">             
      </div>      
    </section>
    <div class="tm-main-section light-gray-bg">
      <div class="container" id="main">
        <h2 class="col-lg-12 margin-bottom-30">Crear una cuenta</h2>
        <form class="tm-contact-form" name="user" action="{{ route('create_user') }}" method="POST">
          @csrf
         
          <div class="col-lg-6 col-md-6">
            <div class="form-group">
              <input type="text" name="user" value="{{ old('user') }}" required="required" class="form-control" placeholder="Nick name" />
            </div>
            <div class="form-group">
              <input type="text" name="name" value="{{ old('user') }}" required="required" class="form-control" placeholder="Nombre" />
            </div>
            <div class="form-group">
              <input type="text" name="first_surname" value="{{ old('first_surname') }}" required="required" class="form-control" placeholder="Apellido paterno" />
            </div>
            <div class="form-group">
              <input type="text" name="secondo_surname" value="{{ old('secondo_surname') }}" required="required" class="form-control" placeholder="Apellido paterno" />
            </div>
            <div class="form-group">
              <input type="text" name="email" value="{{ old('email') }}" required="required" class="form-control" placeholder="Correo electronico" />
            </div>

            <div class="form-group">
              <input type="password"  name="password" required="required" class="form-control" placeholder="Contraseña" />
            </div>
           
      
            <div class="form-group">
              <button class="btn-coffee" type="submit" name="submit">Registrarme</button> 
            </div>               
          </div>

        </form>
        <section class="tm-section">
          <div class="row">         
        </section>
      </div>
    </div> 
    <footer>
      <div class="tm-black-bg">
        <div class="container">
          <div class="row margin-bottom-60">
            <div class="col-lg-5 col-md-5 tm-footer-div">
              <h3 class="tm-footer-div-title">Acerca de</h3>
              <p class="margin-top-15">Somos Café Paris y ofrecemos deliciosos Cafés en Tecamachalco, contamos con algunas especialidades en Cafés, postres y snaks</p>
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
           <p class="col-lg-12 small copyright-text text-center"> &copy; Café Paris</p>
         </div>  
       </div>
     </div>
   </footer> 
   
   <script type="text/javascript" src="js/app/js/jquery-1.11.2.min.js"></script>      
   <script type="text/javascript" src="js/app/js/templatemo-script.js"></script>      

 </body>
 </html>