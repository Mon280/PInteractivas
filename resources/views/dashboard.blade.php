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
            .caveat3{font-size: 30pt;}
            .caveat4{font-size: 20pt;}
            .imgRedonda{height: 200px; width: 300px; background-repeat: no-repeat;background-position: 50%;border-radius: 50%;background-size: 100% auto;}
            .text{font-family: Arial, Helvetica, sans-serif;}
            .color{background-color: #73A9AD; height: 90px;}
            .fin{ background-color: #73A9AD; height: 200px ; text-align: center;}
            .tam{height: 280px}
        </style>
        
    </head>

<x-app-layout>
    <br>
        @if (Auth::user()->hasRole('SuperAdmin'))
        <div class="container">
            <a href="{{ url('ejemplo') }}" class="btn btn-dark">Ver lista de artículos</a>  
        </div>
        @endif
        <br>
        <div class="container">
            <div class="row" style="text-align:center">
                <h1 class="caveat">Peaky Travelers</h1>
                <h1 class="caveat2">Viaja seguro</h1>
               
   
            </div>
        </div>
        <div class="container">
            <div class="row">
                <h1 class="caveat3">Más populares</h1>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <table style=" border-spacing:  10px 70px; border-collapse: separate; text-align:center">
                    <tr>
                        <td>
                            <div class="card" style="width: 20rem;">
                                <img src="https://www.civitatis.com/f/reino-unido/londres/guia/distritos-m.jpg" class="tam" alt="londres" >
                                <div class="card-body">
                                    <br>
                                <p class="card-text">Descubre los mejores lugares para tomarte fotos en Londres</p>
                                <br>
                                </div>
                                <a href="{{ route('viaje', ['id'=>1]) }}" class="btn btn-dark">Visitar</a>
                            </div>
                        </td>
                        <td>
                            <div class="card" style="width: 20rem;">
                                <img src="https://www.enjoytrip.com.br/wp-content/uploads/2017/11/capa-51.jpg" class="tam" alt="Universal Studios" >
                                <div class="card-body">
                                        <br>
                                        <p class="card-text">The Wizarding World of Harry Potter London ¡todo lo que debes saber!</p>
                                        <br>
                                        
                                </div>
                                <a href="{{ route('londres') }}" class="btn btn-dark">Visitar</a>     
                            </div>
                        </td>                   

                   
                        <td>
                            <div class="card" style="width: 20rem;">
                                <img src="https://programadestinosmexico.com/playas/acapulco/PLAYAS-ACAPULCO.jpg" class="tam" alt="disneyland" >
                                <div class="card-body">
                                    <br>
                                    <p class="card-text">Descubre los mejores hoteles de Acapulco a los mejores precios</p>
                                    <br>
                                </div>
                                <a href="{{ route('viaje', ['id'=>4]) }}" class="btn btn-dark">Visitar</a>
                            </div>
                        </td>

                        <td>
                            <div class="card" style="width: 20rem;">
                                <img src="https://i.pinimg.com/originals/de/78/01/de780161e5269a99dabda49b75be3c5d.png" class="tam" alt="disneyland" >
                                <div class="card-body">
                                    <br>
                                    <p class="card-text">Trucos en Disneyland LA que te salvarán la vida</p>
                                    <br>
                                </div>
                                <a href="{{ route('viaje', ['id'=>5]) }}" class="btn btn-dark">Visitar</a>
                            </div>
                        </td>
                    </tr>

                    <!-- Fila dos de tarjetas -->
                    <tr>
                        <td>
                            <div class="card" style="width: 20rem;">
                                <img src="https://www.ytravelblog.com/wp-content/uploads/2019/08/san-francisco-tourist-attractions.jpg" class="tam" alt="San Francisco" >
                                <div class="card-body">
                                    <br>
                                    <p class="card-text">Lugares en San Francisco que no sabias que existían</p>
                                    <br>
                                </div>
                                <a href="{{ route('viaje', ['id'=>6]) }}" class="btn btn-dark">Visitar</a>
                            </div>
                        </td>
                        <td>
                            <div class="card" style="width: 20rem;">
                                <img src="https://media.cnn.com/api/v1/images/stellar/prod/180413132330-12-las-vegas-casinos.jpg?q=w_2599,h_1462,x_0,y_0,c_fill" style="height:260px" alt="las vegas">
                                <div class="card-body">
                                    <br>
                                    <p class="card-text">¿Dónde divertirse en Las Vegas sin morir en el intento? ¡Aquí te lo decimos! </p>
                                    <br>
                                </div>
                                <a href="{{ route('viaje', ['id'=>7]) }}" class="btn btn-dark">Visitar</a>
                                </div>
                        </td>

                        <td>
                            <div class="card" style="width: 20rem;">
                                <img src="https://www.bosqueescondido.com.mx/img/contenidos/habitaciones.jpg" class="tam" alt="Mazamitla" >
                                <div class="card-body">
                                    <br>
                                <p class="card-text">Conéctate con la naturaleza en las cabañas de Mazamitla, México</p>
                                <br>
                                </div>
                                <a href="{{ route('viaje', ['id'=>8]) }}" class="btn btn-dark">Visitar</a>
                            </div>
                        </td>

                        <td>
                            <div class="card" style="width: 20rem;">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/4/47/New_york_times_square-terabass.jpg" class="tam" alt="New York" >
                                <div class="card-body">
                                    <br>
                                <p class="card-text">Cosas que no te puedes perder en New York, precios y opiniones</p>
                                    <br>
                                </div>
                                <a href="{{ route('viaje', ['id'=>9]) }}" class="btn btn-dark">Visitar</a>
                            </div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>  
        <!-- FIN TARJETAS -->

        <div class="container">
            <div class="row">
                <h1 class="caveat3">Nuevos artículos</h1>
            </div>
        </div>
        <br><br>
        <div class="container">
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://www.viajarlosangeles.com/img/universal-studios-los-angeles.jpg" class="tam img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div style="text-align:center">
                        <br><br><br>
                        <h5 class="card-title">Universal Studios Los Ángeles</h5>
                        <p class="card-text">Te cuento mi experiencia en Universal Studios LA, ¡trucos y consejos que no te puedes perder!</p>
                        <p class="card-text"><small class="text-muted">Última actualización hace 3 minutos</small></p>
                        <br>
                        
                        <table  style="margin: 0 auto; border-spacing:  20px 0px; border-collapse: separate;" >
                            <td>
                                <a href="{{ route('viaje', ['id'=>10]) }}" class="btn btn-dark">Ver artículo</a>
                            </td>
                        </table>

                    </div>
                </div>
            </div>
        </div>
            <br>

            <div class="card mb-3" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://viajes.nationalgeographic.com.es/medio/2021/11/04/el-pueblo-mas-bonito-de-inglaterra_4f255350_2000x1333.jpg" class="tam img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div style="text-align:center">
                            <br><br><br>
                            <h5 class="card-title">Visitando los Costwolds, una maravilla natural</h5>
                            <p class="card-text">Durmiendo en un paraíso natural, las vistas más lindas de Inglaterra</p>
                            <p class="card-text"><small class="text-muted">Última actualización hace 2 semanas</small></p>
                            <br>
                            <table  style="margin: 0 auto; border-spacing:  20px 0px; border-collapse: separate;" >
                                <td>
                                    <a href="{{ route('viaje', ['id'=>11]) }}" class="btn btn-dark">Ver artículo</a>
                                </td>
                            </table>
                        
                        </div>
                    </div>
                </div>
            </div>
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



</x-app-layout>
