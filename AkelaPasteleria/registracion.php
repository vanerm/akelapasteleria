<?php

require_once("soporte.php");

if ($auth->estaLogueado()) {
    header("Location:index.php");exit;
}
$meses = [
    1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril", 5 => "Mayo", 6 => "Junio",
    7 => "Julio", 8 => "Agosto", 9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 => "Diciembre"
];

$nombre = $_POST['nombre'] ?? null;
$apellido = $_POST['apellido'] ?? null;
$direccion = $_POST['direcion'] ?? null;
$telefono = $_POST['telefono'] ?? null;
$email = $_POST['email'] ?? null;
$emailConfirm = $_POST['email_confirm'] ?? null;
$genero = $_POST['genero'] ?? null;
$dia = $_POST['fnac_dia'] ?? null;
$mes = $_POST['fnac_mes'] ?? null;
$anio = $_POST['fnac_anio'] ?? null;
$descripcion = $_POST['descripcion'] ?? null;

// Validar -errores
//coleccionar errores
//o redirigir
// <?= es equivalente a <?php echo=

$arrayDeErrores=[];
if($_POST)
{
  $arrayDeErrores = $validator->validarInformacion($db);

  if(count($arrayDeErrores)==0){
    $fecha = $dia .'/'. $mes . '/' . $anio;

    $usuario = new Usuario($_POST["nombre"], $_POST["apellido"],$_POST["direccion"],$_POST["telefono"],
        $_POST["email"],$_POST["password"],$_POST["genero"] ,$fecha);

    $db->guardarUsuario($usuario);

    header("Location:login.php");exit;
  }
}

?>

    <?php
    $title = 'REGISTRACIÓN';
    require('templates/open.php');
    ?>
  <div class="container">
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

            <form role="form" action="registracion.php" method="POST" enctype="multipart/form-data">
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
                        <input type="text" class="form-control" id="username" name="direccion" value="<?php echo $direccion; ?>" placeholder="Ingrese Nombre de Usuario">
                    </div>
                <!-- </div>
                <div class="row"> -->
                    <div class="form-group col-sm-6">
                        <label for="telefono">Telefono</label>
                        <input type="text" class="form-control" id="username" name="telefono" value="<?php echo $telefono; ?>" placeholder="Ingrese Nombre de Usuario">
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
                        <label for="password">Contraseña</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese Contraseña">
                    </div>
                    <div class="form-group col-sm-6">
                        <label for="password-confirm">Confirmar Contraseña</label>
                        <input type="password" class="form-control" id="password-confirm" name="password_confirm" placeholder="Ingrese Confirmación Contraseña">
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
  </div>

  <!--Footer  -->
  <?php require('templates/close.php'); ?>
