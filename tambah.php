<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="img/Logo.svg">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Margarine&family=Montaga&display=swap" rel="stylesheet">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

  <title>PerpusQ | Tambah</title>
</head>

<body style="font-family: 'Montaga', serif;">
  <nav class="navbar navbar-expand-lg navbar-light shadow-lg sticky-top" style="background-color: #00ffff;">
    <div class="container">
      <ul class="navbar-nav ms-6">
        <li>
          <a class="navbar-brand" style="font-family: 'Margarine', cursive;" href="#">
            <img src="img/Logo.svg" alt="" width="77" height="50" class="d-inline-block align-text-center"> PerpusQ
          </a>
        </li>
      </ul>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-1 mb-lg-0">
          <li class="nav-item mx-2">
            <a class="nav-link" href="daftar.php">Daftar Buku</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
        </ul>
      </div>
    </div>
  </nav>

  <div class="container p-5 my-5 border">
    <div class="card">
      <div class="card-header text-muted">Tambah Buku</div>
      <div class="card-body">


        <form method="post" action="tambah.php" name="form1">

          <div class="mb-3 mt-3 form-group">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" id="judul" placeholder="Judul Buku" name="judul" required>
          </div>

          <div class="mb-3 mt-3 form-group">
            <label for="formFile" class="form-label">Gambar</label>
            <input class="form-control" type="file" id="gambar" name="gambar" required>
          </div>

          <div class="mb-3 mt-3 form-group">
            <label for="persediaan" class="form-label">Persediaan</label>
            <input type="text" class="form-control" id="persediaan" placeholder="Persediaan Buku" name="persediaan" required>
          </div>

          <div class="mb-3 mt-3 form-group">
            <label for="pengarang" class="form-label">Pengarang</label>
            <input type="text" class="form-control" id="pengarang" placeholder="Pengarang" name="pengarang" required>
          </div>

          <div class="mb-3 mt-3 form-group">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" class="form-control" id="penerbit" placeholder="Penerbit" name="penerbit" required>
          </div>

          <div class="mb-3 mt-3 form-group">
            <label for="sinopsis" class="form-label">Sinopsis</label>
            <textarea type="text" max="100" class="form-control" id="sinopsis" placeholder="Sinopsis" name="sinopsis" required></textarea>
          </div>

          <input class="btn btn-success" type="submit" name="Submit" value="Submit"></td>
      </div>
    </div>
  </div>

  <?php

  // Check If form submitted, insert form data into users table.
  if (isset($_POST['Submit'])) {
    $judul = $_POST['judul'];
    $gambar = $_POST['gambar'];
    $persediaan = $_POST['persediaan'];
    $pengarang = $_POST['pengarang'];
    $penerbit = $_POST['penerbit'];
    $sinopsis = $_POST['sinopsis'];
    unset($_POST);

    // include database connection file
    include("koneksi.php");

    // Insert user data into table
    $sql = "INSERT INTO buku (judul,gambar,persediaan,pengarang,penerbit,sinopsis) VALUES('$judul','$gambar','$persediaan','$pengarang','$penerbit','$sinopsis')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo "<script> alert ('Data Buku Berhasil Ditambah');document.location='daftar.php';</script>";
    } else {
      die(mysqli_error($conn));
    }
  }
  ?>

  <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>