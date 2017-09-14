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
