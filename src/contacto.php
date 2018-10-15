<?php include 'parts/head.php'?>
    <title>Equipos</title>

<?php $page = 'contactenos'; include 'parts/header.php'?>

<section class="header-brend" style="background-image:url('images/banner-equipos.jpg') ">
    <div class="container">
        <h1>Contáctenos</h1>
        <h2>Por favor, envíanos un mensaje y te responderemos en la brevedad posible.</h2>
        <div class="row">
            <div class="col-md-7 col-xs-12">
                <form action="enviar.php" method="post" class="formulario-contacto contact__form"> 
                            <div class="row-input">
                                <label for="nombre">Nombre</label>
                                <input name="name" id="name" placeholder="Nombre" required="" type="text">
                            </div>
                            <div class="row-input">
                                <label for="correo">Correo</label>
                                <input name="email" id="email" placeholder="Correo Electrónico" required="" type="email">
                            </div>
                            <div class="row-input row-input2">
                                <label for="telefono">Telefono</label>
                                <input name="phone" id="phone" placeholder="Telefono" type="text">
                            </div>
                            <div class="row-input row-input2 ">
                                <label for="asunto">Asunto</label>
                                <input name="subject" id="subject" placeholder="Asunto" required="" type="text">
                            </div>
                            <div class="row-input clear">
                                <label for="mensaje">Mensaje</label>
                                <textarea name="message" id="message" cols="30" rows="7" placeholder="Mensaje" required=""></textarea>
                            </div>
                            <button type="submit" class="enviar">Enviar</button>
                            
                            <!-- form message -->
                            <div class="row">
                                    <div class="col-12">
                                        <div style="margin-top:25px; display: none" class="alert alert-success contact__msg" role="alert">
                                            Tu mensaje fue enviado exitosamente.
                                        </div>
                                    </div>
                            </div>
                                <!-- end message -->
                </form>
            </div>
            <div class="col-md-5 col-xs-12 contant-info">
                <h3>Venta de equipos y servicios para restaurantes y hoteles</h3>
                <p>Tecnología Europea y Americana Somos representantes exclusivos de la marca La Cimbali, Faema y Casadio.</p>
                <p>Somos una empresa autorizada para la comercialización de importantes marcas como: Gaggia, Bunn, Brema, Bras, Waring Commercial, Motta Metallurgica.</p>
                
                <ul class="list-info-contact">
                    <li><i class="fa fa-envelope" aria-hidden="true"></i> ventas@sabaequipamientos.com</li>
                    <li class="lista-float"><i style="font-size: 27px;margin-top: 3px;" class="fa fa-map-marker" aria-hidden="true"></i> <span>Av. Petit thouars 4076 <br> San Isidro. Lima - Perú.</span></li>
                    <li class="lista-float"><i style="font-size: 27px;margin-top: 3px;" class="fa fa-phone" aria-hidden="true"></i> <span>Tel. (51)(1) 562 85 40 <br>Cel. 94 7 113 682 / 987 556 821</span></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="map">
</section>
<?php include 'parts/footer.php'?>