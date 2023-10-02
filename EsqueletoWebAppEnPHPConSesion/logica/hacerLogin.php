<?php

// ---------------------------------------------------------------
//
// email:Texto, password:N -> hacerLogin() -> VoF
//
// ---------------------------------------------------------------
function hacerLogin( $email, $password ) {

  //echo $email;
  //echo $password;

  //echo $GLOBALS['email'];
  //echo $GLOBALS['password'];
  
  $inc = include("con_bbdd.php");

  //-------------------------------------------------------------------------------------------------------------
  //Para recoger el contenido de las variables $email y $password debo usar el $GLOBALS['index'], de lo contrario
  //password se me recogerá como un valor nulo después de iniciar la conexión con la BBDD
  //-------------------------------------------------------------------------------------------------------------

  //echo $GLOBALS['email'];
  //echo $GLOBALS['password'];

  //echo $email;
  //echo $password;

  

  if($inc){
    $consulta = "SELECT * FROM usuarios";
    $resultado = mysqli_query($conex,$consulta);
    if($resultado){

      while($row = $resultado->fetch_array()){
        
          $bbddEmail = $row['email'];
          $bbddPassword = $row['password'];

          if(($bbddEmail == $GLOBALS['email'])&&($bbddPassword == $GLOBALS['password'])){
            return true;
          }
      }
    }
  }

  return false;
}

?>
