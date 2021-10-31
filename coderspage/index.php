<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta content="Mashup templates have been developped by Orson.io team" name="author">
  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
  <link href="./assets/favicon.ico" rel="icon">
  <link href="" rel="stylesheet">
  <title>CodersWeb</title>
  <link href="./main.550dcf66.css" rel="stylesheet"></head>
<body> <!-- Add your content of header -->
  <header>
    <nav class="navbar navbar-default active">
      <div class="container">
        <div class="navbar-header">
          <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> -->
          <a class="navbar-brand" href="https://coders-web.com/" title="">
            <img src="./assets/images/mashup-icon.svg" class="navbar-logo-img" alt="">
            CodersWeb
          </a>
        </div>
<!--         <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="./index.html" title="">Home</a></li>
            <li><a href="./project.html" title="">Project</a></li>
            <li>
              <p>
                <a href="./components.html" class="btn btn-default navbar-btn" title="">Components</a>
              </p>
            </li>
          </ul>
        </div>  -->
      </div>
    </nav>
  </header>

  <div class="hero-full-container background-image-container white-text-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <h1>CodersWeb</h1>
          <p>Un lugar para los desarrolladores</p>
        </div>
      </div>
    </div>
  </div>

  <div class="section-container contact-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <div class="section-container-spacer">
            <h2 class="text-center" style="color: red;">Unete a nuestro equipo</h2>
            <p class="text-center">
              Si eres desarrollador o diseñador freelancer, o te encuentras
              aprendiendo
              nos interesaria tener contacto contigo, porfavor compartenos
              tus datos.
            </p>
          </div>
          <div class="card-container">
            <div class="card card-shadow col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2 reveal">
              <form action="" class="reveal-content">
                <div class="row">
                  <div class="col-md-7">
                    <div class="form-group">
                      <input type="text" class="form-control" id="fullname" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" id="email" placeholder="Correo">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" id="subject" placeholder="Asunto">
                    </div>
                    <div class="form-group">
                      <textarea class="form-control" rows="3" placeholder="Escribenos un mensaje" id="comments"></textarea>
                    </div>
                    <button class="btn btn-danger send">Enviar</button><br><br>
                    <div class="form-group">
                      <span class="msj" style="color:red; display:none;">Se ha enviado tu informacion! nos pondremos en contacto contigo, gracias</span>
                    </div>
                  </div>
                  <div class="col-md-5">
                    <ul class="list-unstyled address-container">
                      <!-- <li>
                        <span class="fa-icon">
                          <i class="fa fa-phone" aria-hidden="true"></i>
                        </span>
                        + 33 9 07 45 12 65
                      </li> -->
                      <li>
                        <span class="fa-icon">
                          <i class="fa fa fa-map-o" aria-hidden="true"></i>
                        </span>
                        Chihuahua, Chihuahua
                      </li>
                    </ul>
                  </div>
                </div>
              </form>
            </div>
            <div class="card-image col-xs-12" style="background-image: url('/assets/images/img-01.jpg')">
            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>

<script>
  document.addEventListener("DOMContentLoaded", function (event) {
    navbarFixedTopAnimation();
  });
</script>

<footer class="footer-container white-text-container">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h3>CodersWeb</h3>
        <div class="row">
          <div class="col-xs-12 col-sm-7">
            <p>
              <small>
                Sitio desarrollado por
                <a href="https://coders-web.com/" 
                title="https://coders-web.com/">CodersWeb</a>
                <br/>
                Todos los derechos reservados 2021 
              </small>
            </p>
          </div>
          <div class="col-xs-12 col-sm-5">
            <p class="text-right">
              <a href="https://www.facebook.com/CodersWeb-286191434754442/?ref=page_internal" class="social-round-icon white-round-icon fa-icon" title="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<script>
  document.addEventListener("DOMContentLoaded", function (event) {
    navActivePage();
    scrollRevelation('.reveal');
  });
</script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script type="text/javascript" src="./assets/js/send-info.js"></script>
<script type="text/javascript" src="./assets/js/axios.js"></script>
<script type="text/javascript" src="./main.0cf8b554.js"></script>
</body>
</html>