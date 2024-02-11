<!DOCTYPE html>
<html>

<head>

    <link href="css/style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link href="css/stylesendiri.css" rel="stylesheet" />

    <style>
        .limiter {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;

        }

        .wrap-login100 {
            width: 900px;
            height: 500px;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            padding: 55px 55px 37px 55px;
            box-shadow: 0 20px 20px 0 rgba(0, 0, 0, 0.1);
        }

        .login100-pic {
            width: 40%;
            float: left;
            text-align: center;
        }

        .login100-form {
            width: 55%;
            float: center;

        }

        .input-icon {
            position: relative;
        }

        .input-icon i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 10px;
        }

        .input-icon input {
            padding-left: 30px;
            border-radius: 10px;
            background-color: #ebebeb;
            border: none;
        }

        submit-button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .submit-button {
            padding: 10px 20px;
            background-color: #e49a2b;
            color: #fff;
            font-weight: bold;
            border-radius: 20px;
            border: none;
            cursor: pointer;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

<body>
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
                                <li class="nav-item ">
                                    <a class="nav-link" href="indexlogin.php">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="produklogin.php"> Produk</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="indexlogin.php">Penukaran Botol</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="indexlogin.php">Lokasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="indexlogin.php">Pengajuan</a>
                                </li>
                                <div class="quote_btn-container ">
                                    <li class="nav-item" style="margin-left:50px">
                                        <a class="nav-link1" href="detail-akun.php">Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link1" href="index.php">Log Out</a>
                                    </li>
                                    <div class="garis_vertikal"></div>
                                    <li class="nav-item">
                                        <a class="nav-link1" href="aboutlogin.php">About</a>
                                    </li>
                                </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
    </div>

    <div class="limiter">
        <div class="wrap-login100">
            <div style="display: flex;">
                <form class="login100-form validate-form" style="margin-left: 50px;">
                    <span class="login100-form-title" style="font-weight: 500;">
                        Pengajuan Mini Collection Point
                    </span><br><br>

                    <div class="input-icon">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nama Lengkap" style="width: 250px; height: 40px;">
                    </div>

                    <div class="input-icon" style="margin-top: 10px;">
                        <i class="fas fa-envelope"></i>
                        <input type="password" placeholder="Email" style="width: 250px; height: 40px;">
                    </div>

                    <div class="input-icon" style="margin-top: 10px;">
                        <i class="fas fa-phone"></i>
                        <input type="text" placeholder="Hanphone" style="width: 250px; height: 40px;">
                    </div>

                    <div class="input-icon" style="margin-top: 10px;">
                        <i class="fas fa-map-marker-alt"></i>
                        <input type="password" placeholder="Lokasi" style="width: 250px; height: 40px;">
                    </div>

                    <div class="input-icon" style="margin-top: 10px;">
                        <i class="fas fa-home"></i>
                        <input type="password" placeholder="Alamat Lengkap" style="width:250px; height: 60px;">
                    </div><br>

                    <div class="submit-button-container">
                        <button class="submit-button" style="width: 200px; height: 35px; margin-left:20px">Kirim</button>
                    </div>
                </form>

                <div class="login100-pic js-tilt" data-tilt>
                    <img src="assets/pengajuan-otlet.jpg" alt="IMG" style="width: 100%; max-width: 400px; ">
                </div>
            </div>
        </div>
    </div>
</body>
</html>