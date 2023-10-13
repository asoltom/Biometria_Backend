<?php
    
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    //Creamos conexión con la BBDD
    $inc = include("../logica/con_bbdd.php");

    if($inc){
        
        $str = $_SERVER['QUERY_STRING'];
        print($str);

        parse_str($str,$output);

        $prefijo = $output['prefijo'];
        $uuid = $output['uuid'];
        $major = $output['major'];
        $minor = $output['minor'];        

        /*
        ---Borrar todo lo que haya en la tabla---
        $consEmpty = "DELETE FROM trama_beacon";
        $resEmpty = mysqli_query($conex,$consEmpty);
        */
        
        /*
        $prefijo = "test";
        $uuid = "ff:ff:0A:3C";
        $major = "1234";
        $minor = "4321";
        */
        if(($prefijo||$uuid||$major||$minor)!=null){
            $consulta = "INSERT INTO trama_beacon (prefijo, uuid, major, minor) VALUES ('$prefijo', '$uuid', '$major', '$minor')";
            $resultado = mysqli_query($conex,$consulta);

            if($resultado){
                echo "trama iBeacon creada";
                include("../logica/crearMediciones.php");
            }
            else{echo "Error";}
        }
    }
    else{
        echo "Conexión fallida";
    }
}
else{
    echo "No hay petición POST";
}
?>