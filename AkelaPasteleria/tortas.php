
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- <title>Akela Pasteleria</title> -->
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


<?php
$title = 'TORTAS';
require('templates/open.php');
?>



<!-- carrousel  e imagenes -->

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
            <img class="responsive" src="./images/browny2.jpg" alt="Tartas" style="width:100%;">
            <div class="carousel-caption">
              <h3>Browny</h3>
              <!-- <p>Las tartas mas ricas!</p> -->
            </div>
          </div>
          <div class="item">
            <img class="responsive" src="./images/chocotortados.jpg" alt="Tortas" style="width:100%;">
            <div class="carousel-caption">
              <h3>Chocotorta</h3>
              <!-- <p>Deliciosas!</p> -->
            </div>
          </div>
          <div class="item">
            <img class="responsive" src="./images/tortaFrutosRojos.jpg" alt="Cositas Dulces" style="width:100%;">
            <div class="carousel-caption">
              <h3>Frutos Rojos</h3>
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

<!--Footer  -->

<?php require('templates/close.php'); ?>
