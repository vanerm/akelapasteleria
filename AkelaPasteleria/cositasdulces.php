<?php
$title = 'COSITAS DULCES';
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
            <img class="responsive" src="./images2/carrousel/macarrons.png" alt="Tartas" style="width:100%;">
            <div class="carousel-caption">
              <h3>Macarrons</h3>
              <p>Cositas Dulces</p>
            </div>
          </div>
          <div class="item">
            <img class="responsive" src="./images2/carrousel/tartitasframbueza.png" alt="Tortas" style="width:100%;">
            <div class="carousel-caption">
              <h3>Tarteletas</h3>
              <p>Cositas Dulces</p>
            </div>
          </div>
          <div class="item">
            <img class="responsive" src="./images2/carrousel/cheesecupcakeoreo.png" alt="Cositas Dulces" style="width:100%;">
            <div class="carousel-caption">
              <h3>Cheese Cupcake Oreo</h3>
              <p>Cositas Dulces</p>
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
            <a href="cositasdulces.php">
            <!-- <a href="/w3images/lights.jpg" target="_blank"> -->
              <img class="img-responsive" src="./images2/cositasdulces/alfacookies.png" alt="Tortas" style="width:100%">
              <div class="caption">
                <p>Alfacookies</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="cositasdulces.php">
            <!-- <a href="/w3images/nature.jpg" target="_blank"> -->
              <img class="img-responsive" src="./images2/cositasdulces/macarrons2.png" alt="Tartas" style="width:100%">
              <div class="caption">
                <p>Macarrons</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="thumbnail">
            <a href="cositasdulces.php">
            <!-- <a href="/w3images/fjords.jpg" target="_blank"> -->
              <img class="img-responsive"src="./images2/cositasdulces/minialfajorcitos2.png" alt="Dulces" style="width:100%">
              <div class="caption">
                <p>Mini Alfajorcitos</p>
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
