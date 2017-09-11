<?php

require_once("funciones.php");

$email = $_POST['email'] ?? null;

$arrayDeErrores=[];
if($_POST)
{
  $arrayDeErrores = validarInformacion();

  if(count($arrayDeErrores)==0){

    header("Location:felicidad.php");exit;
  }
}

?>

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
$title = 'LOGIN';
require('templates/open.php');
?>



<div id="secciones" class="interna">
  <section id="login">

<div class="jumbotron" >
  <div class="container">
    <h2>Login</h2>
        <?php if (count($arrayDeErrores)>0):?>
        <ul style="color:red;">
          <?php foreach ($arrayDeErrores as $error):?>
            <li>
              <?=$error?>
          </li>
        <?php endforeach;?>
        </ul>
        <?php endif;?>

          <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label class="control-label col-sm-2" for="email">Email: </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" placeholder="Ingrese Email">
                </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="contrasena">Contraseña: </label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingrese Contraseña">
                </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label><input type="checkbox" name="remember"> Remember me</label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-info">Enviar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>

<?php require('templates/close.php'); ?>
</body>

</html>
