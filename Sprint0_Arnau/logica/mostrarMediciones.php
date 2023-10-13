<?php
//------------------------------------------------------------------------------------------------------------------------
// Autor: Arnau Soler Tomás
// Fichero: mostrarMediciones.php
// Descripción: Fichero con el que Mostraremos las mediciones en la página del usuario
//------------------------------------------------------------------------------------------------------------------------
include("buscarUsuario.php");
include("recogerDatosLogin.php");
$inc = include("con_bbdd.php");
if ($inc) {
    $idUsuario = buscarId(recuperarDatosLogin("email"));
    //$idUsuario = 0;

    $consulta = "SELECT * FROM mediciones WHERE idUsuario LIKE '$idUsuario'";
    $resultado = mysqli_query($conex, $consulta);

    if ($resultado) {
        while ($row = $resultado->fetch_array()) {
            $idMedicion = $row['idMedicion'];
            $valorMedicionCO2 = $row['valorMedicionCO2'];
            $valorMedicionTemp = $row['valorMedicionTemp'];
            $tiempoMedicion = $row['tiempoMedicion'];
        }
        $nombreUsuario = buscarNombreUsuario($idUsuario);
    }
}
?>