<!DOCTYPE html>
<html>

<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/responsive.css" rel="stylesheet" />
    <link href="css/stylesendiri.css" rel="stylesheet" />

    <style>
        .map-responsive {
            overflow: hidden;
            padding-bottom: 56.25%;
            position: relative;
            height: 0;
        }

        .map-responsive iframe {
            left: 0;
            top: 0;
            height: 70%;
            width: 100%;
            position: absolute;
        }
    </style>

    <style>
        .container-1 {
            display: flex;
            justify-content: center;
            height: 1vh;
        }

        .pembatas {
            width: 3%;
            height: 4px;
            background-color: #afa9a0;
            margin-bottom: 5px;
        }

        .pembatas2 {
            width: 4%;
            height: 4px;
            background-color: #17871d;
            margin-bottom: 5px;
        }
    </style>

    <style>
        .container-2 {
            position: relative;
            text-align: center;
            height: 80vh;
        }

        .image {
            display: inline-block;
            position: absolute;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .text-top-left {
            position: relative;
            top: 60px;
            left: 10px;
            text-align: left;
        }

        .text-top-right {
            position: relative;
            top: 50px;
            left: 380px;
            text-align: left;
        }

        .text-bottom-left {
            position: relative;
            top: 300px;
            left: 10px;
            text-align: left;
        }

        .text-bottom-right {
            position: relative;
            top: 220px;
            left: 10px;
            text-align: left;
        }
    </style>

<body style="background-color: white;">
    <div class="hero_area">
        <header class="header_section">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-lg custom_nav-container ">
                    <a class="navbar-brand" href="index.html">
                        <span>
                            Freshpay
                        </span>
                    </a>
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="s-1"> </span>
                        <span class="s-2"> </span>
                        <span class="s-3"> </span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="#carouselExampleIndicators">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="produk.php"> Produk</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#penukaranbotol">Penukaran Botol</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#lokasi">Lokasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#pengajuanotlet">Pengajuan</a>
                                </li>
                                <div class="quote_btn-container ">
                                    <li class="nav-item" style="margin-left:50px">
                                        <a class="nav-link1" href="login.php">Masuk</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link1" href="register.php">Daftar</a>
                                    </li>
                                    <div class="garis_vertikal"></div>
                                    <li class="nav-item">
                                        <a class="nav-link1" href="aboutUs.php">About</a>
                                    </li>
                                </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
</div>

    <section class="slider_section">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 ">
                                <div class="detail_box" style="text-align: center;">
                                    <h1 style="font-size: 35px;">
                                        Platform Informasi dan
                                        Penukaran Botol
                                    </h1>
                                    <p style="font-size: 15px;">
                                        Platform digital, yang mengajak masyarakat untuk merubah sampah yang dapat
                                        merusak lingkungan menjadi bermanfaat
                                        dan membawa kebaikan.
                                    </p>
                                    <div class="btn-box">
                                        <a href="aboutUs.php" class="btn-1" style="background-color:#e49a2b">
                                            Baca Selengkapnya
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="img-box">
                                    <img src="assets/landing-page.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

    <br><br>
    <div class="container-1">
        <div class="pembatas"></div>
        <div class="pembatas2"></div>
        <div class="pembatas"></div>
    </div>
    <br><br>



    <section class="service_section layout_padding">
        <div class="container-fluid">
            <div class="heading_container">
                <h2>
                    Mari Bergerak!
                </h2>
            </div>

            <div class="service_container">
                <div class="box">
                    <a href="produklogin.php" class="img-box">
                        <img src="assets/produk-daur-ulang.png" alt="">
                    </a>
                    <div class="detail-box">
                        <h5>
                            Produk Daur Ulang
                        </h5>
                        <p>
                            Produk Daur Ulang hasil dari tangan para pengrajin
                        </p>
                    </div>
                </div>
                <div class="box" style="margin-left: 80px;">
                    <a href="#penukaranbotol" class="img-box">
                        <img src="assets/penukaran-botol.png" alt="">
                    </a>
                    <div class="detail-box">
                        <h5>
                            Penukaran Botol
                        </h5>
                        <p>
                            Sampah yang terkumpul dapat ditukarkan dan poin akan otomatis dikirim.
                        </p>
                    </div>
                </div>
                <div class="box" style="margin-left: 80px;">
                    <a href="#pengajuanotlet" class="img-box">
                        <img src="assets/pengajuan.png" alt="">
                    </a>
                    <div class="detail-box">
                        <h5>
                            Pengajuan Otlet
                        </h5>
                        <p>
                            Pengajuan Outlet Mini Collection Point di Wilayah Terdekat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container-1">
        <div class="pembatas"></div>
        <div class="pembatas2"></div>
        <div class="pembatas"></div>
    </div>

    <section class="about_section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="assets/landing-page21.png" alt="" style="padding-top: 90px">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                Ayo jadi Aktor Bebas Sampah
                            </h2>
                        </div>
                        <p>
                            Aktor ialah individu yang memiliki kesadaran akan permasalahan persampahan dan ingin menjadi
                            bagian dalam solusi mewujudkan Indonesia Bebas Sampah.
                        </p>
                        <a href="/sign-up" style="background-color:#e49a2b">
                            Daftar Sekarang!
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <br><br><br><br><br><br>
    <div class="container-1">
        <div class="pembatas"></div>
        <div class="pembatas2"></div>
        <div class="pembatas"></div>
    </div>
    <br><br><br><br><br>

    <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="heading-lego">
                <h2>
                    Produk Daur Ulang
                </h2>
                <p>
                    Produk Daur Ulang Hasil Dari Para Pengrajin
                </p>
            </div>
            <br><br><br>
            <div class="carousel-item active">
                <div class="card-wrapper container-sm d-flex  justify-content-around">
                    <div class="main-container" style="width: 10rem">
                        <div class="poster-container">
                            <a href="https://tokopedia.link/ROOWsbAk5yb"><img src="assets/market-bag.jpg" class="poster" /></a>
                        </div>
                        <div class="ticket-container">
                            <div class="ticket__content">
                                <h4 class="ticket__movie-title" style="font-size: 20px">Market Bag</h4>
                                <p class="ticket__current-price">Rp 280.000,00</p>
                                <button href="https://tokopedia.link/ROOWsbAk5yb"class="ticket__buy-btn">Lihat Produk</button>
                            </div>
                        </div>
                    </div>
                    <div class="main-container" style="width: 10rem; margin-left:90px">
                        <div class="poster-container">
                            <a href=" https://tokopedia.link/B1C8pRMl5yb"><img src="assets/mesin-pembuat-kopi.jpg" class="poster" /></a>
                        </div>
                        <div class="ticket-container">
                            <div class="ticket__content">
                                <h4 class="ticket__movie-title" style="font-size: 20px">Mesin Pembuat Kopi</h4>
                                <p class="ticket__current-price">Rp 280.000,00</p>
                                <button href=" https://tokopedia.link/B1C8pRMl5yb"class="ticket__buy-btn">Lihat Produk</button>
                            </div>
                        </div>
                    </div>
                    <div class="main-container" style="width: 18rem;margin-left:90px">
                        <div class="poster-container">
                            <a href="https://tokopedia.link/rSi4mI9j5yb"><img src="assets/recycled-bag.jpg" class="poster" /></a>
                        </div>
                        <div class="ticket-container">
                            <div class="ticket__content">
                                <h4 class="ticket__movie-title" style="font-size: 20px">Reycled Bag</h4>
                                <p class="ticket__current-price">Rp 290.000,00</p>
                                <button href="https://tokopedia.link/rSi4mI9j5yb"class="ticket__buy-btn">Lihat Produk</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="card-wrapper container-sm d-flex  justify-content-around">
                    <div class="main-container" style="width: 10rem">
                        <div class="poster-container">
                            <a href="https://tokopedia.link/73BzYlT23yb"><img src="assets/vas-bunga.jpg" class="poster" /></a>
                        </div>
                        <div class="ticket-container">
                            <div class="ticket__content">
                                <h4 class="ticket__movie-title" style="font-size: 20px">Vas Bunga</h4>
                                <p class="ticket__current-price">Rp 280.000,00</p>
                                <button href="https://tokopedia.link/73BzYlT23yb"class="ticket__buy-btn">Lihat Produk</button>
                            </div>
                        </div>
                    </div>
                    <div class="main-container" style="width: 10rem; margin-left:90px">
                        <div class="poster-container">
                            <a href="https://tokopedia.link/73BzYlT23yb"><img src="assets/tatakan-gelas.jpg" class="poster" /></a>
                        </div>
                        <div class="ticket-container">
                            <div class="ticket__content">
                                <h4 class="ticket__movie-title" style="font-size: 20px">Tatakan Gelas</h4>
                                <p class="ticket__current-price">Rp 280.000,00</p>
                                <button href="https://tokopedia.link/73BzYlT23yb" class="ticket__buy-btn">Lihat Produk</button>
                            </div>
                        </div>
                    </div>
                    <div class="main-container" style="width: 18rem;margin-left:90px">
                        <div class="poster-container">
                            <a href="https://tokopedia.link/DdKaIQ0k5yb"><img src="assets/recycled-powder-box.jpg" class="poster" /></a>
                        </div>
                        <div class="ticket-container">
                            <div class="ticket__content">
                                <h4 class="ticket__movie-title" style="font-size: 20px">Reycled Powder Box</h4>
                                <p class="ticket__current-price">Rp 290.000,00</p>
                                <button href="https://tokopedia.link/DdKaIQ0k5yb"class="ticket__buy-btn">Lihat Produk</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <div class="container-1">
        <div class="pembatas"></div>
        <div class="pembatas2"></div>
        <div class="pembatas"></div>
    </div>
    <br><br><br><br>

<div id="penukaranbotol" class="container">
        <div class="heading_container1">
            <h2>
                Penukaran Botol
            </h2>
        </div>
    <div class="container-2">
        <div class="row">
            <div class="col-sm-4">
                <div class="text-top-left">
                <img src="assets/1 (1).png" style="float:left; padding-top:20px; margin-left:20px; margin-right:20px">
                    <h5 class="card-title">Kumpulkan</h5>
                    <p class="card-text">Botol plastik bekas lalu bungkus dengan kantong plastik bekas.</p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="text-top-right">
                <img src="assets/3.png" style="float:left; padding-top:20px; margin-right:20px">
                    <h5 class="card-title">Bawa dan Masukan</h5>
                    <p class="card-text">Botol plastik beserta kantong plastik yang sudah ditulis dengan spidol permanen</p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="text-bottom-left">
                <img src="assets/4.png" style="float:left; padding-top:20px; margin-right:20px">
                    <h5 class="card-title">Dapat Poin</h5>
                    <p class="card-text">Poin otomatis akan dikirim saat sampah diambil.</p>
                </div>
            </div>

            <div class="col-sm-4">
                <div class="text-bottom-right">
                <img src="assets/2.png" style="float:left; padding-top:20px; margin-left:20px; margin-right:20px">
                    <h5 class="card-title">Tulis</h5>
                    <p class="card-text">User ID dan jumlah botol pada kantong plastik bekas dengan spidol permanen.</p>
                </div>
            </div>

            <div class="image">
                <img src="assets/tukar-botol.png" alt="Gambar" width="300">
            </div>
        </div>
    </div>
</div>

    <br><br><br><br>
    <div class="container-1">
        <div class="pembatas"></div>
        <div class="pembatas2"></div>
        <div class="pembatas"></div>
    </div>
    <br><br><br><br>


    <div id="lokasi" class="heading_container2">
        <h2 style="font-size: 20px">
            Lokasi Mini Collection Point
        </h2>
        <div class="main">
            <div class="form-group has-search">
                <div class="input-group">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-search"
                            viewBox="0 0 16 16" style="width: 14px; height: 14px;">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                        </svg>
                    </span>
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </div>
        </div>
    </div>

    <br>
    <div class="container">
        <div class="mapouter">
            <div class="gmap_canvas">
                <div class="map-responsive">
                    <iframe src="https://maps.google.com/maps?q=california&t=&z=10&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="container-1">
        <div class="pembatas"></div>
        <div class="pembatas2"></div>
        <div class="pembatas"></div>
    </div>
    <br><br><br><br>

    <section id="pengajuanotlet" class="bod_area">
        <div class="container">
            <div class="heading_container2">
                <h2>
                    Pengajuan Mini Collection Point
                </h2>
                <p>
                    Di wilayah kamu ingin ada Mini Collection Point (MCP) Plasticpay ?
                    Yuk pilih & daftar dibawah ini !
                </p>
            </div>
            <br><br>
            <div class="row text-center">
                <div class="col-lg-3 col-sm-3 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.1s"
                    data-wow-offset="0"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInLeft;">
                    <div class="our-bod">
                        <a href="login.php" class="single-bod">
                            <img src="assets/perumahan.png" class="img-fluid" alt="">
                        </a>
                        <p>Perumahan</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-3 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s"
                    data-wow-offset="0"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeInLeft;">
                    <div class="our-bod">
                        <a href="login.php" class="single-bod">
                            <img src="assets/kantor.png" class="img-fluid" alt="">
                        </a>
                        <p>Kantor</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-3 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.3s"
                    data-wow-offset="0"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.3s; animation-name: fadeInLeft;">
                    <div class="our-bod">
                        <a href="login.php" class="single-bod">
                            <img src="assets/tempat-ibadah.png" class="img-fluid" alt="">
                        </a>
                        <p>Tempat Ibadah</p>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-3 col-xs-12 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.4s"
                    data-wow-offset="0"
                    style="visibility: visible; animation-duration: 1s; animation-delay: 0.4s; animation-name: fadeInLeft;">
                    <div class="our-bod">
                        <a href="login.php" class="single-bod">
                            <img src="assets/event.png" class="img-fluid" alt="">
                        </a>
                        <p>Event</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="info_section layout_padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="info_logo">
                        <div class="row">
                            <div class="col-4">
                                <img src="assets/freshpay-removebg-preview.png" alt="Logo Freshpay"
                                    style="width: 80%;  ">
                            </div>
                            <div class="col-8">
                                <h3 style="color: black; font-size: 20px; margin-top:20px">Freshpay</h3>
                            </div>
                            <p>
                            Platform nasional yang menggerakan para pemangku kepentingan untuk berperan serta dalam mewujudkan Indonesia Bebas Sampah
                            </p>
                        </div>
                    </div>
                </div>


                <div class="col-md-3">
                    <div class="info_links">
                        <h4 style="color: black; font-size:20px; margin-top:20px; text-align:center">
                            Menu Freshpay
                        </h4>
                        <ul class="  ">
                            <li class="" style="margin-left: 50px;">
                                <a class="" href="index.php">Beranda</a>
                            </li>
                            <li class="" style="margin-left: 50px;">
                                <a class="" href="produk.php"> Produk</a>
                            </li>
                            <li class="" style="margin-left: 50px;">
                                <a class="" href="#penukaranbotol"> Penukaran Botol </a>
                            </li>
                            <li class="" style="margin-left: 50px;">
                                <a class="" href="#lokasi"> Lokasi</a>
                            </li>
                            <li class="" style="margin-left: 50px;">
                                <a class="" href="#pengajuanotlet"> Pengajuan</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info_links">
                        <h4 style="color: black; font-size:20px; margin-top:20px; text-align:center">
                            Tautan Penting
                        </h4>
                        <ul class="  ">
                            <li class="" style="margin-left: 55px;">
                                <a class="" href="aboutUs.php">Tentang Freshpay</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="info_links">
                        <h4 style="color: black; font-size:20px; margin-left:20px; margin-top:20px; text-align:center">
                            Media Sosial
                        </h4>
                        <ul class="">
                            <li class="" style="display: flex; align-items: center; margin-left:70px">
                                <a class="" href="index.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                        class="bi bi-facebook" viewBox="0 0 16 16">
                                        <path
                                            d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                    </svg>
                                </a>
                                <a class="" href="index.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                        style="margin-left: 10px;" class="bi bi-twitter" viewBox="0 0 16 16">
                                        <path
                                            d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                                    </svg>
                                </a>
                                <a class="" href="index.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                        style="margin-left: 10px;" class="bi bi-instagram" viewBox="0 0 16 16">
                                        <path
                                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
                                    </svg>
                                </a>
                                <a class="" href="index.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                                        style="margin-left: 10px;" class="bi bi-youtube" viewBox="0 0 16 16">
                                        <path
                                            d="M8.051 1.999h.089c.822.003 4.987.033 6.11.335a2.01 2.01 0 0 1 1.415 1.42c.101.38.172.883.22 1.402l.01.104.022.26.008.104c.065.914.073 1.77.074 1.957v.075c-.001.194-.01 1.108-.082 2.06l-.008.105-.009.104c-.05.572-.124 1.14-.235 1.558a2.007 2.007 0 0 1-1.415 1.42c-1.16.312-5.569.334-6.18.335h-.142c-.309 0-1.587-.006-2.927-.052l-.17-.006-.087-.004-.171-.007-.171-.007c-1.11-.049-2.167-.128-2.654-.26a2.007 2.007 0 0 1-1.415-1.419c-.111-.417-.185-.986-.235-1.558L.09 9.82l-.008-.104A31.4 31.4 0 0 1 0 7.68v-.123c.002-.215.01-.958.064-1.778l.007-.103.003-.052.008-.104.022-.26.01-.104c.048-.519.119-1.023.22-1.402a2.007 2.007 0 0 1 1.415-1.42c.487-.13 1.544-.21 2.654-.26l.17-.007.172-.006.086-.003.171-.007A99.788 99.788 0 0 1 7.858 2h.193zM6.4 5.209v4.818l4.157-2.408L6.4 5.209z" />
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        const prevButton = document.querySelector('.prev');
        const nextButton = document.querySelector('.next');
        const slider = document.querySelector('.slider');
        const cards = document.querySelectorAll('.card');

        let currentIndex = 0;

        function showCard(index) {
            cards.forEach(card => {
                card.classList.remove('active');
            });
            cards[index].classList.add('active');
        }

        function scrollSlider(direction) {
            const scrollDistance = slider.scrollWidth / cards.length;
            if (direction === 'prev') {
                currentIndex--;
                if (currentIndex < 0) {
                    currentIndex = cards.length - 1;
                }
            } else if (direction === 'next') {
                currentIndex++;
                if (currentIndex > cards.length - 1) {
                    currentIndex = 0;
                }
            }
            slider.scroll({
                left: currentIndex * scrollDistance,
                behavior: 'smooth'
            });
            showCard(currentIndex);
        }

        prevButton.addEventListener('click', () => {
            scrollSlider('prev');
        });

        nextButton.addEventListener('click', () => {
            scrollSlider('next');
        });

        showCard(currentIndex);
    </script>

    <script>
        $('#recipeCarousel').carousel({
            interval: 10000
        })

        $('.carousel .carousel-item').each(function () {
            var minPerSlide = 3;
            var next = $(this).next();
            if (!next.length) {
                next = $(this).siblings(':first');
            }
            next.children(':first-child').clone().appendTo($(this));

            for (var i = 0; i < minPerSlide; i++) {
                next = next.next();
                if (!next.length) {
                    next = $(this).siblings(':first');
                }

                next.children(':first-child').clone().appendTo($(this));
            }
        });
    </script>

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>