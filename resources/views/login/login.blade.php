<!DOCTYPE html>
<html lang="es">
<head>
	<title>Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/app/css/estilos.css">
    <link href='http://fonts.googleapis.com/css?family=Damion' rel='stylesheet' type='text/css'>
    <link href="css/app/css/templatemo-style.css" rel="stylesheet">
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
					<li><a href="{{route('index_login')}}" class="active">inicio de sesión</a></li>
					<li><a href="{{route('contacto')}}" >Contacto</a></li>
					<li><a href="{{route('index_login')}}" >crear una cuenta</a></li>
                </ul>
              </nav>   
            </div>           
          </div>    
        </div>
      </div>
    <section class="form-main">
        <div class="form-content">
            <div class="circle-1"></div>
            <div class="circle-2"></div>
            <div class="circle-3"></div>
            <div class="box">
                <h3>Bienvenido</h3>
                <form action="">
                    <div class="input-box">
                        <input type="text" placeholder="Email" class="Input-controler">
                    </div>
                    <div class="input-box">
                        <input type="password" placeholder="password" class="Input-controler">
                        <div class="input-link">
                            <a href="recuperar.html" class="gradient-text">Has olvidado tu contraseña</a>
                        </div>
                    </div>
                    <button type="submit" class="btn">Iniciar Sesion</button>
                </form>
                <p>No tienes una cuenta? <a href="signup.html" class="gradient-text">Crear cuenta</a></p>
            </div>
        </div>
    </section>
</body>
</html>