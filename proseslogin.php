<?php
if(isset($_POST["login"])){
	$myadmin = $_POST['myadmin'];
	$password= $_POST['password'];
	if($myadmin=="admingor" AND $password=="90radmin"){
?>
		<meta http-equiv="refresh" content="2; url=./admin.php" />
	<div class="d-flex justify-content-center">
  			<div class="spinner-border text-success" role="status" style="width: 10rem; height: 10rem;">
   				 <span class="sr-only"></span>
  			</div>
	</div>	
<?php
	}else{
?>
	<center>
    	<h2>Login Gagal</h2>Username/Password salah
	</center>
		<meta http-equiv="refresh" content="2; url=./login.php" />
<?php
	}
}elseif(isset($_POST['logout'])){
?>
		<meta http-equiv="refresh" content="2; url=./index.php" />
		<div class="d-flex justify-content-center">
  			<div class="spinner-border text-success" role="status" style="width: 10rem; height: 10rem;">
   				 <span class="sr-only"></span>
  			</div>
		</div>
<?php
}else{
	echo "Login Gagal";
}

?>
