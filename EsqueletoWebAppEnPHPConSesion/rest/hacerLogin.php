<?php

require_once('../logica/hacerLogin.php');

// ----------------------------------------------------------------
//
// GET ../rest/hacerLogin.php?nombre=<Texto>&password=<Texto>
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
$nombre = $_GET["nombre"];
$password = $_GET["password"];

//
// llamada a la verdadera función.
//
if ( hacerLogin( $nombre, $password) == true  ) {

  $objetoResultado->resultado = true;
  $objetoResultado->usuario = $nombre;

  // guardo en la sesión el nombre del usuario
  session_start();
  $_SESSION["usuario"] = $_GET["nombre"];

} else {
  session_destroy();
  $objetoResultado->resultado = false;
}

// echo == devolver
echo json_encode( $objetoResultado );
?>
