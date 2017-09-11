<?php

require_once("funciones.php");
$meses = [
    1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril", 5 => "Mayo", 6 => "Junio",
    7 => "Julio", 8 => "Agosto", 9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre"
];

$nombre = $_POST['nombre'] ?? null;
$apellido = $_POST['apellido'] ?? null;
$username = $_POST['username'] ?? null;
$email = $_POST['email'] ?? null;
$emailConfirm = $_POST['email_confirm'] ?? null;
$genero = $_POST['genero'] ?? null;
$dia = $_POST['fnac_dia'] ?? null;
$mes = $_POST['fnac_mes'] ?? null;
$anio = $_POST['fnac_anio'] ?? null;
$cats = $_POST['categorias'] ?? [];
$descripcion = $_POST['descripcion'] ?? null;

// Validar -errores
//coleccionar errores
//o redirigir
// <?= es equivalente a <?php echo=

$arrayDeErrores=[];
if($_POST)
{
  $arrayDeErrores = validarInformacion();

  if(count($arrayDeErrores)==0){

    $archivo = $_FILES["avatar"]["tmp_name"];
    $nombreDelArchivo =$_FILES["avatar"]["name"];
    $extension = pathinfo($nombreDelArchivo, PATHINFO_EXTENSION);

    $nombre = dirname(__FILE__) . "/img/" . $_POST["username"] . ".$extension";
    var_dump($nombre);exit;

    move_uploaded_file($archivo, $nombre);

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
    $title = 'REGISTRACIÓN';
    require('templates/open.php');
    ?>

  <div id="secciones" class="interna">
    <section id="registracion">

  <div class="jumbotron" >
    <div class="container">
      <h2>Formulario de Registracion </h2>

          <?php if (count($arrayDeErrores)>0):?>
          <ul style="color:red;">
            <?php foreach ($arrayDeErrores as $error):?>
              <li>
                <?=$error?>
            </li>
          <?php endforeach;?>
          </ul>
          <?php endif;?>

            <form role="form" action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombre; ?>" placeholder="Ingrese Nombre">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="apellido">Apellido</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $apellido; ?>" placeholder="Ingrese Apellido">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="direccion">Direccion</label>
                        <input type="text" class="form-control" id="username" name="direccion" value="<?php echo $username; ?>" placeholder="Ingrese Nombre de Usuario">
                    </div>
                <!-- </div>
                <div class="row"> -->
                    <div class="form-group col-sm-6">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" id="username" name="telefono" value="<?php echo $username; ?>" placeholder="Ingrese Nombre de Usuario">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>" placeholder="Ingrese Email">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="email-confirm">Confirmar Email</label>
                        <input type="text" class="form-control" id="email-confirm" name="email_confirm" value="<?php echo $emailConfirm; ?>" placeholder="Ingrese Confirmación Email">
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena" placeholder="Ingrese Contraseña">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="contrasena-confirm">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="contrasena-confirm" name="contrasena_confirm" placeholder="Ingrese Confirmación Contraseña">
                    </div>
                </div>

                <div class="form-group">
                    <label>Sexo</label>
                    <div>
                        <label class="radio-inline">
                            <input type="radio" name="genero" id="genero_masculino" value="0"
                                <?php echo ($genero === "0") ? 'checked="checked"' : ''; ?>> Masculino
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="genero" id="genero_femenino" value="1"
                                <?php echo ($genero == "1") ? 'checked="checked"' : ''; ?>> Femenino
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="genero" id="genero_otros" value="2"
                                <?php echo ($genero == "2") ? 'checked="checked"' : ''; ?>> Otro
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <label> Fecha de Nacimiento</label>
                    <div class="row">
                        <div class="col-sm-4">
                            <select class="form-control" name="fnac_dia">
                                <option value="">Día</option>
                                <?php for ($i = 1; $i <= 31; $i++) { ?>
                                    <option
                                        value="<?php echo $i; ?>"
                                        <?php echo ($i == $dia) ? 'selected="selected"' : ''; ?>
                                    ><?php echo $i; ?></option>
                                <?php } ?>

                                <?php /* for($i = 1; $i <= 31; $i++) {
                                            echo '<option value="' . $i . '">' . $i . '</option>';
                                        } */ ?>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control" name="fnac_mes">
                                <option value="">Mes</option>
                                <?php foreach ($meses as $numero => $nombre) { ?>
                                    <option
                                        value="<?php echo $numero; ?>"
                                        <?php echo ($numero == $mes) ? 'selected="selected"' : ''; ?>
                                    ><?php echo $nombre; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-sm-4">
                            <select class="form-control" name="fnac_anio">
                                <option value="">Año</option>
                                <?php for ($i = date('Y'); $i >= (date('Y') - 100); $i--) { ?>
                                    <option
                                        value="<?php echo $i; ?>"
                                        <?php echo ($i == $anio) ? 'selected="selected"' : ''; ?>
                                    ><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción</label>
                    <textarea id="descripcion" name="descripcion" class="form-control" rows="5"><?php echo $descripcion ?></textarea>
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="chk-terminos" name="terminos"> Acepto los términos y condiciones
                    </label>
                </div>
                <input type="submit" name="btn_submit" class="btn btn-info" value="Registrarme"/>
            </form>
          </div>
      </div>
    </section>
  </div>

  <!--Footer  -->
  <?php require('templates/close.php'); ?>

  </body>
</html>
