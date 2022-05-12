
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
        <link rel="stylesheet" href="../css/icon.css">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/auth.css">
        <title>Hello, world!</title>
    </head>
    <body>
        <header>
            <div class="bg-header">
                <nav class="header navbar fixed-top navbar-expand-lg navbar-dark">
                    <div class="container">
                        <a class="navbar-brand d-flex align-items-center" href="#">
                            <img src="img/logo.png" alt="" width="40" class="img-fluid mr-2">
                            IT-ESEGA
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Competition</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Schedule</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn btn-costume btn-danger rounded px-3 btn-registration" href="#">Registration</a>
                                </li>
                            </ul>
                        </div> --}}
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <section>
                <div class="bg-auth">
                    <div class="container">
                        <div class="auth pb-5">
                            <div class="row d-flex align-items-center">
                                <div class="col-12 col-lg-6">
                                    <div class="auth-card">
                                        <div class="text-container text-light text-center">
                                            <h1 class="mb-3">LOGIN</h1>
                                        </div>
                                        <div class="contact-form">
                                             @if(count($errors) > 0)
                                            @foreach($errors->all() as $error)
                                                <div class="alert alert-warning">{{ $error }}</div>
                                            @endforeach
                                            @endif
                                            @if ($message = Session::get('error'))
                                                <div class="alert alert-warning">
                                                    <p>{{ $message }}</p>
                                                </div>
                                            @endif
                                            @if ($message = Session::get('success'))
                                                <div class="alert alert-success">
                                                    <p>{{ $message }}</p>
                                                </div>
                                            @endif
                                            <form class="text-light" method="POST" action="{{ route('actionlogin') }}">
                                                @csrf
                                                <div class="form-group">
                                                    <input type="email" class="form-control costume-form" id="email" name="email" placeholder="Your Email ...">
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control costume-form" id="password" name="password" placeholder="Your Password ...">
                                                </div>
                                                <div class="form-group text-center">
                                                    <input type="submit" value="Login" class="btn btn-costume btn-danger">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="image-container">
                                        <img src="../img/grangger.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="bg-footer">
                <div class="container">
                    <div class="footer pt-5">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="image-container">
                                    <img src="../img/logo.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="text-container text-light">
                                    <h3>IT-ESEGA</h3>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse assumenda quae architecto quisquam quaerat! Ex error sapiente amet cum consectetur. Possimus officia odio commodi rerum harum? Maiores magni beatae nemo.</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="text-container text-light">
                                    <h3>INFORMATION</h3>
                                    <p>
                                        <a href="#" class="fa fa-facebook"></a>
                                        <a href="#" class="fa fa-twitter"></a>
                                        <a href="#" class="fa fa-google"></a>
                                        <a href="#" class="fa fa-linkedin"></a>
                                        <a href="#" class="fa fa-youtube"></a>
                                        <a href="#" class="fa fa-instagram"></a>
                                        <a href="#" class="fa fa-pinterest"></a>
                                        <a href="#" class="fa fa-snapchat-ghost"></a>
                                        <a href="#" class="fa fa-skype"></a>
                                        <a href="#" class="fa fa-android"></a>
                                        <a href="#" class="fa fa-dribbble"></a>
                                        <a href="#" class="fa fa-vimeo"></a>
                                        <a href="#" class="fa fa-tumblr"></a>
                                        <a href="#" class="fa fa-vine"></a>
                                        <a href="#" class="fa fa-foursquare"></a>
                                        <a href="#" class="fa fa-stumbleupon"></a>
                                        <a href="#" class="fa fa-flickr"></a>
                                        <a href="#" class="fa fa-yahoo"></a>
                                        <a href="#" class="fa fa-reddit"></a>
                                        <a href="#" class="fa fa-rss"></a>
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
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                var gallerySplide = new Splide('#gallerySlider', {
                    type: 'loop',
                    perPage: 3
                });
                var sponsorSplide = new Splide('#sponsorSlider', {
                    type: 'loop',
                    autoplay: true,
                    perPage: 3,
                    interval: 2000,
                    arrows: false,
                    pagination: false
                });
                gallerySplide.mount();
                sponsorSplide.mount();
            });
        </script>
    </body>
</html>




