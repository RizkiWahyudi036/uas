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

  <?php
            
            include('koneksi.php');
            $nim = $_GET['nim'];
            $show = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE nim = '$nim'");
            if(mysqli_num_rows($show) == 0)
            {
                echo '<script>window.history.back()</script>';
            }
            else
            {
                $d = mysqli_fetch_assoc($show);
            }
            
        ?>

  <section id="datamahasiswa">
  <div class="container">
    <div class="row text-center mb-1">
      <div class="col">
      <div class="section-headline text-center">
            <h2>Edit Data</h2>
          </div>
      </div>
    </div>
    <div class="row justify-content-evenly  align-items-center">
      <div class="col-md-8">
      <div class="edit-form h-100">
        <div class="row justify-content-center align-items-center">
          <div class="col-7">
            <div class="edit-data">
            <form action="edit_proses.php" method="post">
            <label for="nama" class="form-label">NIM</label>
              <input
                type="hidden"
                name="nim"
                value="<?php echo $d['nim']; ?>"
                class="form-control"
                required
              />
              <label for="nama" class="form-label">Nama</label>
              <input
                type="text"
                name="nama"
                value="<?php echo $d['nama']; ?>"
                class="form-control"
                required
              />
              <label for="gender" class="form-label">Gender</label>
              <select name="gender" class="form-select" aria-label="Default select example" required>
                            <option value="">Pilih</option>
                            <option value="Pria" <?php if($d['gender'] == 'Pria'){echo 'selected';} ?>> Pria</option>
                            <option value="Wanita" <?php if($d['gender'] == 'Wanita'){echo 'selected';} ?>> Wanita</option>
              </select>
              <label for="alamat" class="form-label">Alamat</label>
              <input
                type="text"
                name="alamat"
                value="<?php echo $d['alamat'];?>"
                class="form-control"
                required
              />
              <p></p>
              <input type="submit" name="simpan" value="Save" class="update">
            </form>
    
            <a href="index.php"><button class="back">Back</button></a>

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