<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UserPage</title>
</head>

<body>
    <!-- El siguiente include nos conectará con la parte de la Lógica encargada de mostrar las Mediciones -->
    <?php
    include("../logica/mostrarMediciones.php");
    ?>

    <div>
        <h1>Bienvenido
            <?php echo(devolverUsuario()) ?>
        </h1>
        <h2>A continuación, se presentan las mediciones de tu dispositivo Arduino</h2>
        <h2>
            <?php echo(devolverUsuario()) ?>
        </h2>
    </div>
    <?php devolverMediciones() ?>
</body>

</html>