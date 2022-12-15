<?php

    if(isset($_POST['tambah']))
    {
        include_once 'koneksi.php';
        $userid    = $_POST['userid'];
        $email   = $_POST['email'];
        $nama = $_POST['nama'];
        $ttl = $_POST['ttl'];
        $jk = $_POST['jk'];
        
        $input  = mysqli_query($koneksi, "INSERT INTO member VALUES
        ('$userid', '$email', '$nama', '$ttl','$jk')");
        
        if($input)
        {
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Join Member Berhasil")';  
            echo '</script>';
            echo "<script>window.location=''</script>";
        }
        else
        {
            echo "gagal menambahkan data";
            echo "<a href = 'tambah.php'>kembali</a>";
        }
    }
    else
    {
        echo "<script>window.history.back()</script>";
    }
?>