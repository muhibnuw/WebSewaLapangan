<?php

	include("koneksi.php");	

if(isset($_POST['create'])){
$id = $_POST['id'];
	$fn = $_POST['fullname'];
	$in = $_POST['cardnumber'];
	$add = $_POST['address'];
	$city = $_POST['city'];
	$tel = $_POST['telepon'];

	$id = $_GET['id'];

	$sql = "INSERT INTO customer(`fullname`, `cardnumber`, `address`, `city`, `telepon`) values('$fn', '$in','$add','$city','$tel')";

		$query = mysqli_query($koneksi, $sql);

		if($query){
			if($id=='1'){
				header('location:booking1.php?id=&idLap=1');
			}if($id=='2'){
				header('location:booking2.php?id=&idLap=2');
			}if($id=='3'){
				header('location:booking3.php?id=&idLap=3');
			}if($id=='4'){
				header('location:booking4.php?id=&idLap=4');
			}
			
		}else{
			 echo "gagal ";
		}
}else{
		die("Akses dilarang");
	}
?>