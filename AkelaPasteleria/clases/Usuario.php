<?php
/**
 * Created by PhpStorm.
 * User: vanes
 * Date: 28/10/2017
 * Time: 7:53 PM
 */

class Usuario {
    private $nombre;
    private $apellido;
    private $direccion;
    private $telefono;
    private $email;
    private $password;
    private $genero;
    private $f_nac;
    private $id;

    public function __construct($nombre,$apellido,$direccion,$telefono,$email,$password,$genero,$f_nac,$id = null)
    {

        if ($id == null){
            // Viene por POST

            $this->password = password_hash($password, PASSWORD_DEFAULT);
        } else {
            // Viene de la base
            $this->password = $password;
        }

        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->direccion=$direccion;
        $this->telefono=$telefono;
        $this->email=$email;
        $this->genero=$genero;
        $this->f_nac=$f_nac;
        $this->id=$id;

    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    /**
     * @return mixed
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * @param mixed $apellido
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->direccion;
    }

    /**
     * @param mixed $direccion
     */
    public function setDireccion($direccion)
    {
        $this->direccion = $direccion;
    }

    /**
     * @return mixed
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * @param mixed $telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }



    /**
     * @return mixed
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * @param mixed $genero
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    /**
     * @return mixed
     */
    public function getFNac()
    {
        return $this->f_nac;
    }

    /**
     * @param mixed $f_nac
     */
    public function setFNac($f_nac)
    {
        $this->f_nac = $f_nac;
    }

    /**
     * @return null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    public function toArray(){
        return [
          "nombre"=>$this->nombre,
          "apellido"=>$this->apellido,
          "direccion"=>$this->direccion,
          "telefono"=>$this->telefono,
          "email"=>$this->email,
          "password"=>$this->password,
          "genero"=>$this->genero,
          "f_nac"=>$this->f_nac,
          "id"=>$this->id
        ];
    }

}