<?php
$servidor = "localhost"; 
$usuario = "root"; 
$clave = ""; 

//conectar con el servidor 
$conexion = mysqli_connect($servidor, $usuario, $clave); 


//cierra la conexión
//mysqli_close($conexion);


$baseDatos = "tickets"; 
//seleccionar la base de datos 
mysqli_select_db($conexion, $baseDatos);

?>