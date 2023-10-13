<?php

//------------------------------------------------------------------------------------------------------------------------
// Autor: Arnau Soler Tomás
// Fichero: buscarUsuario.php
// Descripción: Fichero en el que tenemos 2 funciones. La primera, para buscar el nombre de Usuario mediante su ID;
// y la segunda, para buscar su ID mediante un email
//------------------------------------------------------------------------------------------------------------------------
// id:N --> buscarNombreUsuario() --> nombreUsuario:Txt
//------------------------------------------------------------------------------------------------------------------------
function buscarNombreUsuario($idABuscar)
{
    $inc = include("con_bbdd.php");
    if ($inc) {
        $consulta = "SELECT * FROM usuarios";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            while ($row = $resultado->fetch_array()) {
                $nombre = $row['nombre'];
                $id = $row['id'];

                $nombresUsuario = "SELECT id, nombre FROM usuarios";
                $resUsuario = mysqli_query($conex, $nombresUsuario);

                while ($row2 = $resUsuario->fetch_array()) {
                    if ($row2['id'] == $idABuscar) {
                        $nombreUsuario = $row2['nombre'];
                        return $nombreUsuario;
                    }
                }
            }
        }
    }
}
//------------------------------------------------------------------------------------------------------------------------
// email:Txt --> buscarId() --> id:N
//------------------------------------------------------------------------------------------------------------------------
function buscarId($emailABuscar)
{
    $inc = include("con_bbdd.php");
    if ($inc) {
        $consulta = "SELECT * FROM usuarios";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            while ($row = $resultado->fetch_array()) {
                $email = $row['email'];
                $id = $row['id'];

                $nombresUsuario = "SELECT id, email FROM usuarios";
                $resUsuario = mysqli_query($conex, $nombresUsuario);

                while ($row2 = $resUsuario->fetch_array()) {
                    if ($row2['email'] == $emailABuscar) {
                        $idUsuario = $row2['id'];
                        return $idUsuario;
                    }
                }
            }
        }
    }
}
?>