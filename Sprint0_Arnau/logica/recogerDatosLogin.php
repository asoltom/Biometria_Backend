<?php

//------------------------------------------------------------------------------------------------------------------------
// Autor: Arnau Soler Tomás
// Fichero: recogerDatosLogin.php
// Descripción: Fichero en el que tenemos 2 funciones con las que interactuaremos entre el Login y la página del Usuario
//------------------------------------------------------------------------------------------------------------------------
//Variables Globales de Prueba
//Los inicializo con los datos del usuario de prueba
$dato_email = "test@biogti.com";
$dato_password = "1234";

//------------------------------------------------------------------------------------------------------------------------
// email:Txt, password:N --> guardarDatosLogin() --> dataJSON:JSON
// Descripción: Esta función nos permite guardar en un archivo JSON el email y contraseña con la que hemos iniciado
// en el Login
//------------------------------------------------------------------------------------------------------------------------
function guardarDatosLogin($emailIntroducido, $passwordIntroducida)
{
    $data = [
        'dato_email' => $emailIntroducido,
        'dato_password' => $passwordIntroducida
    ];
    
    $dataJSON = json_encode($data);
    
    file_put_contents('../docs/dataJSON.json', $dataJSON);
}
//------------------------------------------------------------------------------------------------------------------------
// queQuiero:Txt, dataFile:Txt --> recuperarDatosLogin() --> email:Txt || password:N
// Descripción: Esta función nos permite recuperar el email o contraseña con la que habíamos iniciado en el Login
// Esto lo usaremos como "filtro" para buscar el Usuario
//------------------------------------------------------------------------------------------------------------------------
function recuperarDatosLogin($queQuiero)
{
    $dataFile = file_get_contents('../docs/dataJSON.json');
    $dataLoginJSON = json_decode($dataFile);
    $res=null;
    if ($queQuiero == "email") {
        $res=$dataLoginJSON->dato_email;
        unlink('../docs/dataJSON.json');
       return $res;
    } elseif ($queQuiero == "password") {
        $res=$dataLoginJSON->dato_password;
        unlink('../docs/dataJSON.json');
       return $res;
    }

    return;
}
//---------------------------------
/*
Comentarios:

- Para que no haya brechas de seguridad entre el Login y la Página del Usuario, así como por no almacenar información
  que no necesitaremos, usamos en recuperarDatosLogin() el método unlink() para eliminar el archivo dataJSON.json una vez
  tengamos lo que queremos devolver, ya sea el correo o la contraseña.
*/
//---------------------------------
?>