<?php
    require_once("soporte.php");

    if($auth->estaLogueado()){
      header("Location:index.php");exit;
    }


$arrayDeErrores=[];
    if($_POST){
      $arrayDeErrores= $validator->validarLogin($db);

      if (count($arrayDeErrores) == 0){
        $auth->loguear($_POST["email"]);

        if (isset($_POST["recordame"])){
            setcookie("usuarioLogueado", $_POST["email"], time()+60*60*24*30);
            //$auth->recordar($_POST["email"]);
        }

          header("Location:miPerfil.php?email=" . $_POST["email"]);
          //header("Location:miPerfil.php");exit;
      }
}

?>
<?php
$title = 'LOGIN';
require('templates/open.php');
?>
<div class="container">
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
                  <div class="input-group">
                    <input id="email" type="text" class="form-control" name="email" placeholder="Email">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                  </div>
                </div>
            </div>
            <div class="form-group">
              <label class="control-label col-sm-2" for="password">Contraseña: </label>
                <div class="col-sm-10">
                  <div class="input-group">
                    <input id="password" type="password" class="form-control" name="password" placeholder="Contraseña">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                  </div>
                </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <div class="checkbox">
                  <label><input type="checkbox" name="remember"> Recordarme </label>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-info">Enviar</button>
              </div>
            </div>
            <div class="form-group">
              <div class="col-sm-offset-2 col-sm-10">
                <h5>Olvido su contraseña? <a href="#">click aqui</a></h5>
      				  <h5>Usuario nuevo? <a href="registracion.php">Crear una nueva cuenta</a></h5>
      			  </div>
            </div>
          </form>
        </div>
      </div>
    </section>
  </div>
</div>
<?php require('templates/close.php'); ?>
