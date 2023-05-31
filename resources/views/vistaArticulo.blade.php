<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="resources/css/styles.css">
 <!-- Styles -->
  <style>

      .caveat{font-size: 50pt;}
      .caveat2{font-size: 20pt;}
      .caveat3{font-size: 30pt;}
      .caveat4{font-family: Caveat;font-size: 20pt;}
      .imgRedonda{height: 200px; width: 300px; background-repeat: no-repeat;background-position: 50%;border-radius: 50%;background-size: 100% auto;}
      .text{font-family: Arial, Helvetica, sans-serif;}
      .color{background-color: #73A9AD; height: 90px;}
      .fin{ background-color: #73A9AD; height: 200px ; text-align: center;}
      .tam{height: 280px}
      .imgInferiores{height: 300px; width: 100%;}
      .normalTxt{font-size: 20px; text-align: justify; font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;}
      .tamBtn{}
  </style>  
</head>

<body>
    <header class="color">
            <div class="container">
                <br>
                <div class=" d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start" >
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
                    </a>
            
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-secondary">Inicio</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">México</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Estados Unidos</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Inglaterra</a></li>
                    </ul>

            
                    <div class="text-end">
                        @if (Route::has('login'))
                            <div>
                                @auth 
                                    <a href="{{ url('/dashboard') }}">
                                    <button type="button" class="btn btn-outline-light me-2">Dashboard</button></a>
                                    
                                    @else
                                    <a href="{{ route('login') }}">
                                        <button type="button" class="btn btn-outline-light me-2">Iniciar Sesión</button></a>
                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}" >
                                    <button type="button" class="btn btn-dark">Registrarse</button></a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </header>
  
      <!-- INICIO CONTENIDO -->
      <br><br>
    <div class="container">
      <div class="row" style="text-align:center">
          <h1 class="caveat">Peaky Travelers</h1>
          <h1 class="caveat2">{{$datosViaje->titulo}}</h1>  
      </div>   
    </div><br>
  
    <div style="text-align:center">
      <a href="{{ route('getPDF') }}" class="btn btn-dark">Descargar PDF</a>
    </div><br>
  
    <div class="container" >
      <br><br>
      <!-- INICIO IMAGENES A LA IZQUIERDA Y TEXTO-->
      <div class="row">
        <div class="col-4">
          <img class="imgInferiores rounded" src="{{$datosViaje->imagen1}}" >
          
        </div>
        <div class="col-4">
          <img class="imgInferiores rounded" src="{{$datosViaje->imagen2}}" >
          
        </div>
        <div class="col-4">
          <img class="imgInferiores rounded" src="{{$datosViaje->imagen3}}" >
        </div>
      </div><br>
  
        <div class="row">
            <div class="col-4">
              <img class="imgInferiores rounded" src="{{$datosViaje->imagen4}}" >
              <br><br>
              <img class="imgInferiores rounded" src="{{$datosViaje->imagen5}}" >
              <br><br>
              <img class="imgInferiores rounded" src="{{$datosViaje->imagen6}}" >
            </div>
          
            <!-- INICIO TEXTO-->
            <div class="col-8">
                <br>
                <p class="normalTxt">{{$datosViaje->contenido}}</p>
            </div>
            <!-- FIN TEXTO-->
            <br>
        </div>
        <!-- FIN IMAGENES A LA IZQUIERDA Y TEXTO-->
  
        <!-- INICIO IMAGENES INFERIORES --><br>
        <div class="row">
          <div class="col-4">
            <img class="imgInferiores rounded" src="{{$datosViaje->imagen7}}" >
            
          </div>
          <div class="col-4">
            <img class="imgInferiores rounded" src="{{$datosViaje->imagen8}}" >
            
          </div>
          <div class="col-4">
            <img class="imgInferiores rounded" src="{{$datosViaje->imagen9}}" >
          </div>
        </div>
        <!-- FIN IMAGENES INFERIORES -->
        <br><br> <br>
      </div> 
  
      <footer>
        <div class="fin">
            <br>
          <div class="row">
            
              <div class="col-xs-12 col-md-6">
              <br>
                  <h6 class="text-muted lead">Contacto:</h6>
                  <h6 class="text-muted">
                  Montserrat Martínez<br>
                  Teléfonos: 3115988953 – 3112641818.<br>
                  </h6>
              </div>
              <div class="col-xs-12 col-md-6">
              <div class="pull-right">
              <br>
              <h6 class="text-muted lead">Encuéntranos en las redes</h6>
                    
              </div>
              <div class="row"> <h6 class="text-muted">Montse Mtz, Viaje y belleza @2016.<br> Todos los derechos reservados.</h6></div>
          </div>
        </div>  
      </div>
    </footer>  
  
  