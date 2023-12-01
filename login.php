<?php 

include "koneksi.php";

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: adm.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['username'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM admin WHERE username = '$email' AND password = '$password'";
    $result = mysqli_query($con, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: adm.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}

?>

<br><br><br>


<div id="card1">
    <div id="card-content1">
        <div id="card-title1">

            <h2>LOGIN</h2>
        </div>

        

        <form method="POST" class="form">
            <label for = "username" >Username</label>
            <br>
            <input type="text" name="username" required>
            <br><br><br>
            <label for = "password">Password</label>
            <input type="password" name="password" required>
            <br><br>
            <button name="submit" class="tombol">Login</button>

        </form>
    </div>
</div>