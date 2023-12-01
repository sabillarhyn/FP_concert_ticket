<?php

include "koneksi.php";



$nama = $_POST["nama"];
$email = $_POST["email"];
$kelas = $_POST["kelas"];
$tanggal = date("Y-m-d H:i:s");



$sql= "INSERT INTO data_pemesan (nama,email,tanggal,id_kelas) VALUES
('$nama','$email','$tanggal','$kelas')";

$hasil=mysqli_query($con,$sql);

if($hasil){
	header('Location:pesan.php?sukses');
} else {
	die("Gagal menyimpan perubahan!");
}


?>