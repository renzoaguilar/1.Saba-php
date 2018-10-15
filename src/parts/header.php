</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand logo-saba" href="#"><img src="images/logo-saba.svg" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item <?php if($page == 'nosotros'){echo 'active';} ?>">
                            <a class="nav-link" href="nosotros.php">Equipos</a>
                        </li>
                        <li class="nav-item <?php if($page == 'productos'){echo 'active';} ?>">
                            <a class="nav-link" href="equipos.php">Equipos</a>
                        </li>
                        <li class="nav-item <?php if($page == 'servicios'){echo 'active';} ?>">
                            <a class="nav-link" href="#">Servicios</a>
                        </li>
                        <li class="nav-item <?php if($page == 'contactenos'){echo 'active';}; ?>">
                            <a class="nav-link" href="contacto.php">Contáctenos</a>
                        </li>
                    </ul>
                    <div>
                        <ul class="list-social">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>