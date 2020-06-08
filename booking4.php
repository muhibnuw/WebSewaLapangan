<?php
require_once "koneksi.php";
?>
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
		 <link type="text/css" rel="stylesheet" href="bootstrap-datepicker/css/bootstrap-datepicker.min.css"/>
		
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
						<h3 class="breadcrumb-header">Field 4 Schedule</h3>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
		<?php $id = $_GET['id'];
		$idLap = $_GET['idLap'];?>
		<form action="proses.php?id=<?=$id?>" method="POST" enctype="multipart/form-data">>
			<!-- container -->
			<div class="container">
					<div class="row">
					<div class="col-md-3">
					<div class="form-group">
						<label>Tanggal</label>
						<div class="input-group date">
							<div class="input-group-addon">
								<span class="glyphicon glyphicon-th"></span>
							</div>
							<input type="hidden" name="id" value="4">
							<input placeholder="masukkan tanggal Booking" type="text" class="form-control datepicker data-date-end-date='0d'"  name="tgl_akhir" required>
						</div>
					</div>
					</div>
					</div>
					<div class="row">
					<div class="col-md-2">		
						<select name="jamMulai" required>				
						<option value="jamMulai">Mulai Jam</option>

						<?php
						$sql = "SELECT * FROM jam WHERE status='true'";
						$query = mysqli_query($koneksi, $sql);
						if(mysqli_num_rows($query) > 0){
						while($data=mysqli_fetch_array($query)){

					
						?>
							<option value="<?=$data['rangejam']?>"><?=$data['rangejam']?></option>
						<?php }}s?>

						</select>
					</div>
					<div class="col-md-2">
						<select name="jamAkhir" required>
							<option value="jamAkhir">Sampai Jam</option>
							<?php
						$sql = "SELECT * FROM jamakh WHERE status='true'";
						$query = mysqli_query($koneksi, $sql);
						if(mysqli_num_rows($query) > 0){
						while($data=mysqli_fetch_array($query)){

					
						?>
							<option value="<?=$data['rangejam']?>"><?=$data['rangejam']?></option>
						<?php }}s?>
						</select>
                    </div>
					</div>
					<br>
					<div class="row">
					<div class="col-md-2">		
					<input name="booking" type="submit" class="primary-btn order-submit" value="Booking">
					</div></div>
					</form>
					<br>
                    <div class="row">
                            <!-- shop -->
                            <div class="col-md-3 col-xs-4">
                                <a href="booking1.php?id=1&idLap=1">  
                                    <div class="book">
                                        <div class="book-img">
                                            <img src="./img/lapangan.png" alt="">
                                        </div>
                                        <div class="book-body">
                                            <h3>Booking Lapangan 1<br></h3>
                                        </div>
                                    </div>
                                </a>
                                
                            </div>
                            <!-- /shop -->
                            <!-- shop -->
                            <div class="col-md-3 col-xs-4">
                                    <a href="booking2.php?id=2&idLap=2">  
                                        <div class="book">
                                            <div class="book-img">
                                                <img src="./img/lapangan.png" alt="">
                                            </div>
                                            <div class="book-body">
                                                <h3>Booking Lapangan 2<br></h3>
                                            </div>
                                        </div>
                                    </a>
                                    
                                </div>
                                <!-- /shop -->
                                <!-- shop -->
                            <div class="col-md-3 col-xs-4">
                                    <a href="booking3.php?id=3&idLap=3">  
                                        <div class="book">
                                            <div class="book-img">
                                                <img src="./img/lapangan.png" alt="">
                                            </div>
                                            <div class="book-body">
                                                <h3>Booking Lapangan 3<br></h3>
                                            </div>
                                        </div>
                                    </a>
                                    
                            </div>
                            <!-- /shop -->
                    </div><br>
					
			</div>
			<br>
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
		<script src="bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
	
<script type="text/javascript">
 $(function(){
  $(".datepicker").datepicker({
      format: 'yyyy-mm-dd',
      autoclose: true,
      todayHighlight: true,
	  startDate: new Date(),
      
  });
 });
</script>
	</body>
</html>
