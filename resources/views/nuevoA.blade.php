<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        <br><br>
        <div class="container">
            <div class="row" style="text-align:center">
                <h1 class="caveat3">Crear un nuevo artículo</h1>  
            </div>   
        </div><br><br>
            
    <div class='container'>
        <div class= col-sm-12>
            <form action="/guardar" method="POST">
            @csrf
                <div class="form-group">
                    <label class="col-sm-6 col-form-label">Coloca el titulo del artículo:</label>
                    <div>
                        <input type="text" name="titulo" class="form-control" placeholder="Título">
                    </div>
                </div><br>

                <div class="form-group">
                    <label class="col-sm-6 col-form-label">Coloca la ciudad:</label>
                    <div>
                        <input type="text" name="ciudad" class="form-control" placeholder="Ciudad">
                    </div>
                </div><br>

                <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Coloca el país:</label>
                    <div>
                        <input type="text" name="pais" class="form-control" placeholder="País">
                    </div>
                </div><br>

                <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Coloca el autor:</label>
                    <div>
                        <input type="text" name="autor" class="form-control" placeholder="autor">
                    </div>
                </div><br>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Contenido de artículo:</label><br>
                    <textarea class="form-control" name="contenido" id="exampleFormControlTextarea1" rows="7"></textarea>
                </div><br>

                <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Link de imagen 1:</label>
                    <div>
                        <input type="text" name="imagen1" class="form-control" placeholder="Link">
                    </div>
                </div><br>

                <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Link de imagen 2:</label>
                    <div>
                        <input type="text" name="imagen2" class="form-control" placeholder="Link">
                    </div>
                </div><br>

                <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Link de imagen 3:</label>
                    <div>
                        <input type="text" name="imagen3" class="form-control" placeholder="Link">
                    </div>
                </div><br>

                <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Link de imagen 4:</label>
                    <div>
                        <input type="text" name="imagen4" class="form-control" placeholder="Link">
                    </div>
                </div><br>
                <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Link de imagen 5:</label>
                    <div>
                        <input type="text" name="imagen5" class="form-control" placeholder="Link">
                    </div>
                </div><br>
                <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Link de imagen 6:</label>
                    <div>
                        <input type="text" name="imagen6" class="form-control" placeholder="Link">
                    </div>
                </div><br>
                <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Link de imagen 7:</label>
                    <div>
                        <input type="text" name="imagen7" class="form-control" placeholder="Link">
                    </div>
                </div><br>
                <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Link de imagen 8:</label>
                    <div>
                        <input type="text" name="imagen8" class="form-control" placeholder="Link">
                    </div>
                </div><br>
                <div class="form-group row">
                    <label class="col-sm-6 col-form-label">Link de imagen 9:</label>
                    <div>
                        <input type="text" name="imagen9" class="form-control" placeholder="Link">
                    </div>
                </div><br>
                <div>
                    <input type="submit" class="btn btn-dark col-sm-12" value="Crear nuevo artículo" >
                </div>
               </form>
        </div>
    </div><br><br>

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
</body>
</html>