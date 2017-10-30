<?php
/**
 * Created by PhpStorm.
 * User: vanes
 * Date: 29/10/2017
 * Time: 1:34 AM
 */

require_once ("DB.php");

class Validator
{
    public function validarLogin(DB $db){
        $arrayDeErrores=[];

        if ($_POST["email"] == ""){
            $arrayDeErrores["email"] = "El email ingresado no es correcto";
        }
        elseif (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
            $arrayDeErrores ["email"] = "El dato ingresado no corresponde al formato de email";
        }
        elseif ($db->traerPorEmail($_POST["email"]) == NULL) {
            $arrayDeErrores["email"] = "No se ha encontrado el email ingresado. Intente nuevamente o registrese en caso de no estarlo";
        }
        /*else {
            if (strlen($_POST["password"]) < 8) {
                $arrayDeErrores["password"] = "La contraseña debe tener al menos 8 caracteres";
            }
        */
            else {
            //El mail existe!!
                $usuario = $db->traerPorEmail($_POST["email"]);

                if (password_verify($_POST["password"], $usuario->getpassword()) == false){
                    $arrayDeErrores["password"] = "La contraseña ingresada no es correcta";
                }
            }
        //}
        return $arrayDeErrores;
    }

    public function validarInformacion(DB $db){
        $arrayDeErrores=[];

        if($_POST["nombre"]==""){
            $arrayDeErrores["nombre"]="Debe completar el campo del Nombre";
        }

        if($_POST["apellido"]==""){
            $arrayDeErrores["apellido"]="Debe completar el campo del Apellido";
        }

        if($_POST["direccion"]==""){
            $arrayDeErrores["direccion"]="Debe completar el campo del Direccion";
        }

        if($_POST["telefono"]==""){
            $arrayDeErrores["telefono"]="Debe completar el campo del Telefono";
        }

        if($_POST["email"]==""){
            $arrayDeErrores["email"]="Debe completar el campo del e-mail";
        }
        elseif (filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)==false) {
            $arrayDeErrores["email"]="No es correcto el formato del email ingresado";
        }
        elseif ($db->traerPorEmail($_POST["email"]) != NULL) {
            $arrayDeErrores["email"] = "El email ingresado ya esta registrado";
        }

        if(strlen($_POST["password"])<8){
            $arrayDeErrores["password"]="La contraseña debe tener como minimo 8 caracteres";
        }
        elseif (preg_match('/[A-Z]/',$_POST["password"])==false) {
            $arrayDeErrores["password"]="La contraseña debe tener al menos una letra mayuscula";
        }
        elseif ($_POST["password"] != $_POST["password_confirm"]) {
            $arrayDeErrores["password"]="Las dos contraseñas ingresadas no coinciden";
        }

        if (!isset($_POST["genero"])){
            $arrayDeErrores["genero"]="Debe completar el genero";
        }

        if (!isset($_POST["fnac_dia"])){
            $arrayDeErrores["fnac_dia"] ="Falta completar el dia de nacimiento";
        }

        if (!isset($_POST["fnac_mes"])){
            $arrayDeErrores["fnac_mes"] ="Falta completar el mes de nacimiento";
        }

        if (!isset($_POST["fnac_anio"])){
            $arrayDeErrores["fnac_anio"] ="Falta completar el año de nacimiento";
        }

        if (!isset($_POST["terminos"])){
            $arrayDeErrores["terminos"]= "Debe aceptar los terminos y condiciones";
        }

        return $arrayDeErrores;
    }



}

?>