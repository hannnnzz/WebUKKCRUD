<!doctype html>
<html lang="en">

<head>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="img/Logo.svg" type="image">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Margarine&family=Montaga&display=swap" rel="stylesheet">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.all.min.css">

  <title>PerpusQ | Daftar Buku</title>
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
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <form action="logout" method="post">
                <a href="akunuser.php?logoutSubmit=1" type="submit" class="dropdown-item">Logout</a>
              </form>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>


  <div class="container my-5">
    <div class="card border-dark">
      <div class="card-header border-dark text-muted">Daftar Buku</div>
      <div class="card-body">

        <div class="container">
          <div class="row justify-content-start" style="background-color:#fff">
            <div class="col-4">
              <a href="tambah.php" class="btn" style="background-color: #00ffff;" type="add">Add</a>
            </div>
            <div class="col-4">
            </div>
            <div class="col-4">
              <form class="d-flex">
                <input class="form-control me-2 border-dark" type="search" placeholder="Search" name="search" aria-label="Search">
                <button class="btn btn-outline-dark text-black" value="search" type="submit">Search</button>
              </form>
              <?php
              include("koneksi.php");
              if (isset($_GET['search'])) {
                $search = $_GET['search'];
                echo "<b>Hasil Pencarian : " . $search . "</b>";
              }
              ?>
            </div>
          </div>

          <?php
          if (isset($_GET['search'])) {
            $search = $_GET['search'];
            $sukili = mysqli_query($conn, "SELECT * FROM buku WHERE judul like '%" . $search . "%' OR pengarang like '%" . $search . "%'");
          } else {
            $sukili = mysqli_query($conn, "SELECT * FROM buku ORDER BY id_buku ASC limit 30");
          }
          while ($row = mysqli_fetch_array($sukili)) {
          ?>
            <div class="container rounded-3 p-2 mt-3 border">
              <div class="row mt-4">
                <div class="col-3 text-center">
                  <img style="height: 200px;" src="img/<?php echo $row['gambar'] ?>">
                  <p class="my-auto text-center mt-3"><?php echo $row['judul']; ?></p>
                </div>
                <div class="col-9">
                  <div class="row">
                    <div class="col-2">
                      <p><b><?php echo $row['pengarang']; ?></p></b>
                    </div>
                    <div class="col-4">
                      <p><i><?php echo $row['penerbit']; ?></p></i>
                    </div>
                  </div>
                  <h6 style="text-align: justify;" class="me-4"><?php echo $row['sinopsis']; ?></h6>
                </div>
                <div style="margin-bottom: 5px" class="row">
                  <div class="col-3 my-auto">
                  </div>
                  <div class="col-9 my-auto">
                    <div class="align-self-end text-end me-1">
                      <a href="edit.php?id_buku=<?php echo $row['id_buku']; ?>" class="btn btn-warning btn-sm" type="submit">Edit</a>
                      <a href="p_hapus.php?id_buku=<?php echo $row['id_buku']; ?>" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini ?')" class="btn btn-danger btn-sm" type="submit">Delete</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <?php
          }
          ?>




          <script type="text/javascript" src="js/jquery.min.js"></script>
          <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>

</html>