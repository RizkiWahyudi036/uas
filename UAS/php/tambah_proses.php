<?php

    if(isset($_POST['tambah']))
    {
        include_once 'koneksi.php';
        $nim    = $_POST['nim'];
        $nama   = $_POST['nama'];
        $gender = $_POST['gender'];
        $alamat = $_POST['alamat'];
        
        $input  = mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES
        ('$nim', '$nama', '$gender', '$alamat')");
        
        if($input)
        {
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Data Berhasil Di Tambahkan")';  
            echo '</script>';
            echo "<script>window.location='index.php'</script>";
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