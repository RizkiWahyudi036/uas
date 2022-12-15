<?php

if (isset($_POST['simpan']))
{
    include('koneksi.php');
    $nim        = $_POST['nim'];
    $nama       = $_POST['nama'];
    $gender     = $_POST['gender'];
    $alamat     = $_POST['alamat'];
    $update     = mysqli_query($koneksi, " UPDATE mahasiswa SET
    
    nama        = '$nama',
    gender      = '$gender',
    alamat      = '$alamat'
    
    WHERE nim   = '$nim'")
        
    or die(mysqli_error());
    
    
    if($update)
    {
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Data Berhasil Di Update")';  
        echo '</script>';
        echo "<script>window.location = 'index.php'</script>";
    }
    
    else
    {
        echo "<h2>gagal menyimpan data</h2>";
        echo "<a href ='edit.php ?nim = ".$nim."'>kembali</a>";
    } 
}

else
{
        echo "<script>window.history.back()</script>";
}


?>