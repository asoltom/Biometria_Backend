<?php

$inc = include("con_bbdd.php");
if($inc){
    $consulta = "SELECT * FROM mediciones";
    $resultado = mysqli_query($conex,$consulta);

    if($resultado){
        while($row = $resultado->fetch_array()){
            $idMedicion = $row['idMedicion'];
            $idSensor = $row['idSensor'];
            $valorMedicion = $row['valorMedicion'];
            $tiempoMedicion = $row['tiempoMedicion'];
            $idUsuario =  $row['idUsuario'];

            //$consultaUser = "SELECT 'nombre' FROM 'usuarios' WHERE id='$idUsuario' ";
            //$nombreUsuario = mysqli_query($conex,$consultaUser);

            $nombresUsuario = "SELECT id, nombre FROM usuarios";
            $resUsuario = mysqli_query($conex,$nombresUsuario);

            while($row2 = $resUsuario->fetch_array()){
                if($row2['id']==$idUsuario){
                    $nombreUsuario = $row2['nombre'];
                }
            }

            ?>
            <div>
                <h1>Bienvenido <?php echo $nombreUsuario; ?></h1>
                <h2>A continuación, se presentan las mediciones de tu dispositivo Arduino</h2>
                <h2><?php echo $nombreUsuario; ?></h2>
                <div>
                    <p>
                        <b>ID Medicion: </b> <?php echo $idMedicion; ?><br>
                        <b>ID Sensor: </b> <?php echo $idSensor; ?><br>
                        <b>Valor de la Medicion: </b> <?php echo $valorMedicion; ?><br>
                        <b>Registrada el: </b> <?php echo $tiempoMedicion; ?><br>
                    </p>
                </div>
            </div>
            <?php
        }
    }
}
?>