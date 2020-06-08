<?php

	include("koneksi.php");	

if(isset($_POST['booking'])){
	$idLap = $_POST['id'];
	$ta = $_POST['tgl_akhir'];
	$jm = $_POST['jamMulai'];
	$ja = $_POST['jamAkhir'];
	
    $harga = ($ja-$jm)*25000;
    $status = "unpaid";
    

	$sql = "INSERT INTO lapangan(`idLap`, `tanggal`, `jamMulai`, `jamAkhir`, `status`, `harga`) values('$idLap','$ta','$jm','$ja','$status','$harga')";
	mysqli_query($koneksi, "UPDATE jam SET status='false' WHERE rangejam = $jm ");
	mysqli_query($koneksi, "UPDATE jamakh SET status='false' WHERE rangejam = $ja ");
		$query = mysqli_query($koneksi, $sql);

		if($query){
		
			// $sqlpembayaran = "SELECT * FROM lapangan where idLap = $idLap ";
			// $query1 = mysqli_query($koneksi, $sqlpembayaran);
			
			header('location:pembayaran.php?jM='.$jm.'&id='.$idLap.'');
		}else{
			echo("gagal input");
		}
}else{
	echo mysqli_error($koneksi);
	}
?>