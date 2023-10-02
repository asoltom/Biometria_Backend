<?php

//require 'con_bbdd.php';


// ---------------------------------------------------------------
//
// email:Texto, password:Texto -> hacerLogin() -> VoF
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

          echo $password;

          if(($bbddEmail == $email)&&($bbddPassword == $password)){
            return true;
          }
      }
    }
  }

  return false;
}
?>
