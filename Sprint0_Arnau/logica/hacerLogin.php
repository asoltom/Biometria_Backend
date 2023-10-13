<?php
include("recogerDatosLogin.php");
// ---------------------------------------------------------------
//
// email:Texto, password:N -> hacerLogin() -> VoF
//
// ---------------------------------------------------------------
function hacerLogin( $email, $password ) {
  $inc = include("con_bbdd.php");
  if($inc){
    $consulta = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conex,$consulta);
    if($resultado){

      while($row = $resultado->fetch_array()){
        
          $bbddEmail = $row['email'];
          $bbddPassword = $row['password'];

          if(($bbddEmail == $GLOBALS['email'])&&($bbddPassword == $GLOBALS['password'])){
            guardarDatosLogin($bbddEmail,$bbddPassword);
            return true;
          }
      }
    }
  }

  return false;
}

?>
