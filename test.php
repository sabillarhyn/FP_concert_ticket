	<?php
		if(isset($_GET['sukses'])){
			echo "<script>alert('Tiket berhasil dipesan!');</script>";
		}
	?>

<form action="proses.php" method="post">

	Nama <input type="text" name="nama" required> <br>
	Email <input type="email" name="email" required> <br>
	kelas <br>
<input type="radio" name="kelas" value="Festival"> Festival Rp. 50.000,-
<br>
<input type="radio" name="kelas" value="VIP"> VIP Rp. 80.000,-
<br>
	<input type="submit" value="Pesan Tiket">

	
</form>