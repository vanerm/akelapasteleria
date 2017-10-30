<?php
/**
 * Created by PhpStorm.
 * User: vanes
 * Date: 28/10/2017
 * Time: 8:22 PM
 */
require_once("Usuario.php");

abstract class DB
{
    public abstract function traerTodosLosUsuarios();
    public abstract function traerPorEmail($email);
    public abstract function guardarUsuario(Usuario $usuario);
}

?>
