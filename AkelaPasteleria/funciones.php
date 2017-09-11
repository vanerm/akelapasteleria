<?php


function validarInformacion(){
  $arrayDeErrores=[];

  $nombreDelArchivo=$_FILES["avatar"]["name"];
  $extension=pathinfo($nombreDelArchivo,PATHINFO_EXTENSION);

  if($_POST["nombre"]==""){
    $arrayDeErrores["nombre"]="Debe completar el campo del Nombre";
  }

  if($_POST["apellido"]==""){
    $arrayDeErrores["apellido"]="Debe completar el campo del Apellido";
  }

  if($_POST["direccion"]==""){
    $arrayDeErrores["direccion"]="Debe completar el campo del username";
  }

  if($_POST["telefono"]==""){
    $arrayDeErrores["telefono"]="Debe completar el campo del username";
  }

  if($_POST["email"]==""){
    $arrayDeErrores["email"]="Debe completar el campo del e-mail";
  }
  elseif (filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)==false) {
    $arrayDeErrores["email"]="No es correcto el formato del email ingresado";
  }

  if(strlen($_POST["contrasena"])<8){
    $arrayDeErrores["contrasena"]="La contraseña debe tener como minimo 8 caracteres";
  }
  elseif (preg_match('/[A-Z]/',$_POST["contrasena"])==false) {
    $arrayDeErrores["contrasena"]="La contraseña debe tener al menos una letra mayuscula";
  }
  elseif ($_POST["contrasena"] != $_POST["contrasena_confirm"]) {
    $arrayDeErrores["contrasena"]="Las dos contraseñas ingresadas no coinciden";

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


































 ?>
