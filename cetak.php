<img src="logo.png" width="100px">

<center><h2>Data Penjualan Tiket Konser SO7</h2></center>

<div class="container">
	<div class="col-12">


				<table border="1" align="center" style="width: 100%">
		 			<tr align="center">
                        <td>ID Pesanan</td>
                        <td>Nama</td>
                        <td>Email</td>
                        <td>Tanggal Pembelian</td>
                        <td>Jenis Tiket</td>
                        <td>Harga</td>
                    </tr>

                    <?php

                    	include "koneksi.php";
                
                		$query = mysqli_query($con, "SELECT * FROM data_pemesan JOIN tiket ON data_pemesan.id_kelas = tiket.id_kelas");
               			 while ($record = mysqli_fetch_array($query)) {

                	?>

                	<tr align="center">
                        <td> <?php echo $record['id_pemesan'] ?> </td>
                        <td> <?php echo $record['nama'] ?> </td>
                        <td> <?php echo $record['email'] ?> </td>

                        <td> <?php  echo date('d F Y', strtotime($record['tanggal'])); ?> </td>

                        <td> <?php echo $record['nama_kelas'] ?> </td>
                       <td> <?php echo "Rp. ".number_format($record['harga'],0,',','.').",-"; ?> </td>
                        
                    </tr>
                    <?php } ?>

				</table>
		
	</div>
</div>

	<script>
        window.print();
    </script>