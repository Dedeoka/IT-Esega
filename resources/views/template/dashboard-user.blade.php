<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta
        name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bungee&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bungee&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.1/dist/css/splide.min.css">
        <link rel="stylesheet" href="../css/mouse_scroll.css">
        <link rel="stylesheet" href="{{asset('css/icon.css')}}">
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
        <link rel="icon" href="{{asset('img/logo.png')}}"/>
        <title>IT-ESEGA</title>
    </head>
    <body>
        <header>
            <div class="bg-header">
                <nav class="header navbar fixed-top navbar-expand-lg navbar-dark">
                    <div class="container-fluid">
                        <a class="navbar-brand d-flex align-items-center" href="#">
                            <img src="../../img/logo.png" alt="" width="40" class="img-fluid mr-2">
                            IT-ESEGA
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item d-block d-md-none">
                                    <a class="nav-link" href="{{ route('valo') }}">Valorant</a>
                                </li>
                                <li class="nav-item d-block d-md-none">
                                    <a class="nav-link" href="{{ route('mole') }}">Mobile</a>
                                </li>
                                <li class="nav-item d-block d-md-none">
                                    <a class="nav-link" href="{{ route('home') }}">Information</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-costume btn-danger rounded px-3 btn-registration" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    <section class="col-md-2 p-0">
                        <div class="bg-sidebar h-100">
                            <nav class="d-none d-md-block bg-light sidebar h-100">
                                <div class="sidebar-sticky">
                                    <ul class="nav flex-column">
                                        @if (Request::is('valo*'))
                                        <li class="nav-item">
                                            <a class="nav-link active" href="{{ route('valo') }}">
                                                <span data-feather="home"></span>
                                                Valorant
                                                <span class="sr-only">(current)</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('mole') }}">
                                                <span data-feather="file"></span>
                                                Mobile Legend
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('home') }}">
                                                <span data-feather="file"></span>
                                                Information
                                            </a>
                                        </li>
                                        @elseif (Request::is('notif*'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('valo') }}">
                                                <span data-feather="home"></span>
                                                Valorant
                                                <span class="sr-only">(current)</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('mole') }}">
                                                <span data-feather="file"></span>
                                                Mobile Legend
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="{{ route('home') }}">
                                                <span data-feather="file"></span>
                                                Information
                                            </a>
                                        </li>
                                        @elseif (Request::is('home*'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('valo') }}">
                                                <span data-feather="home"></span>
                                                Valorant
                                                <span class="sr-only">(current)</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('mole') }}">
                                                <span data-feather="file"></span>
                                                Mobile Legend
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="{{ route('home') }}">
                                                <span data-feather="file"></span>
                                                Information
                                            </a>
                                        </li>
                                        @else
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('valo') }}">
                                                <span data-feather="home"></span>
                                                Valorant
                                                <span class="sr-only">(current)</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" href="{{ route('mole') }}">
                                                <span data-feather="file"></span>
                                                Mobile Legend
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('home') }}">
                                                <span data-feather="file"></span>
                                                Information
                                            </a>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </nav>
                        </div>
                    </section>
                    @yield('content')
                </div>
            </div>
        </main>
        <footer>
            <div class="bg-footer">
                <div class="container-fluid">
                    <div class="footer pt-5">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="image-container text-center">
                                    <img src="../../img/logo.png" alt="" class="img-fluid" width="300">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="text-container text-light">
                                    <h3>IT-ESEGA</h3>
                                    <p>IT-ESEGA atau Information Technology Sport Based On Excellent Games adalah sebuah kontes esports tahunan yang diselenggarakan oleh mahasiswa program studi Teknologi Informasi Universitas Udayana yang sudah terselenggara dengan sukses dari tahun ke tahun.</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="text-container text-light">
                                    <h3>INFORMATION</h3>
                                    <p>
                                        <a href="https://www.facebook.com/ITESEGA/" class="fa fa-facebook"></a>
                                        <a href="https://www.youtube.com/channel/UCSs7YHsjEP6BIQfY-Fq7f7w" class="fa fa-youtube"></a>
                                        <a href="https://www.instagram.com/it_esega/" class="fa fa-instagram"></a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="text-container text-light text-center py-3">
                                    copyright 2022
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.1/dist/js/splide.min.js"></script>

        @include('sweetalert::alert')
    </body>
</html>
