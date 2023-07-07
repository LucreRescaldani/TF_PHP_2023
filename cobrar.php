<?php 
/* Mostrar la barra de menu */
include("menu.php"); ?>
<div class="conteiner py-5"></div>
<!--Mostrar los tipos de tickets -->
<div class="container-fluid w-75 vh-75 p-0 d-flex flex-column justify-content-center">
        <!--Sección Tipos de Tickets-->
        <section name="seccionTipoTickets">
            <!--Tarjetas de Tickets-->
            <div class="container w-75 vh-75 d-flex justify-content-center">
                <div class="card-group">
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <div class="card border border-primary">
                                <p class="card-title fs-3 fw-bold text-center mt-5">Estudiante</p>
                                <div class="card-body">
                                    <p class="card-title fs-6 text-center mb-3">Tiene un descuento</p>
                                    <p class="card-text fs-4 fw-bold text-center">80%</p>
                                    <p class="card-title fs-7 text-center mb-3 mt-3">Presentar documentación</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border border-success">
                                <p class="card-title fs-3 fw-bold text-center mt-5">Trainee</p>
                                <div class="card-body">
                                    <p class="card-title fs-6 text-center mb-3">Tiene un descuento</p>
                                    <p class="card-text fs-4 fw-bold text-center">50%</p>
                                    <p class="card-title fs-7 text-center mb-3 mt-3">Presentar documentación</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card border border-warning">
                                <p class="card-title fs-3 fw-bold text-center mt-5">Junior</p>
                                <div class="card-body">
                                    <p class="card-title fs-6 text-center mb-3">Tiene un descuento</p>
                                    <p class="card-text fs-4 fw-bold text-center">15%</p>
                                    <p class="card-title fs-7 text-center mb-3 mt-3">Presentar documentación</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Sección Compra de tickets-->
        <main>
            <a name="seccionComprar"></a>
            <!--Titulo centrado-->
            <div class="container text-center">
                <p class="fs-5 pb-0 mb-0 mt-3">VENTA</p>
                <p class="fs-2 lh-sm fw-bold mb-3">VALOR DE TICKET $200</p>
            </div>

            <!-- Formulario -->
            <div class="container">
                <form class="row needs-validation" id="formulario_comprar" method="post" action="datosCompra.php">
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control is-valid" id="nombreInput" name="nombreInput"
                            placeholder="Nombre: " required onChange="validar()">
                        <p class="mb-0 p-1" id="errorNombre" style="color: brown;"></p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control is-valid" id="apellidoInput" name="apellidoInput"
                            placeholder="Apellido: " required onChange="validar()">
                        <p class="mb-0 p-1" id="errorApellido" style="color: brown;"></p>
                    </div>
                    <div class="col-mb-3 mb-3">
                        <input type="email" class="form-control is-valid" id="emailInput" name="emailInput"
                            placeholder="Correo" required onChange="validar()">
                        <p class="mb-0 p-1" id="errorEmail" style="color: brown;"></p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="mx-1 my-2" class="form-label">Cantidad</label>
                        <input type="number" class="form-control is-valid" id="cantidadInput" name="cantidadInput"
                            min="1" max="29" placeholder="Cantidad" required>
                        <p class="pt-1 px-1" id="errorCantidad" style="color: brown;"></p>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="mx-1 my-2" class="form-label" placeholder="Categoria" required>Categoria</label>
                        <select class="form-select is-valid" id="categoriaSelect" name="categoriaSelect">
                            <option selected value="1">Estudiante</option>
                            <option value="2">Trainee</option>
                            <option value="3">Junior</option>
                            <option value="4">Público General</option>
                        </select>
                    </div>
                    <div class="col">
                        <p id="totalCompra" class="fs-5 mb-3 p-2 alert-primary" style="background-color: #73adeb" >
                            Total a Pagar: $
                        </p>
                        <!--Botones -->
                        <div class="row">
                            <div class="col-md-12 mb-3 d-grid">
                                <p class="fs-5 mb-0 p-0 justify-content-center d-flex"
                                    style="background-color: #96c93e;" id="ResumenCompra" ></p>
                            </div>
                            <div class="col-md-4 mb-3 d-grid">
                                <button type="reset" class="btn text-dark fs-5 pb-3" id="borrar" value="borrar"
                                    style="background-color: #96c93e;">Borrar</button>
                            </div>
                            <div class="col-md-4 mb-3 d-grid">
                                <button id="enviar" type="button" value="Enviar" name="enviar" onclick="desactivarBoton()"
                                    class="btn text-dark fs-5 pb-3" style="background-color: #96c93e;">Resumen
                                </button>
                            </div>
                            <div class="col-md-4 mb-3 d-grid">
                                <button id="comprar" type="sumit" value="Comprar" name="comprar" 
                                    class="btn text-dark fs-5 pb-3" style="background-color: #73adeb;">Comprar
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </main>
    </div>
<!-- Pie de página o footer-->
<?php include("footer.php"); ?>