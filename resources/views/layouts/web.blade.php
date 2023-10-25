<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Portfolio personal de Sandra Saenz">
    <meta name="author" content="Sandra-Saenz">
    <title>PORTFOLIO SANDRA SAENZ</title>
    <!-- font icons -->
    <link rel="stylesheet" href="template/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + JohnDoe main styles -->
    <link rel="stylesheet" href="template/css/johndoe.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <!-- header -->
    <header class="header">
        <div class="container">
            <ul class="social-icons pt-3">
                <li class="social-item"><a class="social-link text-light" href="https://sandra-saenz.github.io/portfolio/"><i class="ti-world" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="sandrasaenzsuarez@gmail.com"><i class="ti-google" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="https://www.linkedin.com/in/sandra-paola-saenz-suarez"><i class="ti-linkedin" aria-hidden="true"></i></a></li>
                <li class="social-item"><a class="social-link text-light" href="https://github.com/Sandra-Saenz"><i class="ti-github" aria-hidden="true"></i></a></li>
            </ul>
            <div class="header-content">
                <h4 class="header-subtitle">Hola, soy</h4>
                <h1 class="header-title">Sandra Saenz</h1>
                <h6 class="header-mono">Desarrolladora Backend Junior</h6>
                <button class="btn btn-primary btn-rounded"><i class="ti-printer pr-2"></i>Imprimir CV</button>
            </div>
        </div>
    </header>

    <!-- barra de navegacion -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white" data-spy="affix" data-offset-top="510">
        <div class="container">
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse mt-sm-20 navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#home" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">Sobre mi</a>
                    </li>
                    <li class="nav-item">
                        <a href="#resume" class="nav-link">Mi curriculum</a>
                    </li>
                </ul>
                <ul class="navbar-nav brand">
                    <img src="/template/imgs/avatar.jpg" alt="" class="brand-img">
                    <li class="brand-txt">
                        <h5 class="brand-title">Sandra Saenz</h5>
                        <div class="brand-subtitle">Desarrolladora Backend Junior</div>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#portfolio" class="nav-link">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blog" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item last-item">
                        <a href="#contact" class="nav-link">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- footer -->
    <footer class="footer py-3">
        <div class="container">
            <p class="small mb-0 text-light">
                &copy; <script>
                    document.write(new Date().getFullYear())
                </script> Created With <i class="ti-heart text-danger"></i> By <a href="http://devcrud.com" target="_blank"><span class="text-danger" title="Bootstrap 4 Themes and Dashboards">DevCRUD</span></a>
            </p>
        </div>
    </footer>

    <!-- core  -->
    <script src="template/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="template/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="template/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope  -->
    <script src="template/vendors/isotope/isotope.pkgd.js"></script>

    <!-- Google mpas -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- JohnDoe js -->
    <script src="template/js/johndoe.js"></script>

</body>
</html>