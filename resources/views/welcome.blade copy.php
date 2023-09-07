<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
         <link rel="stylesheet" href="{{asset('css/estilo.css')}}">

        <title>Pruebas SABERPRO</title>

        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    </head>

    <body class="antialiased">
        <header>
            <h1>PRUEBAS ICFES</h1>
            <nav>
                <ul>
                   <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
                        @if (Route::has('login'))
                            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                                @auth
                                    <a href="{{ url('/home') }}" class="btn-comprar">Home</a>
                                @else
                                    <a href="{{ route('login') }}" class="btn-comprar">Iniciar sesion</a>
                                @endauth
                            </div>
                        @endif
                    </div>
                </ul>
            </nav>
            <div class="nav-bar" id="nav-bar"><i class="fa-solid fa-bars"></i></div>
        </header>

        <section id="inicio">
            <div class="contenido">
                <div class="info">
                <h3>UPC</h3>
                    <span>Por un mejor futuro</span>
                    <div class="redes">
                        <a href="https://www.unicesar.edu.co/index.php/es/" target="_blank"><i class="fa-solid fa-house"></i></a>
                        <a href="https://web.facebook.com/p/Unicesar-Oficial-100088690585174/" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://twitter.com/unicesarupc" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.instagram.com/unipopularcesar/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>


            <div class="contenedor-img">
                <div class="imagen">
                    <img src="imagenes/welcome.jpg">
                </div>
            </div>
        </section>

        <script>
            let nav_var = document.getElementById("nav-bar");
            let menu_responsive = "oculto";

            nav_var.onclick = function() {
                if (menu_responsive == "oculto") {
                    document.querySelector("nav").className = "active";
                    menu_responsive = "visible"
                } else {
                    document.querySelector("nav").className = "";
                    menu_responsive = "oculto";
                }
            }
        </script>
    </body>
</html>
