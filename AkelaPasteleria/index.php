<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Akela Pasteleria</title>
    <!-- mobile-first -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- jquery  es lo primero que hay que importar en el header-->
    <script
      src="https://code.jquery.com/jquery-3.2.1.js"
      integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
      crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- para el que le toca bootstrap -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">
    <!-- <script type="text/javascript">
    $( document ).ready(function){
      $(".button-collapse").sideNav();
    }
    </script> -->
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" cz-shortcut-listen="true">

    <!-- </header> -->
    <nav class="navbar navbar-default navbar-fixed-top top-nav-collapse" role="navigation">
      <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle collapsed" data-toggle ="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- logo -->
        <a class="navbar-brand page-scroll" href="#">
          <img class= "img-circle" alt="Brand" src="https://scontent-eze1-1.cdninstagram.com/t51.2885-19/s320x320/19379845_162930180915505_968021204008960000_a.jpg" width="130" height="130" alt="">
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
        <div id="navbar" class="navbar-collpase navbar-ex1-collapse collapse in" aria-expanded="true" style>
          <ul id= "navbarItems" class="nav navbar-nav navbar-right">
            <li><a class="page-scroll" href="#">AKELA</a></li>
            <li><a class="page-scroll" href="#Productos">Nuestros Productos</a></li>
            <!-- <li><a class="page-scroll" href="#">Tortas</a></li>
            <li><a class="page-scroll" href="#">Tartas</a></li>
            <li><a class="page-scroll" href="#">Cositas Dulces</a></li> -->
            <li><a href="registracion.php"><span class="glyphicon glyphicon-user"></span> Registración</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            <li><a href="micarrito.php"><span class="glyphicon glyphicon-shopping-cart"></span>Mi Carrito</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


<div id="secciones" class="interna">
  <section id="home">
    <div class="container">
      <!-- <div class="col-md-12"> -->

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

          <div class="item active">
            <img class="responsive" src="./images/tartafrutilla2.jpg" alt="Tartas" style="width:100%;">
            <div class="carousel-caption">
              <h3>Tartas</h3>
              <!-- <p>Las tartas mas ricas!</p> -->
            </div>
          </div>
          <div class="item">
            <img class="responsive" src="./images/browny2.jpg" alt="Tortas" style="width:100%;">
            <div class="carousel-caption">
              <h3>Tortas</h3>
              <!-- <p>Deliciosas!</p> -->
            </div>
          </div>
          <div class="item">
            <img class="responsive" src="./images/macarons2.jpg" alt="Cositas Dulces" style="width:100%;">
            <div class="carousel-caption">
              <h3>Cositas Dulces</h3>
              <!-- <p>Las vas a amar!</p> -->
            </div>
          </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- </div> -->
    </div>
    <br>

    <!-- cards -->
    <div class="container" id="Productos">
      <div class="row">
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="tortas.php">
            <!-- <a href="/w3images/lights.jpg" target="_blank"> -->
              <img class="img-responsive" src="./images/chocotorta.jpg" alt="Tortas" style="width:100%">
              <div class="caption">
                <p>Tortas</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="tartas.php">
            <!-- <a href="/w3images/nature.jpg" target="_blank"> -->
              <img class="img-responsive" src="./images/lemonpie.jpg" alt="Tartas" style="width:100%">
              <div class="caption">
                <p>Tartas</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="cositasdulces.php">
            <!-- <a href="/w3images/fjords.jpg" target="_blank"> -->
              <img class="img-responsive"src="./images/cositasdulces.jpg" alt="Dulces" style="width:100%">
              <div class="caption">
                <p>Cositas Dulces</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>

    <!-- Return to top -->
    <!-- <a href="#page-top" class="page-scroll" id="return-to-top" style="display:none;">
      <i class="fa fa-chevron-circle-up" aria-hidden="true"></i>
    </a> -->

    <!--Footer  -->
    <footer class="footer">
      <!-- <nav class="navbar navbar-inverse navbar-fixed-bottom"> -->
        <div class="container">
          <!-- <div class="jumbotron" style="width:100%"> -->

          <ul class="nav navbar-nav">
            <!-- <li class="active"><a href="#">Home</a></li> -->
            <li><a href="https://www.instagram.com/akelapasteleria/">Instagram</i></a></li>
            <li><a href="https://www.facebook.com/akelapasteleria">Facebook</a></li>
            <li><a class="page-scroll" href="preguntasfrecuentes.php">Preguntas Frecuentes</a></li>

          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Akela Pasteleria © All Rights Reserved</a></li>

          </ul>
        <!-- </div> -->
        </div>
      <!-- </nav> -->
    </footer>

    </body>

</html>
