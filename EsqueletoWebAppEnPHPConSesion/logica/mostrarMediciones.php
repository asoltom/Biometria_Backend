<?php

$inc = include("con_bbdd.php");
if($inc){
    $consulta = "SELECT * FROM mediciones";
    $resultado = mysqli_query($conex,$consulta);

    if($resultado){
        while($row = $resultado->fetch_array()){
            $idMedicion = $row['idMedicion'];
            $idUsuario =  $row['idUsuario'];
            $valorMedicionCO2 = $row['valorMedicionCO2'];
            $valorMedicionTemp = $row['valorMedicionTemp'];
            $tiempoMedicion = $row['tiempoMedicion'];
            

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
                        <b>Valor de CO2: </b> <?php echo $valorMedicionCO2; ?><br>
                        <b>Valor de Temperatura: </b> <?php echo $valorMedicionTemp; ?><br>
                        <b>Registrada el: </b> <?php echo $tiempoMedicion; ?><br>
                    </p>
                </div>
            </div>
            <?php
        }
    }
}
?>