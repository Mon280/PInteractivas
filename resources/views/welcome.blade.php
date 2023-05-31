<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <link rel="stylesheet" href="resources/css/styles.css">
        <!-- Styles -->
        <style>
            @font-face {
                font-family: caveat;
                src: url(Caveat.ttf);
            }
            .caveat{font-size: 50pt;}
            .caveat2{font-size: 20pt;}
            .caveat3{font-size: 50pt;}
            .caveat4{font-size: 20pt;}
            .imgRedonda{height: 200px; width: 300px; background-repeat: no-repeat;background-position: 50%;border-radius: 50%;background-size: 100% auto;}
            .text{font-family: Arial, Helvetica, sans-serif;}
            .color{background-color: #73A9AD; height: 90px;}
            .fin{ background-color: #73A9AD; height: 200px ; text-align: center;}
        </style>
        

    </head>

    <body class="antialiased">
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
                <h1 class="caveat2">Viaja seguro</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <h1 >Más populares</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <table style=" border-spacing:  0px 70px; border-collapse: separate; text-align:center">
                    <tr>
                        <td>
                            <div class="card" style="width: 20rem;">
                                <img src="https://www.civitatis.com/f/reino-unido/londres/guia/distritos-m.jpg" alt="londres" height="280px">
                                <div class="card-body">
                                    <br>
                                <p class="card-text">Descubre los mejores lugares para tomarte fotos en Londres</p>
                                <br>
                                </div>
                                <a href="{{ route('login') }}" class="btn btn-dark">Visitar</a>
                            </div>
                        </td>
                        <td>
                            <div class="card" style="width: 20rem;">
                                <img src="https://www.enjoytrip.com.br/wp-content/uploads/2017/11/capa-51.jpg" alt="Universal Studios" height="280px">
                                <div class="card-body">
                                        <br>
                                        <p class="card-text">The Wizarding World of Harry Potter London ¡todo lo que debes saber!</p>
                                        <br>
                                        
                                </div>
                                <a href="{{ route('login') }}" class="btn btn-dark">Visitar</a>     
                            </div>
                        </td>                   

                        <td>
                            <div class="card" style="width: 20rem;">
                                <img src="https://programadestinosmexico.com/playas/acapulco/PLAYAS-ACAPULCO.jpg" alt="acapulco" height="280px">
                                <div class="card-body" >
                                    <br>
                                    <p class="card-text">Descubre los mejores hoteles de Acapulco a los mejores precios</p>
                                    <br>
                                </div>
                                <a href="{{ route('login') }}" class="btn btn-dark">Visitar</a>
                            </div>
                        </td>

                        <td>
                            <div class="card" style="width: 20rem;">
                                <img src="https://i.pinimg.com/originals/de/78/01/de780161e5269a99dabda49b75be3c5d.png" alt="disneyland" height="280px">
                                <div class="card-body">
                                    <br>
                                    <p class="card-text">Trucos en Disneyland LA que te salvarán la vida</p>
                                    <br>
                                </div>
                                <a href="{{ route('login') }}" class="btn btn-dark">Visitar</a>
                            </div>
                        </td>
                    </tr>

                    <!-- Fila dos de tarjetas -->
                    <tr>
                        <td>
                            <div class="card" style="width: 20rem;">
                                <img src="https://www.ytravelblog.com/wp-content/uploads/2019/08/san-francisco-tourist-attractions.jpg" alt="San Francisco" height="280px">
                                <div class="card-body">
                                    <br>
                                    <p class="card-text">Lugares en San Francisco que no sabias que existían</p>
                                    <br>
                                </div>
                                <a href="{{ route('login') }}" class="btn btn-dark">Visitar</a>
                            </div>
                        </td>
                        <td>
                            <div class="card" style="width: 20rem;">
                                <img src="https://media.cnn.com/api/v1/images/stellar/prod/180413132330-12-las-vegas-casinos.jpg?q=w_2599,h_1462,x_0,y_0,c_fill" alt="las vegas" height="280px">
                                <div class="card-body">
                                    <br>
                                    <p class="card-text">¿Dónde divertirse en Las Vegas sin morir en el intento? ¡Aquí te lo decimos! </p>
                                    <br>
                                </div>
                                <a href="{{ route('login') }}" class="btn btn-dark">Visitar</a>
                                </div>
                        </td>

                        <td>
                            <div class="card" style="width: 20rem;">
                                <img src="https://www.bosqueescondido.com.mx/img/contenidos/habitaciones.jpg" alt="Mazamitla" height="280px">
                                <div class="card-body">
                                    <br>
                                <p class="card-text">Conéctate con la naturaleza en las cabañas de Mazamitla, México</p>
                                <br>
                                </div>
                                <a href="{{ route('login') }}" class="btn btn-dark">Visitar</a>
                            </div>
                        </td>

                        <td>
                            <div class="card" style="width: 20rem;">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/47/New_york_times_square-terabass.jpg" alt="New York" height="280px">
                                <div class="card-body">
                                    <br>
                                <p class="card-text">Cosas que no te puedes perder en New York, precios y opiniones</p>
                                    <br>
                                </div>
                                <a href="{{ route('login') }}" class="btn btn-dark">Visitar</a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>  
        <!-- FIN TARJETAS -->

        <div class="container">
            <div class="row">
                <h1>Nuevos artículos</h1>
            </div>
        </div>
        <br><br>
        <div class="container">
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://www.viajarlosangeles.com/img/universal-studios-los-angeles.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div style="text-align:center">
                        <br><br><br>
                        <h5 class="card-title">Universal Studios Los Ángeles</h5>
                        <p class="card-text">Te cuento mi experiencia en Universal Studios LA, ¡trucos y consejos que no te puedes perder!</p>
                        <p class="card-text"><small class="text-muted">Última actualización hace 3 minutos</small></p>
                        <a href="{{ route('login') }}" class="btn btn-dark">Ver artículo</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://presspage-production-content.s3.amazonaws.com/uploads/1924/whataburger-personaliza-cualquier.jpg?x=1580846679314" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div style="text-align:center">
                        <br><br><br>
                        <h5 class="card-title">Comida en EU, ¿Es tán buena como dicen?</h5>
                        <p class="card-text">Te cuento mi experiencia sobre la comida en EU, diferentes platillos y restaurantes interesantes  </p>
                        <p class="card-text"><small class="text-muted">Última actualización hace 2 horas</small></p>
                        <a href="{{ route('login') }}" class="btn btn-dark">Ver artículo</a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://viajes.nationalgeographic.com.es/medio/2021/11/04/el-pueblo-mas-bonito-de-inglaterra_4f255350_2000x1333.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div style="text-align:center">
                        <br><br><br>
                        <h5 class="card-title">Visitando los Costwolds, una maravilla natural</h5>
                        <p class="card-text">Durmiendo en un paraíso natural, las vistas más lindas de Inglaterra</p>
                        <p class="card-text"><small class="text-muted">Última actualización hace 2 semanas</small></p>
                        <a href="{{ route('login') }}" class="btn btn-dark">Ver artículo</a>
                        </div>
                    </div>
                </div>
            </div>
        <div>
        </div>
    </div>
    <br><br>
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
