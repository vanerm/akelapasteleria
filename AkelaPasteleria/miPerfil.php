<?php
require_once("funciones.php");

$title = 'Mi Perfil';

if (!estaLogueado()) {
  header("Location:registracion.php");exit;
}

$usuario = getUsuarioLogueado();


require('templates/open.php');
?>
<div class="container">
  <div id="secciones" class="interna">
    <section id="login">
      <div class="jumbotron" >
        <div class="container">
          <h2>Perfil de: <?=$usuario["username"]?> </h2>
          <button type="button" class="btn"> Logout
          <?php logout();?>
          </button>
        </div>
      </div>
    </section>
  </div>
</div>
<?php require('templates/close.php'); ?>
