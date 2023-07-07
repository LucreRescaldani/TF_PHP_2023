<?php

$id = $_GET["id"];
echo "El id es $id";

include("conexionBD.php");

try {
    $sql = "DELETE FROM compra_tickets WHERE id='$id'";
    $consulta = mysqli_query($conexion, $sql);
    echo "<p>Los datos se eliminaron correctamente</p>";
} catch (Exception $th) {
    echo "<p>Error de consulta</p>";
    exit();
}

echo "<a href=\"tickets.php\">Ver Tickets</a>";

