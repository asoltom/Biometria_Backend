<?php

//------------------------------------------------------------------------------------------------------------------------
// Autor: Arnau Soler Tomás
// Fichero: test_crearMediciones.php
// Descripción: Fichero en el que realizaremos pruebas automáticas para comprobar que la creación de Mediciones funciona
//------------------------------------------------------------------------------------------------------------------------
$inc = include("../logica/con_bbdd.php");
//Si hay conexión
if ($inc) {
    $idT = 0;
    $majorT = 1310;
    $minorT = 2023;
    $idUsuarioT = 0;
    //--------------------------------------
    //Procedemos a insertar los valores de testeo
    if (($idT || $majorT || $minorT || $idUsuarioT) != null) {
        $consulta = "INSERT INTO test_mediciones (idMedicion, valorMedicionCO2, valorMedicionTemp, idUsuario) VALUES ('$idT','$majorT','$minorT','$idUsuarioT')";
        $resultado = mysqli_query($conex, $consulta);
    }
    //--------------------------------------
    //Comprobamos que estén
    $consulta = "SELECT * FROM `mediciones` WHERE idMedicion LIKE $idT AND valorMedicionCO2 LIKE $majorT AND valorMedicionTemp LIKE $minorT AND idUsuario LIKE $idUsuarioT";
    $resultado = mysqli_query($conex, $consulta);

    if ($resultado) {
        $estado_test_crearMediciones = true;
    } else {
        $estado_test_crearMediciones = false;
    }
}
?>