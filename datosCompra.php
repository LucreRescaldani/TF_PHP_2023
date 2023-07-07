<?php
//echo "Estamos en la pagina datosCompra.php";
//print_r($_POST);

/* Mostrar la barra de menu */
include("menu.php"); 

//carga los datos del formulario
$nombre = $_POST["nombreInput"];
$apellido = $_POST["apellidoInput"];
$email = $_POST["emailInput"];
$cantidad = $_POST["cantidadInput"];
$categoria = $_POST["categoriaSelect"];

?>
<div class="conteiner py-5"></div>
<!--Mostrar los tipos de tickets -->
<div class="container-fluid w-75 vh-75 p-0 d-flex flex-column justify-content-center">
    <!--Botones -->
    <div class="row">
        <div class="col-md-12 mb-3 d-grid">
            <p class="fs-5 mb-0 p-0 justify-content-center d-flex" style="background-color: #96c93e;" 
            id="ResumenCompra">COMPRA EXITOSA</p>
        </div>
        <div class="col-md-12 mb-3 d-grid">
            <p class="fs-3 mb-0 p-0 justify-content-center d-flex">Emisión de ticket de compra</p>
            <p class="fs-3 mb-0 p-0 justify-content-center d-flex">A favor de la siguiente persona: </p>
        </div>
    </div>
</div>


<?php 

//abre la conexión con la BD
include("conexionBD.php");

$sql = "INSERT INTO compra_tickets VALUES (NULL, '$nombre', '$apellido', '$email', '$cantidad', '$categoria')";
$consulta = mysqli_query($conexion, $sql);
?>
<div class="col-md-12 mb-3 d-grid">
        <p class="fs-3 mb-0 p-0 justify-content-center d-flex">
        <?php
        echo "<tr>
                <td> Sr. o Sra" . $nombre . "</td>
                <td>" . $apellido . "</td>
                <td>" . $cantidad . "</td>
                <td>" . $categoria . "</td>
            </tr>";
        ?>
        </p>
</div>
<?php
//cierra la conexión
mysqli_close($conexion);

// Pie de página o footer
include("footer.php");
?>