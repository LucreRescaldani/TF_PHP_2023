<?php include("menu.php"); ?>

<!--Carrusel-->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="img/bsas1.jpg" class="img-fluid oscurecer" alt="imagen edificio Obras Sanitarias">
            <!--dejar o no sticky-->
            <div class="container">
                <div class="carousel-caption d-none d-md-block text-end">
                    <h1>Conferencia en Buenos Aires</h1>
                    <p>Llegan por primera vez a Argentina. Un evento para compartir con nuestra
                        comunidad
                        el conocimiento y la experiencia de los expertos que están creando el futuro de
                        Internet. Ven a conocer los miembros del evento, a otros estudiantes de Codo a Codo
                        y a los oradores de primer nivel que tenemos para ti. Te esperamos! </p>
                    <p><a class="btn p-3 mb-2 bg-transparent border-white text-white" href="#seccionContacto">Quiero ser
                            orador</a>
                        <a class="btn p-3 mb-2 bg-success text-white" href="cobrar.php" target="_blank">Comprar
                            tickets</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/bsas2.jpg" class="img-fluid justify-content-between oscurecer" alt="imagen de una embajada">
            <div class="carousel-caption d-none d-md-block text-end">
                <h1>Los disertantes más destacados</h1>
                <p>Llegan por primera vez a Argentina. Un evento para compartir con nuestra
                    comunidad
                    el conocimiento y la experiencia de los expertos que están creando el futuro de
                    Internet. Ven a conocer los miembros del evento, a otros estudiantes de Codo a Codo
                    y a los oradores de primer nivel que tenemos para ti. Te esperamos! </p>
                <p><a class="btn p-3 mb-2 bg-transparent border-white text-white" href="#seccionContacto">Quiero
                        ser
                        orador</a>
                    <a class="btn p-3 mb-2 bg-success text-white" href="cobrar.php" target="_blank">Comprar tickets</a>
                </p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="img/bsas3.jpg" class="img-fluid oscurecer" alt="imagen del obelisco">
            <div class="conteiner">
                <div class="carousel-caption d-none d-md-block text-end">
                    <h1>Reserva ahora tus tickets</h1>
                    <p>Llegan por primera vez a Argentina. Un evento para compartir con nuestra
                        comunidad
                        el conocimiento y la experiencia de los expertos que están creando el futuro de
                        Internet. Ven a conocer los miembros del evento, a otros estudiantes de Codo a Codo
                        y a los oradores de primer nivel que tenemos para ti. Te esperamos! </p>
                    <p><a class="btn p-3 mb-2 bg-transparent border-white text-white" href="#seccionContacto">Quiero ser
                            orador</a>
                        <a class="btn p-3 mb-2 bg-success text-white" href="cobrar.php" target="_blank">Comprar tickets</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>


<!--Sección Oradores-->
<main>
    <a name="seccionOradores"></a>
    <!--Titulo centrado-->
    <div class="container text-center">
        <p class="fs-5 pb-0 mb-0 mt-3">CONOCE A LOS</p>
        <p class="fs-2 lh-sm fw-bold">ORADORES</p>
    </div>
    <!--Tarjetas de Oradores-->
    <div class="container">
        <div class="card-group ">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div> <!--data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">-->
                            <img src="img/steve.jpg" class="card-img-top" alt="img Steve Jobs">
                            <div class="card-body">
                                <span class="badge text-bg-warning">JavaScrips</span>
                                <span class="badge text-bg-info">React</span>
                                <h5 class="card-title">Steve Jobs</h5>
                                <p class="card-text">Steven Paul Jobs ​​​​fue un empresario, diseñador industrial,
                                    magnate
                                    empresarial, propietario de medios e inversor estadounidense. Fue cofundador y
                                    presidente
                                    ejecutivo de Apple​ y máximo accionista individual de The Walt Disney Company.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div> <!--data-aos="flip-right" data-aos-easing="ease-out-cubic" data-aos-duration="3000">-->
                            <img src="img/bill_gates.jpg" class="card-img-top" alt="img Bill Gatess">
                            <div class="card-body">
                                <span class="badge text-bg-warning">JavaScrips</span>
                                <span class="badge text-bg-info">React</span>
                                <h5 class="card-title">Bill Gates</h5>
                                <p class="card-text">William Henry Gates III, más conocido como Bill Gates, es un
                                    magnate
                                    empresarial, desarrollador de software, inversor, autor y filántropo
                                    estadounidense. Es
                                    cofundador de Microsoft, junto con su difunto amigo de la infancia Paul Allen.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div> <!--data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="3000">-->
                            <img src="img/ada.jpeg" class="card-img-top" alt="img Ada Lovelace">
                            <div class="card-body">
                                <span class="badge text-bg-secondary">Negocios</span>
                                <span class="badge text-bg-danger">Startups</span>
                                <h5 class="card-title">Ada Lovelace</h5>
                                <p class="card-text">Augusta Ada King, condesa de Lovelace, registrada al nacer como
                                    Augusta
                                    Ada
                                    Byron y conocida habitualmente como Ada Lovelace, fue una matemática y escritora
                                    británica,
                                    célebre sobre todo por su trabajo acerca de la computadora mecánica de uso
                                    general de
                                    Charles
                                    Babbage, la denominada máquina analítica.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!--Sección Lugar y Fecha -->
<section>
    <a name="seccionLugarFecha"></a>
    <div class="card mt-3">
        <div class="row g-0">
            <div class="col-md-6 d-flex justify-content-between">
                <img src="img/BsAs_4.jpg" class="img-fluid rounded-start" alt="img Puerto Maderos">
            </div>
            <div class="col-md-6 bg-dark overflow-auto">
                <div class="card-body text-justified text-white">
                    <h3 class="card-title p-3">Buenos Aires - 10 Mayo 2023</h3>
                    <p class="card-text">Buenos Aires es la provincia y localidad más grande de Argentina. Buenos
                        Aires es la gran capital cosmopolita de Argentina. Su centro es la Plaza de Mayo, rodeada de
                        imponentes edificios del siglo XIX, incluida la Casa Rosada, el icónico palacio presidencial
                        que tiene varios balcones. Entre otras atracciones importantes, se incluyen el Teatro Colón,
                        un lujoso teatro de ópera de 1908 con cerca de 2,500 asientos, y el moderno museo MALBA, que
                        exhibe arte latinoamericano.</p>
                    <p><a class="btn p-3 mb-2 bg-transparent border-white text-white" href="https://turismo.buenosaires.gob.ar/es/que-hacer-en-la-ciudad" target="_blank">Cónoce más</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!--Sección Contacto-->
<section>
    <a name="seccionContacto"></a>
    <!-- Titulo centrado -->
    <div class="container text-center">
        <p class="fs-5 pb-0 mb-0 mt-3">CONVIÉRTETE EN UN</p>
        <p class="fs-2 lh-sm fw-bold">ORADOR</p>
        <p class="fs-5 mt-5">Anótate como orador para dar una <span class="subrayado_con_puntos">charla
                ignite.</span> Cuéntanos de qué quieres hablar!</p>
    </div>
    <!-- Formulario -->
    <div class="container">
        <form class="row" name="formulario" id="formulario">
            <div class="col-md-6 mb-3">
                <input id="nombreInput" name="nombreInput" type="text" class="form-control" placeholder="Nombre: Lucrecia" required>
            </div>
            <div class="col-md-6 mb-3">
                <input id="apellidoInput" name="apellidoInput" type="text" class="form-control" placeholder="Apellido: RESCALDANI" required>
            </div>
            <div class="col-mb-3">
                <textarea id="hablarInput" name="hablarInput" class="form-control" rows="3" placeholder="¿Sobre qué quieres hablar?" required></textarea>
            </div>
            <div>
                <p class="fs-7 mx-0 my-2">Recuerda incluir un título para tu charla</p>
            </div>
            <!--Botón-->
            <div class="d-grid">
                <button id="registrar" class="btn text-dark fs-5 pb-3" style="background-color: #96c93e;" type="submit">Regístrame como orador</button>
            </div>
        </form>
    </div>
</section>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<!-- Mostrar el pie de página -->
<?php include("footer.php"); ?>