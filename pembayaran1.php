<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

 		<!-- Google font -->
 		<link href="fonts/fontsgoogleapis.css" rel="stylesheet">

 		<!-- Bootstrap -->
 		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

 		<!-- Slick -->
 		<link type="text/css" rel="stylesheet" href="css/slick.css"/>
 		<link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

 		<!-- nouislider -->
 		<link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

 		<!-- Font Awesome Icon -->
 		<link rel="stylesheet" href="css/font-awesome.min.css">

 		<!-- Custom stlylesheet -->
 		<link type="text/css" rel="stylesheet" href="css/style.css"/>

 		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
 		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
 		<!--[if lt IE 9]>
 		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
 		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
 		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			<!-- TOP HEADER -->
			<div id="top-header"  style="background-color: chocolate"> 
				<div class="container">
					<ul class="header-links pull-left">
						<li><a href="#"><i class="fa fa-phone"></i> 081318575715</a></li>
						<li><a href="#"><i class="fa fa-envelope-o"></i> ibnuwijay@gmail.com</a></li>
						<li><a href="#"><i class="fa fa-map-marker"></i> Mekarsari Tambun Selatan</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
							<h1 style="color: white">GOR MEKARSARI</h1>
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
                            <!-- <li><a href="index.php">Home</a></li> -->
                            <li class="active"><a>Booking</a></li>
                            <!-- <li><a href="pertanyaan.php">Pertanyaan</a></li> -->
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h2 class="page-header">Upload Foto Bukti Pembayaran</h2>
						</br>
						</br>
						<p>Lengkapi proses booking anda dengan pembayaran transfer ke</p>
						<h4 class="text" >BNI - 0453796550 a.n Muhammad Ibnu</h4>
						<p>Sebesar Total Harga 			: <?= @$_GET['harga']?></p>
						<p>untuk menyelesaikan proses booking</p>
						<form method="POST" enctype="multipart/form-data">
						<div class="form-group">
							<label>Foto Bukti Pembayaran</label><br>
							<input type="file" class="form-control" name="foto">
							<br>
							<input type="submit" name='upload' value='Upload'>
						</div>	
						</form>
						<?php
							if(isset($_POST['upload'])){
							// ambil data file
							$namaFile = $_FILES['foto']['name'];
							$namaSementara = $_FILES['foto']['tmp_name'];

							// tentukan lokasi file akan dipindahkan
							$dirUpload = "bukti/";

							// pindahkan file
							$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

							if ($terupload) {
								echo "Upload berhasil!<br/>";?>
								<meta http-equiv="refresh" content="3; url=./index.php" />
									<div class="d-flex justify-content-center">
										<div class="spinner-border text-success" role="status" style="width: 10rem; height: 10rem;">
											<span class="sr-only"></span>
										</div>
									</div><?php 
							} else {
								echo "Upload Gagal!";
							}
							}
						?>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
					
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		
		<!-- FOOTER -->
		<footer id="footer" style="background-color: chocolate">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">Contact Us</h3>
								<ul class="footer-links">
										<li><a href="#" style="color: white"><i class="fa fa-map-marker"></i>Mekarsari Tambun Selatan</a></li>
										<li><a href="#" style="color: white"><i class="fa fa-phone"></i>081318575715</a></li>
										<li><a href="#" style="color: white"><i class="fa fa-envelope-o"></i>ibnuwijay@gmail.com</a></li>
								</ul>
							</div>
						</div>

						

						

						
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> Developed by Muhammad Ibnu Wijaya
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>


						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/slick.min.js"></script>
		<script src="js/nouislider.min.js"></script>
		<script src="js/jquery.zoom.min.js"></script>
		<script src="js/main.js"></script>

	</body>
</html>
