<?php
require_once("soporte.php");


$title = 'Confirmacion Registracion';

require('templates/open.php');

$email= $_GET["email"];
$usuario = $db->traerPorEmail($email);

?>

    <div class="row">
        Bienvenido <?=$usuario['nombre']?> Se ha registrado correctamente!
    </div>
<?php require('templates/close.php'); ?>
