<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">

    <title>Data Mahasiswa</title>
  </head>
  <body>

  <section id="mahasiswa">
  <div class="container">
    <div class="row text-center mb-2">
      <div class="col mt-3">
      <div class="section-headline text-center">
            <h2>Data Mahasiswa</h2>
          </div>
      </div>
    </div>
    <div class="row justify-content-evenly fs-5 text-center align-items-center">
      <div class="col-md-12">
        
      <table class="table table-striped">
  <thead class="table-dark">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nim</th>
      <th scope="col">Nama</th>
      <th scope="col">Gender</th>
      <th scope="col">Alamat</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
    <!-- Menapilkan Data Mahasiswa -->

    <?php
              include_once 'koneksi.php';
                $no=1;
                $data=mysqli_query($koneksi, "SELECT * FROM mahasiswa");
                while ($d=mysqli_fetch_array($data)){
            ?>
            
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d['nim']; ?></td>
                    <td><?php echo $d['nama']; ?></td>
                    <td><?php echo $d['gender']; ?></td>
                    <td><?php echo $d['alamat']; ?></td>
                    <td>
                        <a href="edit.php ?nim=<?php echo $d['nim'];?>" class="opsi">Edit</a>
                        <a href="hapus.php ?nim=<?php echo $d['nim'];?>" class="opsi">Delete</a>
                    </td>
                </tr>
                
            <?php
            }
            ?>

    <!-- Menapilkan Data Mahasiswa -->
    </table>


      </div>
    </div>
  </div>
  </section>

  <section>
  <div class="container">
  <div class="row justify-content-evenly  align-items-center">
      <div class="col-md-7">
        <div class="row justify-content-center align-items-center">
          <div class="col-6">
            <div class="edit-data">
    
            <a href="tambah.php"><button class="back">Tambah Data</button></a>
      
            </div>
            </div>
          </div>
        </div>
      </div>
      </div>
  </div>
   
  </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>