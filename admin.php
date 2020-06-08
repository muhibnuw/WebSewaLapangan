<?php include("koneksi.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no" name="viewport">
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
					<!-- <ul class="header-links pull-left"> -->
						<!-- <li><a href="#"><i class="fa fa-phone"></i> 081318575715</a></li> -->
						<!-- <li><a href="#"><i class="fa fa-envelope-o"></i> ibnuwijay@gmail.com</a></li> -->
						<!-- <li><a href="#"><i class="fa fa-map-marker"></i> Mekarsari tambun selatan</a></li> -->
					<!-- </ul> -->
					<ul class="header-links pull-right">
						<li><a href="index.php"><i class="fa fa-user-o"></i> Logout</a></li>
					</ul>
				</div>
			</div>
			<!-- /TOP HEADER -->

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row" >
						<h1 style="color: white">ADMIN GOR MEKARSARI</h1>
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation" class="navbar navbar-default">
			<!-- container -->
			<div class="container">
				
				<!-- responsive-nav -->
				<div id="responsive-nav" class="col-xs-12 col-sm-6 col-md-8">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="admin.php">Dashboard</a></li>
						<!-- <li><a href="">Lapangan</a></li> -->
						<!-- <li><a href="">Pertanyaan</a></li> -->
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->
		
        <div class="content">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Customer Table</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>KD Customer</th>
                                            <th>Nama</th>
                                            <th>nomor identitas</th>
                                            <th>alamat</th>
                                            <th>kota</th>
											<th>telepon</th>
											<!-- <th>bukti transfer</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                         $sql = "SELECT * FROM customer";
                                         $query = mysqli_query($koneksi, $sql);
                                          while($data = mysqli_fetch_array($query)){
                                          ?>
                                         <tr>
                                         <td><?php echo $data['kdcust'];?></td>
                                         <td><?php echo $data['fullname'];?></td>
                                         <td><?php echo $data['cardnumber'];?></td>
                                         <td><?php echo $data['address'];?></td>
                                         <td><?php echo $data['city'];?></td>
										 <td><?php echo $data['telepon'];?></td>
										 <!-- <td><?php echo $data['foto']['name'];?></td> -->
										 <!-- <td><?php echo "<td><img src='bukti/".$data['foto']['name']."' width='100px' height='100px'/></td>";?></td> -->

                                         <td>
                                             <a href='hapuscust.php?kdcust=<?php echo $data['kdcust']?>'>Hapus</a>
                                         </td>
                                             </tr>
                                             <?php
                                             }
                                             ?>                                        
                                    </tbody>
                                </table>
                            </div> 
                        </div>
                    </div>
				</div>
				<div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Lapangan Table</strong>
                            </div>
                            <div class="table-stats order-table ov-h">
                                <table class="table ">
                                    <thead>
                                        <tr>
                                            <th>idLap</th>
                                            <th>tanggal</th>
                                            <th>jamMulai</th>
                                            <th>jamAkhir</th>
                                            <th>status</th>
											<th>harga</th>
											<th>kdbooking</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                         $sql = "SELECT * FROM lapangan";
                                         $query = mysqli_query($koneksi, $sql);
                                          while($data = mysqli_fetch_array($query)){
                                          ?>
                                         <tr>
                                         <td><?php echo $data['idLap'];?></td>
                                         <td><?php echo $data['tanggal'];?></td>
                                         <td><?php echo $data['jamMulai'];?></td>
                                         <td><?php echo $data['jamAkhir'];?></td>
                                         <td><?php echo $data['status'];?></td>
										 <td><?php echo $data['harga'];?></td>
										 <td><?php echo $data['kdbooking'];?></td>
                                         <td>
                                             <a href='hapuslap.php?kdbooking=<?php echo $data['kdbooking']?>'>Hapus</a>
                                         </td>
                                             </tr>
                                             <?php
                                             }
                                             ?>                                        
                                    </tbody>
                                </table>
                            </div> 
                        </div>
                    </div>
                </div>
        </div>
		
		<!-- FOOTER -->
		<footer id="footer" style="background-color: chocolate">
			
			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							<span class="copyright">
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> Developed by Muhammad Ibnu WIjaya</a>							</span>
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
		<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>

	</body>
</html>
