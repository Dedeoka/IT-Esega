
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
        <link rel="stylesheet" href="css/mouse_scroll.css">
        <link rel="stylesheet" href="css/icon.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="{{ asset('img/logo.png') }}"/>
        <title>IT-ESEGA</title>
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

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/#') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/#about') }}">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/#comp') }}">Competition</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/#sche') }}">Schedule</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/#faq') }}">FAQ</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ url('/#cont') }}">Contact Us</a>
                                </li>
                                <li class="nav-item">
                                @guest
                                    <a class="nav-link btn btn-costume btn-danger rounded px-3 btn-registration" href="{{ route('register') }}">Registration</a>
                                @else
                                    <li class="nav-item">
                                         <a class="nav-link btn btn-costume btn-danger rounded px-3 btn-registration" href="{{ route('home') }}">Home</a>
                                    </li>
                                @endguest
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <main>
            <section>
                <div class="bg-hero">
                    <div class="container">
                        <div class="hero">
                            <div class="row d-flex align-items-center">
                                <div class="col-12 col-lg-6">
                                    <div class="text-container text-light text-center">
                                        <h1 class="mb-3">IT-ESEGA 2022</h1>
                                        <p> IT-ESEGA atau Information Technology Sport Based On Excellent Games adalah sebuah kontes esports tahunan yang diselenggarakan oleh mahasiswa program studi Teknologi Informasi Universitas Udayana yang sudah terselenggara dengan sukses dari tahun ke tahun.</p>
                                        <div class="mouse_scroll">
                                            <div class="mouse">
                                                <div class="wheel"></div>
                                            </div>
                                            <div>
                                                <span class="m_scroll_arrows unu"></span>
                                                <span class="m_scroll_arrows doi"></span>
                                                <span class="m_scroll_arrows trei"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="image-container">
                                        <img src="img/hero.png" alt="" class="img-fluid">
                                        <img src="img/korea-it-esega.png" alt="" class="img-fluid hangul">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fuild">
                        <div class="after-hero">
                            <div class="image-container">
                                <img src="img/wave-1.png" alt="" class="img-fluid w-100 h-100 object-fit-fill">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="about">
                <div class="bg-about">
                    <div class="container">
                        <div class="about">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-container text-light mb-5">
                                        <h2>About Us</h2>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="about-cards">
                                        <div class="row d-flex align-items-center">
                                            <div class="col-12 col-lg-6">
                                                <div class="image-container text-center my-3">
                                                    <iframe style="width: 100%; height: 300px;" src="https://www.youtube.com/embed/cL0WKd7rRzI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscree></iframe>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-6">
                                                <div class="text-container text-light border rounded p-2">
                                                    <p>IT-ESEGA atau Information Technology Sport Based On Excellent Games adalah sebuah kontes esports tahunan yang diselenggarakan oleh mahasiswa program studi Teknologi Informasi Universitas Udayana yang sudah terselenggara dengan sukses dari tahun ke tahun.
                                                        Dengan mengusung tema “STARGAZING GREAT CHAMPION's SOUL” , kini IT-ESEGA hadir dengan dua cabang perlombaan yaitu Valorant dan Mobile Legends.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="img-container">
                                        <img src="img/korea-about-us.png" alt="" class="img-fluid hangul">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="comp">
                <div class="bg-competition">
                    <div class="container">
                        <div class="competition">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-container text-light mb-5">
                                        <h2>Competition</h2>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="game-cards">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="image-container text-center h-100">
                                                    <img src="img/logo-ml.png" alt="" class="img-fluid w-50">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="row d-flex align-items-center h-100 w-100">
                                                    <div class="text-container text-light mx-3 w-100">
                                                        <h3>Mobile Legend</h3>
                                                        <p>Mobile legend adalah game multiplayer bergenre MOBA yang dibuat untuk platform mobile. Game ini dimainkan oleh dua tim yang akan saling bertarung dengan komposisi 5 vs 5 untuk memperoleh kemenangan.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="game-cards">
                                        <div class="row">
                                            <div class="col-12 col-md-6">
                                                <div class="image-container text-center h-100">
                                                    <img src="img/logo-valo.png" alt="" class="img-fluid w-50">
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="row d-flex align-items-center h-100 w-100">
                                                    <div class="text-container text-light mx-3 w-100">
                                                        <h3>Valorant</h3>
                                                        <p>Valorant merupakan game FPS (First Person Shooter) yang saat ini sangat diminati di kalangan gamers di seluruh dunia. Valorant adalah game yang memiliki konsep permainan tim (team based games) yang dimana setiap Agent di dalam game Valorant memiliki skill-skill khusus yang membuat game ini semakin seru.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="img-container">
                                        <img src="img/korea-lets-fight.png" alt="" class="img-fluid hangul">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fuild">
                        <div class="after-competition">
                            <div class="image-container">
                                <img src="img/wave-2.png" alt="" class="img-fluid w-100 h-100 object-fit-fill">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="sche">
                <div class="bg-schedule">
                    <div class="container">
                        <div class="schedule">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-container text-light mb-5">
                                        <h2>Schedule</h2>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <ul class="nav nav-pills mb-3 d-flex justify-content-center" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link schedule-tabs active big-word" id="pills-mobile-legend-tab" data-toggle="pill" href="#pills-mobile-legend" role="tab" aria-controls="pills-mobile-legend" aria-selected="true">Mobile Legend</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link schedule-tabs big-word" id="pills-valorant-tab" data-toggle="pill" href="#pills-valorant" role="tab" aria-controls="pills-valorant" aria-selected="false">Valorant</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-12 d-flex justify-content-center">
                                    <div class="schedule-card mb-5">
                                        <div class="text-container">
                                            <div class="tab-content my-5" id="pills-tabContent">
                                                <div class="tab-pane fade show active px-3" id="pills-mobile-legend" role="tabpanel" aria-labelledby="pills-mobile-legend-tab">
                                                    <p class="big-word">ON July <small>15<sup>th</sup>, 16<sup>th</sup>, 17<sup>th</sup></small></p>
                                                    <p class="sub-big-word"><i class="fa fa-map-marker" aria-hidden="true"></i>lippo mall kuta</p>
                                                </div>
                                                <div class="tab-pane fade px-3" id="pills-valorant" role="tabpanel" aria-labelledby="pills-valorant-tab">
                                                    <p class="big-word">ON July <small>1<sup>st</sup>, 2<sup>nd</sup>, 3<sup>rd</sup></small></p>
                                                    <p class="sub-big-word"><i class="fa fa-map-marker" aria-hidden="true"></i>Online</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="img-container text-right">
                                        <img src="img/korea-schedule.png" alt="" class="img-fluid hangul">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="bg-prizepool">
                    <div class="container">
                        <div class="prizepool">
                            <div class="row d-flex align-items-center">
                                <div class="col-12 col-lg-6">
                                    <div class="text-container text-light">
                                        <h2>PrizePool</h2>
                                        <h3>IDR 15.000.000</h3>
                                    </div>
                                    <div class="img-container">
                                        <img src="img/korea-prizepool.png" alt="" class="img-fluid hangul">
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="image-container">
                                        <img src="img/helcurt.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="bg-history">
                    <div class="container">
                        <div class="history">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-container text-light">
                                        <h2>History</h2>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="history-cards mt-5">
                                        <div class="image-container">
                                            <img src="img/Juara 1_ML_2018.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="text-container text-light text-center">
                                            <h3>Sultan Eos JR</h3>
                                            <p>Champion of Mobile Legend IT-ESEGA 2018</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="history-cards mt-5">
                                        <div class="image-container">
                                            <img src="img/Juara 2_ML_2018 (Otak Konslet).jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="text-container text-light text-center">
                                            <h3>Otak Konslet</h3>
                                            <p>Second Place of Mobile Legend IT-ESEGA 2018</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="history-cards mt-5">
                                        <div class="image-container">
                                            <img src="img/Juara 3_ML_2018 (Burung Penunggang Gagak).jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="text-container text-light text-center">
                                            <h5>Burung Penunggang Gagak</h5>
                                            <p>Third Place of Mobile Legend IT-ESEGA 2018</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="history-cards mt-5">
                                        <div class="image-container">
                                            <img src="img/Juara 1_ML_2019 (PANDAMAN).jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="text-container text-light text-center">
                                            <h3>PANDAMAN</h3>
                                            <p>Champion of Mobile Legend IT-ESEGA 2019</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="history-cards mt-5">
                                        <div class="image-container">
                                            <img src="img/Juara 2_ML_2019 (Shiva E-Sport).jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="text-container text-light text-center">
                                            <h3>Shiva E-Sport</h3>
                                            <p>Second Place of Mobile Legend IT-ESEGA 2019</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="history-cards mt-5">
                                        <div class="image-container">
                                            <img src="img/Juara 3_ML_2019 (Gryfin).jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="text-container text-light text-center">
                                            <h3>Gryfin</h3>
                                            <p>Third Place of Mobile Legend IT-ESEGA 2019</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="history-cards mt-5">
                                        <div class="image-container">
                                            <img src="img/Juara 1_ML_2020 (Gryfin).jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="text-container text-light text-center">
                                            <h3>Gryfin</h3>
                                            <p>Champion of Mobile Legend IT-ESEGA 2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="history-cards mt-5">
                                        <div class="image-container">
                                            <img src="img/Juara 2_ML_2020 (Synch Famo).jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="text-container text-light text-center">
                                            <h3>Synch Famo</h3>
                                            <p>Second Place of Mobile Legend IT-ESEGA 2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="history-cards mt-5">
                                        <div class="image-container">
                                            <img src="img/Juara 3_ML_2020 (Nerf Esports).jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="text-container text-light text-center">
                                            <h3>Nerf Esports</h3>
                                            <p>Third Place of Mobile Legend IT-ESEGA 2020</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="history-cards mt-5">
                                        <div class="image-container">
                                            <img src="img/Juara 1_ML_2021.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="text-container text-light text-center">
                                            <h3>Arche Kara</h3>
                                            <p>Champion of Mobile Legend IT-ESEGA 2021</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="history-cards mt-5">
                                        <div class="image-container">
                                            <img src="img/Juara 2_ML_2021.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="text-container text-light text-center">
                                            <h3>Arche Pro</h3>
                                            <p>Second Place of Mobile Legend IT-ESEGA 2021</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <div class="history-cards mt-5">
                                        <div class="image-container">
                                            <img src="img/Juara 3_ML_2021.jpg" alt="" class="img-fluid">
                                        </div>
                                        <div class="text-container text-light text-center">
                                            <h3>HMTI ML</h3>
                                            <p>Third Place of Mobile Legend IT-ESEGA 2021</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="img-container text-center">
                                        <img src="img/korea-history.png" alt="" class="img-fluid hangul">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container-fuild">
                        <div class="after-history">
                            <div class="image-container">
                                <img src="img/wave-3.png" alt="" class="img-fluid w-100 h-100 object-fit-fill">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="bg-gallery">
                    <div class="container">
                        <div class="gallery">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-container text-light">
                                        <h2>Gallery</h2>
                                    </div>
                                </div>
                                <div class="12">
                                    <div class="gallery-slider splide" id="gallerySlider">
                                        <div class="splide__track">
                                            <ul class="splide__list">
                                                <li class="splide__slide">
                                                    <div class="image-container text-center">
                                                        <img src="img/ajang lomba.jpg" alt="" class="img-fluid rounded">
                                                    </div>
                                                </li>
                                                <li class="splide__slide">
                                                    <div class="image-container text-center">
                                                        <img src="img/foto bersama panitia.jpg" alt="" class="img-fluid rounded">
                                                    </div>
                                                </li>
                                                <li class="splide__slide">
                                                    <div class="image-container text-center">
                                                        <img src="img/registrasi panitia.jpg" alt="" class="img-fluid rounded">
                                                    </div>
                                                </li>
                                                <li class="splide__slide">
                                                    <div class="image-container text-center">
                                                        <img src="img/penyerahan hadiah.jpg" alt="" class="img-fluid rounded">
                                                    </div>
                                                </li>
                                                <li class="splide__slide">
                                                    <div class="image-container text-center">
                                                        <img src="img/IMG_8674.jpeg" alt="" class="img-fluid rounded">
                                                    </div>
                                                </li>
                                                <li class="splide__slide">
                                                    <div class="image-container text-center">
                                                        <img src="img/_MG_0512.jpeg" alt="" class="img-fluid rounded">
                                                    </div>
                                                </li>
                                                <li class="splide__slide">
                                                    <div class="image-container text-center">
                                                        <img src="img/IMG_8669.jpeg" alt="" class="img-fluid rounded">
                                                    </div>
                                                </li>
                                                <li class="splide__slide">
                                                    <div class="image-container text-center">
                                                        <img src="img/IMG_9010.jpg" alt="" class="img-fluid rounded">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="img-container text-right">
                                        <img src="img/korea-gallery.png" alt="" class="img-fluid hangul">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="bg-sponsor">
                    <div class="container">
                        <div class="sponsor">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-container text-light">
                                        <h2>Sponsor</h2>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="sponsor-slider splide" id="sponsorSlider">
                                        <div class="splide__track">
                                            <ul class="splide__list">
                                                <li class="splide__slide">
                                                    <div class="image-container text-center">
                                                        <img src="img/KSP Sari Apuan.png" alt="" class="img-fluid rounded">
                                                    </div>
                                                </li>
                                                <li class="splide__slide">
                                                    <div class="image-container text-center">
                                                        <img src="img/pelangi dupa.png" alt="" class="img-fluid rounded">
                                                    </div>
                                                </li>
                                                <li class="splide__slide">
                                                    <div class="image-container text-center">
                                                        <img src="img/tunas mekar.png" alt="" class="img-fluid rounded">
                                                    </div>
                                                </li>
                                                <li class="splide__slide">
                                                    <div class="image-container text-center">
                                                        <img src="img/gumi cookies.png" alt="" class="img-fluid rounded">
                                                    </div>
                                                </li>
                                                <li class="splide__slide">
                                                    <div class="image-container text-center">
                                                        <img src="img/pt agung jaya internasional.png" alt="" class="img-fluid rounded">
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="bg-tos">
                    <div class="container">
                        <div class="tos">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-container text-light">
                                        <h2>Term Of Service</h2>
                                        <p class="mt-5">1. Pertandingan yang diadakan secara online mengharuskan ketentuan menghidupkan kamera (webcam) selama perlombaan berlangsung dengan alasan pengecekan kondusifitas saat permainan berlangsung dan memperlihatkan pemain saat sedang melakukan live streaming.</p>
                                        <p>2. Jika terjadi hal yang tidak diinginkan dan membuat kemungkinan lomba dibatalkan maka kami selaku panitia berhak membatalkan pertandingan dengan uang pendaftaran akan dikembalikan sepenuhnya kepada peserta.</p>
                                        <p>3. Panitia berhak mengganti/memberikan rules tambahan dalam pertandingan.</p>
                                        <p>4. Keputusan panitia tidak dapat diganggu gugat.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="faq">
                <div class="bg-faq">
                    <div class="container">
                        <div class="faq">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-container text-light mb-5">
                                        <h2>FAQ</h2>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div id="accordion" class="faq-card-container text-light">
                                        <div class="card">
                                            <div class="card-header" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        Apa persyaratan pendaftaran IT-ESEGA 2022 ?
                                                    </button>
                                                </h5>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                                                <div class="card-body">
                                                    Peserta merupakan masyarakat umum yang memiliki minat dalam bidang esports, bersedia mengikuti peraturan yang berlaku, serta tentunya siap untuk menjadi pemain dan bermain dalam pertandingan di IT - ESEGA 2022! Pastikan pembayaran pendaftaran telah dibayarkan secara penuh agar dapat di-approve oleh panitia.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Untuk mendaftar IT-ESEGA 2022 apakah ada batasan usia ?
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                <div class="card-body">
                                                    IT-Esega 2022 terbuka untuk umum dan tidak memiliki batasan usia untuk dapat menjadi peserta yang dapat bermain.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        Bagaimana prosedur pertandingan dilakukan ?
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                <div class="card-body">
                                                    Hanya pemain yang telah terdaftar yang bisa mengikuti pertandingan. Semua tim harus menjunjung tinggi sportifitas dan semangat fairplay. Anggota tim harus membaca dan siap mengikuti regulasi peraturan yang telah ditetapkan saat turnamen. Penggunaan program illegal dalam bentuk apapun akan dikenakan hukuman ban ID secara permanen dan device.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingFour">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Sistem pertandingan offline atau online ?
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                                <div class="card-body">
                                                    Sistem permainan terbagi menjadi 2 bagian dengan rincian secara online atau daring untuk Valorant dan secara offline atau luring untuk Mobile Legend. Jadi untuk Valorant pastikan koneksi yang kalian pakai memadai dan stabil dari tempat masing-masing sedangkan untuk Mobile Legend pastikan tetap mengikuti protokol kesehatan saat pertandingan !
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingFive">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                        Jadwal pertandingan masing-masing divisi ?
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                                <div class="card-body">
                                                    Jadwal pertandingan dan informasi lainnya mengenai kegiatan dapat dilihat pada menu informasi !
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingSix">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                                        Kenapa harus ikutan IT-ESEGA ?
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                                                <div class="card-body">
                                                    Selain karena IT-ESEGA adalah salah satu lomba esports terbesar di Bali yang diselenggarakan oleh Himpunan Mahasiswa Teknologi Informasi Universitas Udayana, IT-ESEGA juga sudah terselenggara dengan sukses dari tahun ke tahun. Alasannya belum lengkap ? Prizepool kita juga besar loh!, jadi apalagi yang kalian tunggu? yuk ikutan IT-ESEGA 2022 !
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="bg-registration">
                    <div class="container">
                        <div class="registration">
                            <div class="row">
                                <div class="col-12" >
                                    <div class="text-container text-light mb-5">
                                        <h2>Registration</h2>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6" >
                                    <div class="registration-card w-75 mx-auto">
                                        <div class="text-container text-light">
                                            <h3>IDR 100.000</h3>
                                            <p>Register Now</p>

                                        </div>
                                        <div class="detail-package text-light">
                                            <ul>
                                                <li>Mobile Legends</li>
                                                <li>Valorant</li>
                                            </ul>
                                            <div class="text-container text-center">
                                                <a href="{{ route('register') }}" class="btn btn-costume btn-danger shadow">Register</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="image-container">
                                        <img src="img/neon.png" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="cont">
                <div class="bg-contact">
                    <div class="container">
                        <div class="contact">
                            <div class="row">
                                <div class="col-12">
                                    <div class="text-container text-light">
                                        <h2>Contact Us</h2>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="contact-info text-center my-5">
                                        <div class="row">
                                            <div class="col-12 col-md-4 my-2">
                                                <div class="contact-card">
                                                    <h4>Mutiara Orlanda</h4>
                                                    <div class="telp">
                                                        <a style="color: #FFFFFF" href="https://api.whatsapp.com/send?phone=6281238653635">081238653635</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4">
                                                <div class="contact-card my-2">
                                                    <h4>Dede Cahyadi</h4>
                                                    <div class="telp">
                                                        <a style="color: #FFFFFF" href="https://api.whatsapp.com/send?phone=6282236167065">082236167065</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-4 my-2">
                                                <div class="contact-card">
                                                    <h4>Dean Agnia</h4>
                                                    <div class="telp">
                                                        <a style="color: #FFFFFF" href="https://api.whatsapp.com/send?phone=6281239400495">081239400495</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="contact-form">
                                        <form class="text-light" action="{{ url('pesan') }}"  method="post">
                                            @csrf
                                            <div class="form-group">
                                                <input type="name" class="form-control costume-form @error('name') is-invalid @enderror" id="name" name="name" placeholder="Your Name ...">
                                                @error('name')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control costume-form @error('email') is-invalid @enderror" id="email" name="email" placeholder="Your Email ...">
                                                @error('email')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control costume-form" id="message @error('message') is-invalid @enderror" rows="3" name="message" placeholder="Your Message ..."></textarea>
                                                @error('message')
                                                    <div class="invalid-feedback">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group text-center">
                                                <input type="submit" value="Submit" class="btn btn-costume btn-danger">
                                            </div>
                                        </form>
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
                    <div class="footer">
                        <div class="row">
                            <div class="col-12 col-md-4">
                                <div class="image-container">
                                    <img src="img/logo.png" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-5">
                                <div class="text-container text-light">
                                    <h3>IT-ESEGA</h3>
                                    <p>IT-ESEGA atau Information Technology Sport Based On Excellent Games adalah sebuah kontes esports tahunan yang diselenggarakan oleh mahasiswa program studi Teknologi Informasi Universitas Udayana yang sudah terselenggara dengan sukses dari tahun ke tahun.</p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4 mt-5">
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
        @include('sweetalert::alert')
    </body>
</html>


