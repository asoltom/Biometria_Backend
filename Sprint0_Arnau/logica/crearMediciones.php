<?php

//------------------------------------------------------------------------------------------------------------------------
// Autor: Arnau Soler Tomás
// Fichero: crearMediciones.php
// Descripción: Fichero en el que creamos las Mediciones mediante los parametros extraidos de la tabla trama_beacon
//------------------------------------------------------------------------------------------------------------------------
include("../tests/test_crearMediciones.php");
if ($estado_test_crearMediciones) {
    $inc = include("con_bbdd.php");
    if ($inc) {
        $consulta = "SELECT * FROM trama_beacon";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            while ($row = $resultado->fetch_array()) {
                $id = $row['id'];
                $major = $row['major'];
                $minor = $row['minor'];
            }
        }
        //De momento solo tenemos un usuario, por lo que no hace falta pensar en un código que inserte un nuevo usuario ni nada
        //Por eso lo pongo a mano
        $idUsuario = 1;

        //--------------------------------------
        if (($id || $major || $minor || $idUsuario) != null) {
            $consulta = "INSERT INTO mediciones (idMedicion, valorMedicionCO2, valorMedicionTemp, idUsuario) VALUES ('$id','$major','$minor','$idUsuario')";
            $resultado = mysqli_query($conex, $consulta);
        }
    }
} else {
    echo ("fallo en test_crearMediciones");
}

?>