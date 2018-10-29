<?php include '../parts/head2.php'?>
    <title>Linea Profesional | Saba Equipamientos</title>

<?php $page = ''; include '../parts/header2.php'?>

<section class="header-brend" style="background-image:url('../images/banner-linea-comercial.jpg') ">
    <div class="container">
        <h1>LÍNEA COMERCIAL</h1>
        <h2>TECNOLOGÍA - DURABILIDAD - INNOVACIÓN</h2>
        <p>Disponemos de los mejores productos gracias a su diseño de alta resistencia,<br class="hide">
            capacidad y demanda para tu negocio.</p>
    </div>
</section>
<section class="bredcrumb">
    <div class="container">
        <ul class="list-bredcrumb">
            <li>Inicio</li>
            <li>/</li>
            <li>Equipos</li>
            <li>/</li>
            <li>Línea Comercial</li>
        </ul>
    </div>
</section>

<section class="servicios-product">
    <div class="container">
        <nav class="tob02">
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="la-cimbali-tab" data-toggle="tab" href="#la-cimbali" role="tab" aria-controls="la-cimbali" aria-selected="true">LA CIMBALI</a>
                <a class="nav-item nav-link" id="brema-tab" data-toggle="tab" href="#brema" role="tab" aria-controls="brema" aria-selected="false">BREMA</a>
                <a class="nav-item nav-link" id="waring-tab" data-toggle="tab" href="#waring" role="tab" aria-controls="waring" aria-selected="false">WARING</a>
                <a class="nav-item nav-link" id="bras-tab" data-toggle="tab" href="#bras" role="tab" aria-controls="bras" aria-selected="false">BRAS</a>
                <a class="nav-item nav-link" id="bunn-tab" data-toggle="tab" href="#bunn" role="tab" aria-controls="bunn" aria-selected="false">BUNN</a>
            </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="la-cimbali" role="tabpanel" aria-labelledby="la-cimbali-tab">
                <?php include 'parts/cimbali2.php'?>
            </div>
            <div class="tab-pane fade" id="brema" role="tabpanel" aria-labelledby="brema-tab">
                 brema
            </div>
            <div class="tab-pane fade" id="waring" role="tabpanel" aria-labelledby="waring-tab">
                waring
            </div>
            <div class="tab-pane fade" id="bras" role="tabpanel" aria-labelledby="bras-tab">
                bras
            </div>
            <div class="tab-pane fade" id="bunn" role="tabpanel" aria-labelledby="bunn-tab">
                bunn
            </div>
        </div>
    </div>
</section>
<?php include '../parts/footer2.php'?>