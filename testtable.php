

<table border="1" style="width: 90%">
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
                
                		$query = mysqli_query($con, "SELECT id_pemesan, nama, email, tanggal, nama_kelas, harga FROM data_pemesan JOIN tiket USING (nama_kelas)");
                		while ($record = mysqli_fetch_array($query)) {

                	?>

                	<tr align="center">
                        <td> <?php echo $record['id_pesanan'] ?> </td>
                        <td> <?php echo $record['nama'] ?> </td>
                        <td> <?php echo $record['email'] ?> </td>

                        <td> <?php  echo date('d F Y', strtotime($record['tanggal'])); ?> </td>

                        <td> <?php echo $record['nama_kelas'] ?> </td>
                        <td> <?php echo "Rp. ".number_format($record['harga'],0,',','.').",-"; ?> </td>
                        
                    </tr>
                </table>

<?php } ?>