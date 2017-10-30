<?php
/**
 * Created by PhpStorm.
 * User: vanes
 * Date: 29/10/2017
 * Time: 12:49 AM
 */

require_once ("DB.php");

class DBMySql extends DB{
    private $conn;

    public function __construct()
    {
        $dsn= 'mysql:host=localhost;dbname=akela_db;charset=utf8mb4;port=3306';
        $user = 'root';
        $pass = '';
        $this->conn = new PDO($dsn,$user,$pass,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);



    }

    public function traerTodosLosUsuarios()
    {
        $sql = 'SELECT * FROM usuarios';
        $query = $this->conn->prepare($sql);
        $query->execute();

        $arrayDeArrays= $query->fetchAll(PDO::FETCH_ASSOC);

        $arrayDeObjetos = [];

        foreach ($arrayDeArrays as $array){
            $arrayDeObjetos[] = new Usuario($array["nombre"], $array["apellido"],$array["direccion"],$array["telefono"],
                $array["email"],$array["password"],$array["genero"] ,$array["f_nac"], $array["id"]);
        }
        return $arrayDeObjetos;
    }

    public function traerPorEmail($email)
    {
        $sql = 'SELECT * FROM usuarios WHERE email = :email';
        $query = $this->conn->prepare($sql);

        $query->bindValue(":email", $email);
        $query-> execute();

        $array = $query->fetch(PDO::FETCH_ASSOC);
        if(!$array){
            return null;
        } else {
            return new Usuario($array["nombre"], $array["apellido"],$array["direccion"],$array["telefono"],
                $array["email"],$array["password"],$array["genero"] ,$array["f_nac"], $array["id"]);
        }
    }

    public function guardarUsuario(Usuario $usuario)
    {
        $sql = 'INSERT INTO usuarios VALUES (DEFAULT,:nombre,:apellido,:direccion,:telefono,:email,:password,:genero,:f_nac)';

        $query=$this->conn->prepare($sql);

        $query->bindValue("nombre", $usuario->getNombre());
        $query->bindValue("apellido", $usuario->getApellido());
        $query->bindValue("direccion", $usuario->getDireccion());
        $query->bindValue("telefono", $usuario->getTelefono());
        $query->bindValue("email", $usuario->getEmail());
        $query->bindValue("password",$usuario->getpassword());
        $query->bindValue("genero",$usuario->getGenero());
        $query->bindValue("f_nac", $usuario->getFNac());
        $query->execute();
    }

    public function buscarUsuarios($buscar){
        $sql = "SELECT * FROM usuarios WHERE email LIKE :buscar OR  nombre LIKE :buscar";
        $query=$this->conn->prepare($sql);
        $query->bindValue(":buscar","%" . $buscar . "%");
        $query->execute();

        $arrayDeArrays = $query->fetchAll(PDO::FETCH_ASSOC);

        $arrayDeObjetos = [];

        foreach ($arrayDeArrays as $array){
            $arrayDeObjetos[] = new Usuario($array["nombre"], $array["apellido"],$array["direccion"],$array["telefono"],
                $array["email"],$array["password"],$array["genero"] ,$array["f_nac"], $array["id"]);
        }
        return $arrayDeObjetos;

    }

}
