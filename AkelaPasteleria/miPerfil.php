<?php
include_once("soporte.php");

$title = 'Mi Perfil';

if (!$auth->estaLogueado()) {
  header("Location:login.php");exit;
}

$usuario = $auth->obtenerUsuarioLogueado($db);

/*
 * $email = $_GET["email"];
 * $usuario = $db->traerPorEmail($email);
*/


require('templates/open.php');
?>
<div class="container">
  <div id="secciones" class="interna">
    <section id="login">
      <div class="jumbotron" >
        <div class="container">
          <h2>Perfil de: <?=$usuario->getNombre() . ' ' . $usuario->getApellido()?> </h2>

            <ul>
                <li>Nombre: <?=$usuario->getNombre()?> </li>
                <li>Apellido: <?=$usuario->getApellido()?> </li>
                <li>Email: <?=$usuario->getEmail()?> </li>
                <li>Fecha Nacimiento: <?=$usuario->getFNac()?> </li>
            </ul>


        </div>
      </div>
    </section>
  </div>
</div>
<?php require('templates/close.php'); ?>
