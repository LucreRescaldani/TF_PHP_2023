<?php

print_r($_POST);

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$email = $_POST["email"];
$cantidad = $_POST["cantidad"];
$categoria = $_POST["categoria"];


include("conexionBD.php");

//$sql = "SELECT * FROM compra_tickets";
//ejecutar la consulta
try {
    $sql = "UPDATE compra_tickets SET nombre='$nombre', apellido='$apellido', email='$email', cantidad='$cantidad', categoria='$categoria'
    WHERE id='$id'";
    $consulta = mysqli_query($conexion, $sql);
    echo "<p>Los datos se modificaron correctamente</p>";
} catch (Exception $th) {
    echo "<p>Error de consulta</p>";
}
//cierra la conexión
mysqli_close($conexion);

// muestra un vínculo a la Adminitración de tickets
echo "<h2 text-color:green><a href=\"tickets.php\">Ir a Administración de Tickets vendidos</a></h2>";
?>
//Esta es otra opción para mostrar el vínculo a la Administración de tickets
<h2><a href="tickets.php">Ver Tickets</a></h2>



