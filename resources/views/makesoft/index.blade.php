<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/fontawesome.min.css"
          integrity="sha512-UuQ/zJlbMVAw/UU8vVBhnI4op+/tFOpQZVT+FormmIEhRSCnJWyHiBbEVgM4Uztsht41f3FzVWgLuwzUqOObKw=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/brands.min.css"
          integrity="sha512-DJLNx+VLY4aEiEQFjiawXaiceujj5GA7lIY8CHCIGQCBPfsEG0nGz1edb4Jvw1LR7q031zS5PpPqFuPA8ihlRA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/solid.min.css"
          integrity="sha512-Hp+WwK4QdKZk9/W0ViDvLunYjFrGJmNDt6sCflZNkjgvNq9mY+0tMbd6tWMiAlcf1OQyqL4gn2rYp7UsfssZPA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous">
    </script>
    <title>@yield('title')</title>

    <style>
        .top15px {
            margin-top: 15px;
        }

        .hoverYellow:hover {
            color: #5e360b !important;
        }

        .icone {
            height: 200px;
        }

        .colorWhite {
            color: #dcdcdc;
        }

        .colorBlack {
            color: black;
        }

        .colorGray {
            color: gray;
        }

        .colorBrown {
            color: brown;
        }

        .colorRed {
            color: red;
        }

        .colorOrange {
            color: orange;
        }

        .colorGreen {
            color: #00ff00;
        }

        .colorYellow {
            color: yellow;
        }

        .colorBluyTiffany {
            color: #0abab5;
        }

        .colorBlue {
            color: #0d214f;
        }

        .colorPurple {
            color: #800080;
        }

        .colorPink {
            color: #FF1D8E;
        }
    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{ route('welcome') }}"><img src="{{ asset('img') }}" alt="Logo"
                                                                   style="width:40px"
                                              class="d-inline-block align-text-top"> MakeSoft - Solutions</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('welcome') }}"><i class="fa-solid fa-house"></i>Página
                        Inicial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('quemsomos') }}"><i class="fa-solid fa-user"></i> Quem Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('makesoft.pix', 'original') }}"><i
                            class="fa-solid fa-qrcode"></i>
                        Chave Pix</a>
                </li>
            </ul>
            <!-- <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
          </form> -->
        </div>
    </div>
</nav>
<div style="height: 3px; background-color: #5e360b;"></div>

<div class="container-fluid">
    <div class="row">
        <div class="ocultar sidebar border border-right col-md-0 col-lg-2 p-0 bg-body-tertiary">
            <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu"
                 aria-labelledby="sidebarMenuLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="sidebarMenuLabel">Company name</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu"
                            aria-label="Close"></button>
                </div>
                <!-- Opçoes Menu Lateral -->
                <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">

                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link d-flex align-items-center gap-2"
                                                href="{{ route('welcome') }}"><i class="fa-solid fa-book"></i> Catálogo</a>
                        </li>
                        <li class="nav-item"><a class="nav-link d-flex align-items-center gap-2"
                                                href="{{ route('makesoft.pix', 'original') }}"><i
                                    class="fa-solid fa-qrcode"></i> Chave Pix</a></li>
                        <hr class="my-3">
                    </ul>

                    <ul class="nav flex-column mb-auto">
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2"
                               href="https://www.instagram.com/MakeSoft_Solutions_" target="_blank">
                                <i class="fa-brands fa-instagram"></i> @makesoftsolutions
                            </a>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="?a=cartaoCNPJ.php"><i class="fas fa-users"></i>
                                Cartão CNPJ</a></li>
                        <li class="nav-item">
                            <a class="nav-link d-flex align-items-center gap-2"
                               href="https://api.whatsapp.com/send/?phone=5537991154972" target="_blank">
                                <i class="fa-brands fa-whatsapp"></i> (37) 99115-4972
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Painel Inicial -->
        <div class="col-lg-10 col-md-12">
            <div class="container">
                <div style="margin-bottom: 10px;">
                    <div class="row">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
        <div style="height: 5px; background-color: #5e360b;"></div>
        <!-- Rodape -->
        <div class="col-lg-12 col-md-12">
            <footer class="py-3 my-4">
                <ul class="nav justify-content-center border-bottom pb-3 mb-3">
                    <!-- <li class="nav-item"><a href="#" class="hoverYellow nav-link px-2 text-body-secondary">
                        <i class="fa-solid fa-house"></i> Página Inicial</a>
                    </li>
                    <li class="nav-item"><a href="#" class="hoverYellow nav-link px-2 text-body-secondary">
                        <i class="fa-solid fa-user"></i> Quem Somos</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="hoverYellow nav-link px-2 text-body-secondary">
                        <i class="fa-solid fa-book"></i> Catálogo
                      </a>
                    </li> -->
                    <li class="nav-item"><a class="hoverYellow nav-link px-2 text-body-secondary"
                                            href="{{ route('makesoft.pix', 'original') }}"><i
                                class="fa-solid fa-qrcode"></i> Chave Pix</a></li>

                    <li class="nav-item">
                        <a class="hoverYellow nav-link px-2 text-body-secondary"
                           href="https://www.instagram.com/makesoft_solutions_" target="_blank">
                            <i class="fa-brands fa-instagram"></i> @makesoft_solutions_
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="hoverYellow nav-link px-2 text-body-secondary"
                           href="https://api.whatsapp.com/send/?phone=5537991154972" target="_blank">
                            <i class="fa-brands fa-whatsapp"></i> (37) 99115-4972
                        </a>
                    </li>
                </ul>
                <p class="text-center text-body-secondary">© 2024 MakeSoft Solutions, Inc</p>
                <p class="text-center text-body-secondary"><i class="fas fa-users"></i> CNPJ 53.471.409/0001-52</p>
            </footer>
        </div>
    </div>
</div>
</body>
</html>
