<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserPage</title>
</head>
<body>
    <!-- Los siguientes includes son: Para conectarse con la BBDD, y con la Logica para que nos muestre las mediciones
    de todos los usuarios -->
    <?php
    include("../logica/con_bbdd.php");
    include("../logica/mostrarMediciones.php");
    ?>
</body>
</html>