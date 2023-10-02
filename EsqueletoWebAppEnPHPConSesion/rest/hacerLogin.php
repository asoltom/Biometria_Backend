<?php

require_once('../logica/hacerLogin.php');

// ----------------------------------------------------------------
//
// GET ../rest/hacerLogin.php?email=<Texto>&password=<Texto>
//
// @return
//  VoF: true si el login OK
// 
// @return
//  usuario:Texto
//       devuelto implicitamente en la variable global de sesión
//       (en el navegador no se pordrá acceder a la var. global)
//
// ----------------------------------------------------------------

$objetoResultado = new stdClass;

// creo una sesión 
session_start();

// obtengo valores de los parámetros
$email = $_GET["email"];
$password = $_GET["password"];

//
// llamada a la verdadera función.
//
if ( hacerLogin( $email, $password) == true  ) {

  $objetoResultado->resultado = true;
  $objetoResultado->usuario = $email;

  // guardo en la sesión el email del usuario
  $_SESSION["usuario"] = $_GET["email"];

}else{
  session_destroy();
  $objetoResultado->resultado = false;
}

// echo == devolver
echo json_encode( $objetoResultado );
?>