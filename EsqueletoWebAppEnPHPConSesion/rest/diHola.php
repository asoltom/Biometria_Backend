<?php

require_once('../logica/diHola.php');

// -------------------------------------------------
//
// GET ../rest/diHola.php
//
// usuario:Texto -> diHola() -> (nombre:Texto, saludo:Texto) | error:Texto
//
// usuario: recibido de forma implícita en la sesión
// (nombre:Texto, saludo:Texto) | error:Texto : devuelto en un mismo JSON
//
// -------------------------------------------------

session_start();

// creo el objeto resultado
$objetoResultado = new stdClass;

// compruebo si esto lo pide un usuario
// antes acreditado mediante login
if ( ! isset( $_SESSION["usuario"]) ) {
  // no es un usuario acreditado
  $objetoResultado->error = "usuario no acreditado";
  // $objetoResultado->nombre = "";
  // $objetoResultado->saludo = "";
  // echo == devolver
  echo json_encode( $objetoResultado );
  return;
}

// Sí que es un usuario acreditado:
$usuario = $_SESSION["usuario"];

//
// llamada a la verdadera función.
//
$objetoResultado = diHola( $usuario );

$objetoResultado->error = 0;

// echo == devolver
echo json_encode( $objetoResultado );
?>
