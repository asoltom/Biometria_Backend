# Biometria_Backend



## Descripción

Repositorio del proyecto de biometría para el Backend, es decir, para el servidor

## Instalación

Se debe instalar XAMMP para poder abrir todo lo relacionado con la BBDD en Local.
Use el enlace oficial: https://www.apachefriends.org/es/index.html

En el caso de Windows, es importante que la carpeta destino de instalación sea C:\

Se debe descargar/clonar el repositorio.

Importante realizar los siguientes pasos para iniciar todo en Local

## Pasos para configurar el servidor:

1. Abrir XAMPP Control Panel

2. Hacer click en el botón "Start" de al lado de Apache

3. Abrir la carpeta htdocs de XAMPP. De haberlo hecho bien, será C:\xampp\htdocs

4. Introducir ahí el contenido del repositorio, es decir, la carpeta Sprint0_Arnau
Puede cambiarle el nombre a la carpeta, pero de hacerlo tambíen deberá cambiarlo en el código del Repositorio_Android en caso de estar usandolo y donde sea necesario

## Pasos para configurar la Base de Datos con XAMPP:

1. Inicie MySQL en XAMPP
2. Haga click en Admin para ir a phpmyadmin
3. Vaya a la pestaña de Importar
4. En "Seleccionar archivo", seleccione la BBDD que encontrará dentro de la carpeta del servidor, en la carpeta bbdd
5. Vaya abajo del todo y haga click en Importar

## Uso:

1. Inicie XAMPP
2. Haga click en "Start" tanto para Apache como MySQL.
3. Abra la dirección localhost/<nombre de la carpeta destino>/<nombre del archivo .html>. De no haber cambiado el nombre de la carpeta, y haber seguido los pasos correctamente, será http://localhost/Sprint0_Arnau/
4. Aparecerá en la página de Login. Para ver los datos de su usuario, deberá "iniciar sesión" con el email y password pertenecientes a dicho usuario. En caso de no pertenecer a la BBDD, o ser algún parámetro incorrecto, no podrá acceder.
5. Una vez se ha accedido a la página del usuario, se le dará la bienvenida y se podrán visualizar todas las mediciones, pertenecientes a su usuario, recibidas por el dispositivo Android. Destacar que, para que esta parte funcione, se necesita el código perteneciente al repositorio Biometria_Android.

----------------------------------------------------------------------------------------------------------
IMPORTANTE	IMPORTANTE	IMPORTANTE	IMPORTANTE	IMPORTANTE	IMPORTANTE	IMPORTANTE  IMPORTANTE  IMPORTANTE
----------------------------------------------------------------------------------------------------------

Cuando se abra el Panel de Control de XAMPP, en caso de iniciar alguna de las funciones (Apache,
MySQL, etc), darle a "Stop" antes de cerrar el panel de control para evitar errores.

----------------------------------------------------------------------------------------------------------
----------------------------------------------------------------------------------------------------------

## Cambio de registro:

En el archivo con_bbdd.php podemos cambiar los valores relacionados con la conexión a la BBDD, como el host o el nombre de la BBDD a la que accederemos en XAMPP.

Los datos de los usuarios que hay en la tabla de usuarios en este momento son:

Nombre   |      Email      | Password
TestUser | test@biogti.com | 1234
Pepe     | pepe@biogti.com | 4321

Para ver los datos introducidos por las pruebas automáticas, inicie con TestUser
Por el contrario, inicie con Pepe

Si quiere crear un nuevo usuario sin modificar uno existente, dirijase a crearMediciones.php y asigne en la línea 24 el id al que pertenece el usuario en la tabla usuarios