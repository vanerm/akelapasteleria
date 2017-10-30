<?php
/**
 * Created by PhpStorm.
 * User: vanes
 * Date: 28/10/2017
 * Time: 8:09 PM
 */

class Auth {
public function __construct()
{
    session_start();

    if (isset($_COOKIE["usuarioLogueado"]) && !$this->estaLogueado()) {
        $this->loguear($_COOKIE["usuarioLogueado"]);
    }
}

    public function logout(){
        session_destroy();
        setcookie("usuarioLogueado", "", -1);
    }

    public function loguear($email){
        $_SESSION["usuarioLogueado"] = $email;
    }

    public function obtenerUsuarioLogueado(DB $db) {
        if ($this->estaLogueado()) {
            $email = $_SESSION["usuarioLogueado"];
            return $db->traerPorEmail($email);
        } else {
            return null;
        }
    }

    public function estaLogueado(){
        if (isset($_SESSION["usuarioLogueado"])){
            return true;
        }
        else{
            return false;
        }
    }

    function recordar($email){
        setcookie("usuarioLogueado", $email, time()+3600);
    }


}