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

<div class="container">
  <?php

  if(isset($_GET['halaman'])){
    $halaman = $_GET['halaman'];
    switch ($halaman) {
      case 'home':
          include "home.php";
        break;

      case 'beli':
          include "beli.php";
        break;


      case 'login':
          include "login.php";
        break;
      
      default:
          echo "<center><h3>Maaf. Halaman tidak ditemukan !</h3></center>";
        break;
    }
  }else {
    include "home.php";
  }

  ?>
  
</div>



</body>
</html>
