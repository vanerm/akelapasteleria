<?php
require_once("funciones.php");

$title = 'Confirmacion Registracion';

require('templates/open.php');
?>
    <div class="row">
        Bienvenido <?=$usuario["username"]?> Se ha registrado correctamente!
    </div>
<?php require('templates/close.php'); ?>
