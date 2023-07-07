<?php include("menu.php"); ?>

<div class="conteiner py-5"></div>

<main>
    <div class="container col-lg-4 text-center my-3">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Correo</th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Ticket</th>
                </tr>
            </thead>
            <tbody>

            <?php include("conexionBd.php");

            $sql = "SELECT * FROM compra_tickets";
            $consulta = mysqli_query($conexion, $sql);

            if (mysqli_num_rows($consulta) > 0) {
                while ($fila = mysqli_fetch_assoc($consulta)) {
                        echo "<tr>
                        <td>" . $fila["id"] . "</td>
                        <td>" . $fila["nombre"] . "</td>
                        <td>" . $fila["apellido"] . "</td>
                        <td>" . $fila["cantidad"] . "</td>
                        <td>" . $fila["categoria"] . "</td>
                     </tr>";
                    }
               } else {
                    echo "0 results";
            }
            //cierra la conexión
            mysqli_close($conexion); 
            ?>
            </tbody>
        </table>
    </div>
</main>
<!-- Mostrar el pie de página -->
<div class="conteiner py-2"></div>
<?php include("footer.php"); ?>