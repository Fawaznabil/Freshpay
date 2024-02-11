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
			height: 650px;
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


		.social-icons {
			display: flex;
			justify-content: center;
			margin-top: 20px;
			margin-right: 30px
		}

		.social-icons img {
			margin: 0 5px;
			width: 30px;
			height: 30px;
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
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Beranda</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="produk.php"> Produk</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Penukaran Botol</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Lokasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php">Pengajuan</a>
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
        </div>
    </header>

	</div>

	<div class="limiter">
		<div class="wrap-login100">
			<div style="display: flex;">
				<form class="login100-form validate-form" style="margin-left: 200px;">
					<span class="login100-form-title" style="margin-left: 140px; font-size:20px">
						Registrasi Akun
					</span><br><br><br>

					<div class="input-icon">
						<i class="fas fa-user"></i>
						<input type="text" placeholder="Nama Lengkap"
							style="width: 400px; height: 40px; font-size:13px">
					</div>

					<div class="row">
						<div class="col-sm-6">
							<div class="input-icon" style="margin-top: 10px;">
								<i class="fas fa-envelope"></i>
								<input type="password" placeholder="Email"
									style="width: 170px; height: 40px; font-size:13px">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="input-icon" style="margin-top: 10px;">
								<i class="fas fa-phone"></i>
								<input type="text" placeholder="Hanphone"
									style="width: 170px; height: 40px; font-size:13px">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<div class="input-icon" style="margin-top: 10px;">
								<i class="fas fa-lock"></i>
								<input type="password" placeholder="Password"
									style="width: 170px; height: 40px; font-size:13px">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="input-icon" style="margin-top: 10px;">
								<i class="fas fa-lock"></i>
								<input type="password" placeholder="Confirm Password"
									style="width:170px; height: 40px; font-size:13px">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-sm-6">
							<div class="input-icon" style="margin-top: 10px;">
								<i class="fas fa-map-marker-alt"></i>
								<input type="password" placeholder="Pilih Provinsi"
									style="width: 170px; height: 40px; font-size:13px ">
							</div>
						</div>

						<div class="col-sm-6">
							<div class="input-icon" style="margin-top: 10px;">
								<i class="fas fa-map-marker-alt"></i>
								<input type="password" placeholder="Pilih Kota / Kabaputen"
									style="width:170px; height: 40px; font-size:13px">
							</div>
						</div>
					</div><br>

					<label class="form-check form-check-inline" style="font-size:12px">
						<input class="form-check-input" type="checkbox" name="toc" value="1" />
						<span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">Saya mengkonfirmasi ingin
							mengikuti berita terkini dari Freshpay
					</label><br><br>

					<div class="submit-button-container">
						<button class="submit-button"
							style="width: 200px; height: 35px; margin-left:100px">Kirim</button>
					</div><br>

					<span class="login100-form-title" style="margin-left: 140px; font-size:15px">
						atau Daftar dengan
					</span>

					<div class="social-icons">
						<a href="" class="link-primary"><img alt="Logo" src="assets/social.png"></a>
						<a href="" class="link-primary"><img alt="Logo" src="assets/facebook.png"></a>
						<a href="" class="link-primary"><img alt="Logo" src="assets/twitter.png"></a>
					</div><br>

					 <a href="link_menuju_halaman_login" style="margin-left: 140px; font-size:15px; color:#e49a2b;">Sudah Punya akun?</a>
				</form>
			</div>
		</div>
	</div>

</body>

</html>