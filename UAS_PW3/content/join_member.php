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

    <title>Join Member</title>
  </head>
  <body>

  <section id="datamahasiswa">
  <div class="container">
    <div class="row text-center mb-1">
      <div class="col">
      <div class="section-headline text-center">
            <h2>Join Member</h2>
            <p>Get Update of Our News</p>
          </div>
      </div>
    </div>
    <div class="row justify-content-evenly  align-items-center">
      <div class="col-md-8">
      <div class="edit-form h-100">
        <div class="row justify-content-center align-items-center">
          <div class="col-7">
            <div class="edit-data">
            <form action="join_proses.php" method="post">
            <label for="userid" class="form-label">User ID</label>
              <input
                type="text"
                name="userid"
                class="form-control"
                required
              />
              <label for="email" class="form-label">Email</label>
              <input
                type="text"
                name="email"
                class="form-control"
                required
              />
              <label for="nama" class="form-label">Nama</label>
              <input
                type="text"
                name="nama"
                class="form-control"
                required
              />
              <label for="ttl" class="form-label">Tanggal Lahir</label>
              <input
                type="date"
                name="ttl"
                class="form-control"
                required
              />
              <label for="jk" class="form-label">Jenis Kelamin</label>
              <select name="jk" class="form-select" aria-label="Default select example" required>
                            <option value="">Pilih</option>
                            <option value="Pria"> Pria</option>
                            <option value="Wanita"> Wanita</option>
              </select>
              <p></p>
              <input type="submit" name="tambah" value="Join Member" class="update">
            </form>
    
            <a href="index.php" style="border: none ;"><button class="back">Back</button></a>
  </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>