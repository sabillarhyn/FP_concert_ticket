<?php 

session_start();

if ($_SESSION['username'] == null) {
    session_destroy();
    header("Location: index.php?halaman=login");
}

include "koneksi.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SO7ictket</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

</head>
<body>

	  <!-- header -->
        <section class="home" id="home">
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
                <div class="container">
                <a class="navbar-brand" href="index.php"><img src="logo.png" height="60px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active login" style="text-align:center;" aria-current="page" href="logout.php"><strong>LOG OUT</strong></a>
                    </li>
                    
                    </ul>
                </div>
                </div>
            </nav>

            <br><br><br><br><br>


            <center><h1>Data Penjualan Tiket SO7</h1></center>

            <br><br><br>

            <div class="container">
                <div class="col-12">

            <table class="table table-dark">
                <thead>
                    <tr align="center">
                        <td>ID Pesanan</td>
                        <td>Nama</td>
                        <td>Email</td>
                        <td>Tanggal Pembelian</td>
                        <td>Jenis Tiket</td>
                        <td>Harga</td>
                    </tr>
                </thead>

                    <?php
                
                $query = mysqli_query($con, "SELECT * FROM data_pemesan JOIN tiket ON data_pemesan.id_kelas = tiket.id_kelas");
                while ($record = mysqli_fetch_array($query)) {

                ?>

                <tbody>
                    <tr align="center">
                        <td> <?php echo $record['id_pemesan'] ?> </td>
                        <td> <?php echo $record['nama'] ?> </td>
                        <td> <?php echo $record['email'] ?> </td>

                        <td> <?php  echo date('d F Y', strtotime($record['tanggal'])); ?> </td>

                        <td> <?php echo $record['nama_kelas'] ?> </td>
                       <td> <?php echo "Rp. ".number_format($record['harga'],0,',','.').",-"; ?> </td>
                        
                    </tr>

                    <?php } ?>
                </tbody>
                
            </table>


</div>
</div>


</body>
</html>

    <script>
        window.print();
    </script>