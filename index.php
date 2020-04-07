
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8"/>
  <title>Juan Contreras Fuertes</title>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>
  <link type="text/css" rel="stylesheet" href="css/estilos.css"/>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

<body>
  <nav>
    <div class="nav-wrapper light-blue darken-1">
      &nbsp;&nbsp;&nbsp;
      
      <img class="responsive-img" src="https://static.wixstatic.com/media/13d2ff_435aca70282940fd8cee8355f0cba94d~mv2.gif" width="50px" >
      
      &nbsp;&nbsp;&nbsp;
      <a href="#" class="brand-logo truncate">Colegio Juan Contreras Fuertes</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html" class="dropdown-trigger" data-target='eventos'><i class="material-icons Small left">event</i>Calendario</a></li>
        
        <li><a href="collapsible.html" class="dropdown-trigger" data-target='plataforma'><i class="material-icons Small left">apps</i>Plataforma</a></li>
        <li><a href="collapsible.html" class='dropdown-trigger' href='#' data-target='dropdown1'><i class="material-icons Small left">book</i>Acerca</a></li>
      </ul>
    </div>
  </nav>
  <!-- Dropdown Trigger -->
  <!-- Dropdown Structure -->
  <ul id='dropdown1' class='dropdown-content'>
    <li><a href="#!">Historia</a></li>
    <li><a href="#!">Valores</a></li>
    <li><a href="#!">congragacion</a></li>
    <li><a href="#!">Talleres</a></li>
    <li><a href="#!">Plan de estudio</a></li>
  </ul>
   <ul id='plataforma' class='dropdown-content'>
    <li><a href="#!">Alumnos</a></li>
    <li><a href="#!">Maestros</a></li>
    <li><a href="#!">Admon</a></li>
    <li><a href="#!">Padres de familia</a></li>
     </ul>
        <ul id='eventos' class='dropdown-content'>
    <li><a href="#!">Actividades</a></li>
    <li><a href="#!">Culturales</a></li>
    <li><a href="#!">Academicas</a></li>
    
     </ul>
  <br>

  <section class="black">
    <div class="carousel carousel-slider" id="slidercarro" >
      <div class="carousel-fixed-item">
        <div class="container">
          <h1 class="yellow-text text-accent-3 texsombreado">Inscripciones Abiertas</h1>
          <a class="btn waves-effect red white-text z-depth-3" href="https://codepen.io/collection/nbBqgY/" target="_blank">Inscribete ya</a>
        </div>
      </div>
      <div class="carousel-item red lighten-2 white-text" href="#one!">
        <img src="https://image.freepik.com/foto-gratis/ninos-escriben-cuadernos-boligrafo_94347-731.jpg">

        <div class="container">

          <h2>First Slide</h2>
          <p class="white-text">Etiam porta sem malesuada magna mollis euismod.</p>
        </div>  
      </div>
      <div class="carousel-item amber darken-2 white-text" href="#two!">
        <img src="https://image.freepik.com/foto-gratis/vista-elevada-mano-nina-dibujando-familia-casa-lapiz-color-papel-dibujo_23-2148026287.jpg">


        <div class="container">
          <h2>Second Slide</h2>
          <p class="white-text">Etiam porta sem malesuada magna mollis euismod.</p>
        </div>  
      </div>
      <div class="carousel-item green white-text" href="#three!">
        <img src="https://image.freepik.com/foto-gratis/borrosa-resumen-antecedentes-vista-interior-mirando-fuera-vacio-vestibulo-oficina-puertas-entrada-pared-cortina-vidrio-marco_1339-6363.jpg">
        <div class="container">
          <h2>Third Slide</h2>
          <p class="white-text">Etiam porta sem malesuada magna mollis euismod.</p>
        </div>  
      </div>
      <div class="carousel-item blue white-text" href="#four!">
        <img src="https://image.freepik.com/foto-gratis/fila-colores-lapiz-borrador-lapiz-afeitado-sobre-papel-blanco_23-2148050719.jpg">
        <div class="container">
          <h2>Fourth Slide</h2>
          <p class="white-text">Etiam porta sem malesuada magna mollis euismod.</p>
        </div>  
      </div>
    </div>
  </section>


  <div class="container">
    <h5>Example Promotion Table</h5>
    <p>If we want 3 divs that are equal size, we define the divs with a width of 4-columns, as 4+4+4 nicely adds up to 12. Inside those divs, we can put our content. Take our front page content for example. We've modified it slightly for the sake of this example.</p>
    <div class="row">
      <div class="col s4">
        <div class="center promo promo-example">
          <i class="material-icons">flash_on</i>
          <p class="promo-caption">Speeds up development</p>
          <p class="light center">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components.</p>
        </div>
      </div>
      <div class="col s4">
        <div class="center promo promo-example">
          <i class="material-icons">group</i>
          <p class="promo-caption">User Experience Focused</p>
          <p class="light center">By utilizing elements and principles of Material Design, we were able to create a framework that focuses on User Experience.</p>
        </div>
      </div>
      <div class="col s4">
        <div class="center promo promo-example">
          <i class="material-icons">settings</i>
          <p class="promo-caption">Easy to work with</p>
          <p class="light center">We have provided detailed documentation as well as specific code examples to help new users get started.</p>
        </div>
      </div>
    </div>

  </div>


  <div class="fixed-action-btn">
    <a class="btn-floating btn-large red">
      <i class="large material-icons">call</i>
    </a>
    <ul>
      <li><a class="btn-floating red"><i class="material-icons">insert_chart</i></a></li>
      <li><a class="btn-floating yellow darken-1"><i class="material-icons">format_quote</i></a></li>
      <li><a class="btn-floating green"><i class="material-icons">publish</i></a></li>
      <li><a class="btn-floating blue"><i class="material-icons">attach_file</i></a></li>
    </ul>
  </div>

  <footer class="page-footer light-blue darken-1">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Colegio Juan Contreras Fuertes</h5>
          <p class="grey-text text-lighten-4 valign-wrapper">  <i class="material-icons">location_on</i>&nbsp;&nbsp;María Izquierdo #21, Col. Centro 47073 San Juan de los Lagos</p>
          <p class="grey-text text-lighten-4 valign-wrapper">  <i class="material-icons">local_phone</i>&nbsp;&nbsp;395 785 0119</p>
          <p class="grey-text text-lighten-4 valign-wrapper">  <i class="material-icons">mail</i>&nbsp;&nbsp;Colegio@edu.com.mx</p>
          
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Colegios Siervas de Jesús Sacramentado</h5>
          <ul>
            <li><a class="grey-text text-lighten-3 valign-wrapper" href="#!"><i class="material-icons">school</i>&nbsp;&nbsp;Colegio Juan Contreras Fuertes</a></li>
            <li><a class="grey-text text-lighten-3 valign-wrapper" href="#!"><i class="material-icons">school</i>&nbsp;&nbsp;Independencia</a></li>
            <li><a class="grey-text text-lighten-3 valign-wrapper" href="#!"><i class="material-icons">school</i>&nbsp;&nbsp;Motolinea</a></li>
            <li><a class="grey-text text-lighten-3 valign-wrapper" href="#!"><i class="material-icons">school</i>&nbsp;&nbsp;Juan Pablo II</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container ">
        © 2020 Copyright Siervas de Jesús Sacramentado
        <!--
        <a class="grey-text text-lighten-4 right valign-wrapper" href="#!"><i class="material-icons">keyboard_arrow_left</i><i class="material-icons">keyboard_arrow_right</i>Desarrollado por Héctor Espinoza</a>-->
      </div>
    </div>
  </footer>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="js/materialize.js"></script>

  
  <script type="text/javascript" src="js/main.js"></script>
  

  
  
</body>
</html>