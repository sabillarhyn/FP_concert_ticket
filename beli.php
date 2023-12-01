<?php
include "koneksi.php";
?>

<br><br><br><br><br><br><br>

<div class="container">
	<div class="col-12">
		<div class="row">

			<!-- poster -->
			<div class="col-4 offset-1">
				<img src="poster.png" height="400px">	
			</div>


			<!-- form -->
			<div class="col-6">

				<br>

				<p>Setiap akun hanya dapat membeli satu tiket. Untuk membeli tiket lebih dari satu, harap menggunakan akun dengan alamat e-mail yang berbeda.</p>
				<p>Berikut adalah informasi harga tiket berdasarkan kelas yang ditawarkan :</p>

				<br>



				<table class="table table-dark">
					<thead>
						<tr align="center">
							<th scope="col">Kelas</th>
							<th scope="col">Harga</th>
						</tr>
					</thead>


				<?php
				
				$query = mysqli_query($con, "SELECT * FROM tiket");
				while ($record = mysqli_fetch_array($query)) {

				?>

				
					<tbody>
						<tr align="center">
							<td> <?php echo $record['nama_kelas'] ?> </td>


							<td> <?php echo "Rp. ".number_format($record['harga'],0,',','.').".-"; ?> </td>
						</tr>
					</tbody>

				<?php
				}
				?>

				</table>


				<a href="pesan.php"><input type="submit" value="PESAN SEKARANG"></a>

			</div>

			<div class="col-1">
			</div>
			
		</div>
	</div>
</div>

<!-- deskripsi -->

<div class="container">
  <div class="col-12">
      	<div class="page">
      		<div class="col-9 offset-1">
      		
      	<br><br><br>

    <h5>Konser Sheila On 7 akan di adakan di Arena Konser Stadion Gelora Bung Karno pada tanggal 29 Januari, 1 Februari, dan 28 April 2022. Konser akan dimulai pada jam 19.30 WIB</h5>

</div>

    <br><br><br><br>
    
    <?php
    include "sponsor.php";
    ?>

</div>
</div>
</div>

