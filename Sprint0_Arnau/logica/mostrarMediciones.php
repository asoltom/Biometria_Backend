<?php
//------------------------------------------------------------------------------------------------------------------------
// Autor: Arnau Soler Tomás
// Fichero: mostrarMediciones.php
// Descripción: Fichero con el que Mostraremos las mediciones en la página del usuario
//------------------------------------------------------------------------------------------------------------------------
include("buscarUsuario.php");
include("recogerDatosLogin.php");

$idUsuario = buscarId(recuperarDatosLogin("email"));

//------------------------------------------------------------------------------------------------------------------------
// --> devolverMediciones()
// Descripción: Método para escribir por pantalla las mediciones
//------------------------------------------------------------------------------------------------------------------------
function devolverMediciones()
{
    $inc = include("con_bbdd.php");
    if ($inc) {
        $consulta = "SELECT * FROM mediciones WHERE idUsuario LIKE '$GLOBALS[idUsuario]'";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {
            while ($row = $resultado->fetch_array()) {
                $idMedicion = $row['idMedicion'];
                $valorMedicionCO2 = $row['valorMedicionCO2'];
                $valorMedicionTemp = $row['valorMedicionTemp'];
                $tiempoMedicion = $row['tiempoMedicion'];
                ?>

                <div>
                    <p>
                        <b>ID Medicion: </b>
                        <?php echo $idMedicion; ?><br>
                        <b>Valor de CO2: </b>
                        <?php echo $valorMedicionCO2; ?><br>
                        <b>Valor de Temperatura: </b>
                        <?php echo $valorMedicionTemp; ?><br>
                        <b>Registrada el: </b>
                        <?php echo $tiempoMedicion; ?><br>
                    </p>
                </div>
                <?php
            }

        }
    }
}
//------------------------------------------------------------------------------------------------------------------------
// --> devolverUsuario() --> nombreUsuario:Txt
// Descripción: Método para devolver el nombre del Usuario
//------------------------------------------------------------------------------------------------------------------------
function devolverUsuario()
{
    $nombreUsuario = buscarNombreUsuario($GLOBALS['idUsuario']);
    return $nombreUsuario;
}
?>