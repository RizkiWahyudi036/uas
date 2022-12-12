<?php
        if(isset($_GET['nim']))
        {
            include('koneksi.php');
            $nim    = $_GET['nim'];
            $cek    = mysqli_query($koneksi, "SELECT nim FROM mahasiswa
            WHERE nim = '$nim'") or die(mysqli_error());
            
            if(mysqli_num_rows($cek)==0)
            {
                echo "<script>window.history.back()</script>";
            }
            else{
                $del = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE nim = '$nim'");
                if ($del)
                {
                    echo '<script type ="text/JavaScript">';  
                    echo 'alert("Data Berhasil Di Hapus")';  
                    echo '</script>';   
                    echo "<script>window.location = 'index.php';</script>";    
                }
                else
                {
                    echo "<h2>gagal menghapus data</h2>";
                    echo "<a href = 'index.php'>Kembali </a>";
                }
            }
        }   
        else{
            echo "<script>window.history.back()</script>";
        }
    ?>