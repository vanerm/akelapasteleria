<?php
session_start();

if (!estaLogueado() && isset($_COOKIE["usuarioLogueado"])){
  loguear($_COOKIE["usuarioLogueado"]);
}

function validarLogin(){
  $arrayDeErrores=[];
  if ($_POST["email"] == ""){
    $arrayDeErrores["email"] = "El email ingresado no es correcto";
  }
  elseif (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false) {
    $arrayDeErrores ["email"] = "El dato ingresado no corresponde al formato de email";
  }
  elseif (traerPorEmail($_POST["email"]) == NULL) {
    $arrayDeErrores["email"] = "No se ha encontrado el email ingresado. Intente nuevamente o registrese en caso de no estarlo";
  }
  else {
    if (strlen($_POST["contrasena"]) < 8) {
      $arrayDeErrores["contrasena"] = "La contraseña debe tener al menos 8 caracteres";
    }
    else {
      $usuario = traerPorEmail($_POST["email"]);

      if (password_verify($_POST["contrasena"], $usuario["contrasenia"]) == false){
        $arrayDeErrores[] = "La contraseña ingresada no es correcta";
      }
    }
  }
  return $arrayDeErrores;
}


function validarInformacion(){
  $arrayDeErrores=[];

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
  elseif (traerPorEmail($_POST["email"]) != NULL) {
    $arrayDeErrores["email"] = "El email ingresado ya esta registrado";
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

function armarUsuario($datos){
  return[
    "nombre" => $datos["nombre"],
    "apellido" => $datos["apellido"],
    "username" => $datos["username"],
    "email" => $datos["email"],
    "contrasenia" => password_hash($datos["contrasena"], PASSWORD_DEFAULT),
    "genero" => $datos["genero"],
    "f_nac" => $datos["fnac_dia"] ."-". $datos["fnac_mes"] . "-" . $datos["fnac_anio"],
    "descripcion" => $datos["descripcion"]
  ];
}

function guardarUsuario($usuario){
  $json = json_encode($usuario);
  file_put_contents("usuarios.json", $json . PHP_EOL, FILE_APPEND);
}

function traerTodos(){
  $usuarios = [];

  $recurso = fopen("usuarios.json", "r");
  $linea = fgets($recurso);
  while ($linea != false) {
    $usuarios[] = json_decode($linea, true);
    $linea = fgets($recurso);
  }
  fclose($recurso);
  return $usuarios;
}

function traerPorEmail($email){
  $recurso = fopen("usuarios.json", "r");
  $linea = fgets($recurso);
  while ($linea !=false){
    $usuario = json_decode($linea, true);

    if ($usuario["email"] ==$email){
      return $usuario;
    }

    $linea = fgets($recurso);
  }
  fclose($recurso);
  return null;
}

function loguear($email){
  $_SESSION["usuarioLogueado"] = $email;
}

function logout(){
  session_destroy();
    setcookie("usuarioLogueado", "", -1);
}

function estaLogueado(){
  if (isset($_SESSION["usuarioLogueado"])){
    return true;
  }
  else{
    return false;
  }
}

function getUsuarioLogueado(){
  if(estaLogueado()){
    return traerPorEmail($_SESSION["usuarioLogueado"]);
  }
  else {
    return NULL;
  }
}

function recordar($email){
  setcookie("usuarioLogueado", $email, time()+3600);
}

?>
