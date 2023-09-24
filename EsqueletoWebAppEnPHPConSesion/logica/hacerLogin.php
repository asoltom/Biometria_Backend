<?php

// ---------------------------------------------------------------
//
// nombre:Texto, password:Texto -> hacerLogin() -> VoF
//
// ---------------------------------------------------------------

function hacerLogin( $nombre, $password ) {

  // comprobación "rigurosa" del password
  if ( $password == "1234" ) {
    return true;
  }

  return false;
}
?>
