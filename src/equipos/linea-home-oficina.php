<?php include '../parts/head2.php'?>
    <title>Linea Profesional | Saba Equipamientos</title>

<?php $page = ''; include '../parts/header2.php'?>

<section class="header-brend" style="background-image:url('../images/home_oficce_banner.jpg') ">
    <div class="container">
        <h1>LÍNEA HOME & OFFICE</h1>
        <h2>VERSATILIDAD - COMODIDAD - EXPERIENCIA</h2>
        <p>Equipos súper automáticos, versátil para todos los ambientes, diseño compacto con <br class="hide">
            tecnología innovadora, de uso sencillos y sin complicaciones.</p>
    </div>
</section>
<section class="bredcrumb">
    <div class="container">
        <ul class="list-bredcrumb">
            <li>Inicio</li>
            <li>/</li>
            <li>Equipos</li>
            <li>/</li>
            <li>Accesorios - Repuestos</li>
        </ul>
    </div>
</section>

<section class="servicios-product">
    <div class="container">
        <nav class="tob02">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="gaggia-tab" data-toggle="tab" href="#gaggia" role="tab" aria-controls="gaggia" aria-selected="true">GAGGIA</a>
                <a class="nav-item nav-link" id="roket-tab" data-toggle="tab" href="#roket" role="tab" aria-controls="roket" aria-selected="false">ROKET</a>
                <a class="nav-item nav-link" id="saeco-tab" data-toggle="tab" href="#saeco" role="tab" aria-controls="saeco" aria-selected="false">SAECO</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="gaggia" role="tabpanel" aria-labelledby="gaggia-tab">
                <?php include 'parts/gaggia.php'?>
            </div>
            <div class="tab-pane fade" id="roket" role="tabpanel" aria-labelledby="roket-tab">
                 <?php include 'parts/roket.php'?>
            </div>
            <div class="tab-pane fade" id="saeco" role="tabpanel" aria-labelledby="saeco-tab">
                <?php include 'parts/saeco.php'?>
            </div>
        </div>
    </div>
</section>
<?php include '../parts/footer2.php'?>