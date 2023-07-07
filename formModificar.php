<?php include("menu.php"); ?>
    <div>
        <p>.</p>
        <p>.</p>
        <p>.</p>
    </div>
    <main>
        <div class="container col-lg-4 text-center my-3">
            <?php include("conexionBD.php");

            $id = $_GET["id"];

            echo "<h2>El identificador del Ticket es $id</h2>";
           
            $sql = "SELECT * FROM compra_tickets WHERE id=$id";
            $consulta = mysqli_query($conexion, $sql);
           
            $fila = mysqli_fetch_assoc($consulta);
           
            //print_r($fila);
           
            ?>
            <h2>Modificar el titular o destinatario del Ticket</h2>
            <!-- Formulario -->
            <div class="container">
                <form class="row needs-validation" id="formulario_comprar" method="post" action="modificarCompra.php">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control is-valid" id="nombreInput" name="nombreInput"
                        value="<?php echo $fila["nombre"]?>"  required onChange="validar()">
                        <p class="mb-0 p-1" id="errorNombre" style="color: brown;"></p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control is-valid" id="apellidoInput" name="apellidoInput"
                        value="<?php echo $fila["apellido"]?>" required onChange="validar()">
                        <p class="mb-0 p-1" id="errorApellido" style="color: brown;"></p>
                    </div>
                    <div class="col-mb-3 mb-3">
                        <input type="email" class="form-control is-valid" id="emailInput" name="emailInput"
                        value="<?php echo $fila["email"]?>" required onChange="validar()">
                        <p class="mb-0 p-1" id="errorEmail" style="color: brown;"></p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="mx-1 my-2" class="form-label">Cantidad</label>
                        <input type="number" class="form-control is-valid" id="cantidadInput" name="cantidadInput"
                            min="1" max="29" placeholder="Cantidad" value="<?php echo $fila["cantidad"]?>" required>
                        <p class="pt-1 px-1" id="errorCantidad" style="color: brown;"></p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="mx-1 my-2" class="form-label" placeholder="Categoria" required>Categoria</label>
                        <select class="form-select is-valid" id="categoriaSelect" name="categoriaSelect" value="<?php echo $fila["categoria"]?>">
                            <option selected value="1">Estudiante</option>
                            <option value="2">Trainee</option>
                            <option value="3">Junior</option>
                            <option value="4">Público General</option>
                        </select>
                    </div>
                    <!--Botones -->
                    <div class="col-12 mb-3 d-grid">
                        <button type="submit" class="btn text-dark fs-5 pb-3" style="background-color: #73adeb;">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php include("footer.php"); ?>
