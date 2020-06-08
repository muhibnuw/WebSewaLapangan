<?php

// ambil data file
$namaFile = $_FILES['foto']['name'];
$namaSementara = $_FILES['foto']['tmp_name'];

// tentukan lokasi file akan dipindahkan
$dirUpload = "bukti/";

// pindahkan file
$terupload = move_uploaded_file($namaSementara, $dirUpload.$namaFile);

if ($terupload) {
    echo "Upload berhasil!<br/>";
    echo "Link: <a href='".$dirUpload.$namaFile."'>".$namaFile."</a>";
    header('location:index.php');
} else {
    echo "Upload Gagal!";
}

?>