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

<?php
  include "header.php";
?>


<br><br><br><br><br><br>

    <?php
        if(isset($_GET['sukses'])){
            echo "<script>alert('Tiket berhasil dipesan!');</script>";
        }
    ?>
<div class="container">
    <div class="col-4 offset-4">

        <form action="proses.php" method="post" class="pemesanan">

                <label><h4><strong>Nama</strong></h4></label>
                <br>
                <input type="text" name="nama"> 
                <br><br><br>
                <label><h4><strong>Email</strong></h4></label>
                <br>
                <input type="email" name="email"> 
                <br><br><br>
                <label><h4><strong>Jenis Tiket</strong></h4></label> 
                <br><br>
                    <input type="radio" name="kelas" value="0"> Festival Rp. 50.000,-
                    &ensp; &ensp; &ensp; &ensp;
                    <input type="radio" name="kelas" value="1"> VIP Rp. 80.000,-
                
                <br><br>
                <center><input type="submit" value="Pesan Tiket"></center>

    
        </form>

    </div>
</div>

<br><br><br>
<?php
include "sponsor.php";
?>

</body>
</html>