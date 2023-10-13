<?php

//------------------------------------------------------------------------------------------------------------------------
// Autor: Arnau Soler Tomás
// Fichero: con_bbdd.php
// Descripción: Fichero con el que inicializamos la conexión con la base de datos
//------------------------------------------------------------------------------------------------------------------------
$host='localhost';
$bbdd='bbdd-3a-backend';
$username='root';
$password='';

$conex = mysqli_connect($host,$username,$password,$bbdd);
//"nombre_servidor","nombre_usuario"('root' por defecto en XAMPP),"contraseña","nombre de la BBDD"

$conex->set_charset("utf8");
    if($conex->connect_errno){
        $conex=NULL;
    }   
?>