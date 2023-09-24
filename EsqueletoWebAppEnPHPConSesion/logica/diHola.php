<?php
// -------------------------------------------------
//
// usuario:Texto -> diHola() -> (nombre:Texto, saludo:Texto) 
//
// -------------------------------------------------

function diHola( $usuario ) {
  $objetoResultado = new stdClass;
  $objetoResultado->nombre = $usuario;
  $objetoResultado->saludo = "That's all folks";

  return $objetoResultado;
}

?>
