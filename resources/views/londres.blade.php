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

<x-app-layout>
    <!-- INICIO CONTENIDO -->
    <br><br>
  <div class="container">
    <div class="row" style="text-align:center">
        <h1 class="caveat">Peaky Travelers</h1>
        <h1 class="caveat2">The Wizarding World of Harry Potter, London<br> ¡Todo lo que debes saber!</h1>  
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
        <img class="imgInferiores rounded" src="https://tourscanner.com/blog/wp-content/uploads/2018/10/warner_brothers_studio_tour_london.jpg" >
        
      </div>
      <div class="col-4">
        <img class="imgInferiores rounded" src="https://thecreativeadventurer.com/wp-content/uploads/2020/05/Wizarding-World-of-Harry-Potter07-3.jpg" >
        
      </div>
      <div class="col-4">
        <img class="imgInferiores rounded" src="https://s.yimg.com/ny/api/res/1.2/zxyJAco3Co5.dmzYyhVfBg--/YXBwaWQ9aGlnaGxhbmRlcjt3PTY0MA--/https://s.yimg.com/os/creatr-uploaded-images/2022-06/ebe318e0-f31e-11ec-bf59-1686159886df" >
      </div>
    </div><br><br>

      <div class="row">
          <div class="col-4">
            <img class="imgInferiores rounded" src="https://es.derutaenfamilia.com/wp-content/uploads/sites/2/2022/03/estudios_harry_potter_londres_derutaenfamilia_011.jpg" >
            <br>
            <img class="imgInferiores rounded" src="https://img.remediosdigitales.com/c5d1c3/dumbledores_office/450_1000.jpg" >
            <br>
            <img class="imgInferiores rounded" src="https://www.londresenespanol.com/wp-content/uploads/2019/01/HarryPotterStudioDiagon.jpg" >
          </div>
        
          <!-- INICIO TEXTO-->
          <div class="col-8">
              <br>
              <p class="normalTxt">
                Sumérjase en el Mundo Mágico con un paquete completo de experiencias en Londres.
                Descubra cómo la magia cinematográfica cobró vida en Warner Bros. Studio Tour London – The Making of Harry Potter. Pasea por Diagon Alley, maravíllate con la grandeza del Banco Mágico de Gringotts o disfruta de la bebida preferida de cualquier bruja o mago, una cerveza de mantequilla fría.
                Continúe la magia con la producción teatral aclamada por la crítica, Harry Potter and the Cursed Child. 19 años después de la Batalla de Hogwarts es donde la historia continúa con la historia original de J.K Rowling, Jack Thorne y John Tiffany.
                Diseñe su escapada a la medida de su viaje con un paquete de hotel reservado a través de nuestro socio oficial de estancias cortas.
       
                Vuele con Hagrid a las profundidades del Bosque Prohibido, más allá de los terrenos del castillo de Hogwarts, en una emocionante montaña rusa que se sumerge en los caminos de algunas de las criaturas mágicas más raras del mundo mágico.
        
                Ingrese a los terrenos de Care of Magical Creatures y pase por la cabaña de Hagrid. A medida que avanza en el viaje, Hagrid le da instrucciones sobre la forma correcta de acercarse a un hipogrifo. El Vuelo del Hipogrifo es una montaña rusa familiar que gira en espiral y se zambulle alrededor del huerto de calabazas, y pasa en picado por la cabaña de Hagrid.
         
                Ábrete camino a través del Colegio Hogwarts de Magia y Hechicería. Luego vuela por encima de los terrenos del castillo mientras te unes a Harry Potter y sus amigos en una aventura inolvidable y emocionante, enfrentándote cara a cara con criaturas mágicas.
            
                Para viajar en el Expreso de Hogwarts de Hogsmeade a Londres, diríjase a la estación de Hogsmeade dentro de Universal's Islands of Adventure. Necesitará un boleto de entrada de parque a parque para abordar y viajar en el tren. Cuando llegues a Londres, dobla la esquina para encontrar la entrada secreta al Callejón Diagon. Se aplican restricciones adicionales.
            
                Con un boleto de entrada de parque a parque, puede abordar el Hogwarts Express en la estación King's Cross en Londres en Universal Studios Florida y viajar a la estación Hogsmeade en Universal's Islands of Adventure, o al revés. Se aplican restricciones adicionales.
              </p>
          </div>
          <!-- FIN TEXTO-->
          <br>
      </div>
      <!-- FIN IMAGENES A LA IZQUIERDA Y TEXTO-->

      <!-- INICIO IMAGENES INFERIORES --><br>
      <div class="row">
        <div class="col-4">
          <img class="imgInferiores rounded" src="https://blog.trekaroo.com/wp-content/uploads/2016/04/Wizarding-World-Harry-Potter-Universal-Studios-HIppogriff-768x642.jpg.webp" >
          
        </div>
        <div class="col-4">
          <img class="imgInferiores rounded" src="https://www.disneydining.com/wp-content/uploads/2023/03/Harry-Potter-new-patents-universal-studios-1200-%C3%97-600-px-3.jpg" >
          
        </div>
        <div class="col-4">
          <img class="imgInferiores rounded" src="https://blog.trekaroo.com/wp-content/uploads/2016/04/harry-potter-at-universal-studios-hollywood-by-nbc-universal.jpg" >
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
</x-app-layout>