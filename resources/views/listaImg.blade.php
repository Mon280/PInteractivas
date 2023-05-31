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
        <br><br><br>
        <div class="container">
            <div class="row" style="text-align:center">
                <h1 class="caveat">Peaky Travelers</h1>

            </div> 
        </div><br><br>

        <div class="container">
            <div class="row" style="text-align:center">
                <h1 class="caveat2">Lista de imágenes</h1>  
            </div> 
        </div><br><br>
        <div class='container'>
            <table class="table table-striped tamCelda">
                <thead>
                    <tr>
                        <th scope="col"> ID </td>
                        <th scope="col"> Título </td>
                        <th scope="col"> Link imagen 1 </td>
                        <th scope="col"> Link imagen 2 </td>
                        <th scope="col"> Link imagen 3 </td>
                        <th scope="col"> Link imagen 4 </td>
                        <th scope="col"> Link imagen 5 </td>
                        <th scope="col"> Link imagen 6 </td>
                        <th scope="col"> Link imagen 7 </td>
                        <th scope="col"> Link imagen 8 </td>
                        <th scope="col"> Link imagen 9 </td>
                    <tr>
                </thead>
                @foreach ($articulos as $articulo)
                <tbody>
                    <tr>
                        <td>{{$articulo->id}}</td>
                        <td>{{$articulo->titulo}}</td>
                        <td>{{$articulo->imagen1}}</td>
                        <td>{{$articulo->imagen2}}</td>
                        <td>{{$articulo->imagen3}}</td>
                        <td>{{$articulo->imagen4}}</td>
                        <td>{{$articulo->imagen5}}</td>
                        <td>{{$articulo->imagen6}}</td>
                        <td>{{$articulo->imagen7}}</td>
                        <td>{{$articulo->imagen8}}</td>
                        <td>{{$articulo->imagen9}}</td>
                    <tr>
                    @endforeach
                </tbody>
            </table>
        </div><br><br><br><br>
</body>
