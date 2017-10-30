<?php
/**
 * Created by PhpStorm.
 * User: vanes
 * Date: 28/10/2017
 * Time: 8:27 PM
 */

require_once ("DB.php");
require_once("Usuario.php");

class DBJson extends DB {
    private $arch;

    public function __construct()
    {
        $this->arch = "usuarios.json";
    }


    public function traerPorEmail($email)
    {
        $archivo = fopen($this->arch, "r");

        $linea = fgets($archivo);

        while($linea != false) {

            $array = json_decode($linea, true);

            if ($array["email"] == $email) {
                return new Usuario($array["nombre"], $array["apellido"],$array["direccion"],$array["telefono"],
                    $array["email"],$array["password"],$array["genero"] ,$array["f_nac"], $array["id"]);
            }
            $linea = fgets($archivo);
        }

        return null;

    }

    public function traerTodosLosUsuarios()
    {
        $archivo = fopen($this->arch, "r");

        $linea = fgets($archivo);

        $usuarios = [];

        while($linea != false) {

            $array = json_decode($linea, true);
            $usuarios[] = new Usuario ($array["nombre"], $array["apellido"],$array["direccion"],$array["telefono"],
                $array["email"],$array["password"],$array["genero"] ,$array["f_nac"], $array["id"]);

            $linea = fgets($archivo);
        }

        return $usuarios;
    }

    public function guardarUsuario(Usuario $usuario)
    {
        if ($usuario->getId() == null) {
            $usuario->setId($this->traerNuevoId());
        }

        $json = json_encode($usuario->toArray());
        file_put_contents("usuarios.json", $json . PHP_EOL, FILE_APPEND);
    }

    public function traerNuevoId() {
        $usuarios = $this->traerTodosLosUsuarios();

        if (count($usuarios) == 0) {
            return 1;
        }

        $ultimo = array_pop($usuarios);
        return $ultimo->getId() + 1;
    }


}

