<?php

if (isset($_POST['register'])) {
    include 'koneksi.php';
    $email    = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query  = mysqli_query($connection, "INSERT INTO user (username, email,password)VALUES ('$username', '$email', '$password')");

    if ($query) {
        echo '<script type ="text/JavaScript">';
        echo 'alert("Register Berhasil")';
        echo '</script>';
        echo "<script>window.location='index_logout.php'</script>";
    } else {
        echo "Register Gagal Silahkan Coba Lagi";
        echo "<a href = 'register.php'>kembali</a>";
    }
} else {
    echo "<script>window.history.back()</script>";
}