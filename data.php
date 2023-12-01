<?php

include "koneksi.php";

?>

		<tr>
			<td>kelas</td>
			<td>harga</td>
		</tr>

<?php
			$query = mysqli_query($con, "SELECT * FROM tiket");
			while ($record = mysqli_fetch_array($query)) {
?>


		<tr>
			<td> <?php echo $record['nama_kelas'] ?> </td>
			<td> <?php echo $record['harga'] ?> </td>

<?php } ?>