<?php 
require 'functions.php';

$id = $_GET['id'];
$buku = query("SELECT * FROM buku WHERE id = $id")[0];

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  if(ubah($_POST)) {
    echo "<script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php';
          </script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <title>Ubah Data Buku</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <div class="container">
        <a class="navbar-brand" href="#">Katalog Buku</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Daftar Buku</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="tambah.php">Tambah Buku</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container mt-3">
      <div class="row">
        <div class="col">
          <h2>Ubah Data Buku</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $buku['id']; ?>">
            <input type="hidden" name="gambarLama" value="<?= $buku['cover']; ?>">
            <div class="mb-2">
              <label for="judul" class="form-label">Judul</label>
              <input type="text" class="form-control" id="judul" name="judul" value="<?= $buku['judul']; ?>" required/>
            </div>
            <div class="mb-2">
              <label for="penulis" class="form-label">Penulis</label>
              <input type="text" class="form-control" id="penulis" name="penulis" value="<?= $buku['penulis']; ?>" required/>
            </div>
            <div class="mb-2">
              <label for="penerbit" class="form-label">Penerbit</label>
              <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $buku['penerbit']; ?>" required/>
            </div>
            <div class="mb-2">
              <label for="tahun" class="form-label">Tahun Terbit</label>
              <input type="text" class="form-control" id="tahun" name="tahun" value="<?= $buku['tahun']; ?>" required/>
            </div>
            <div class="mb-2">
              <label for="kategori" class="form-label">Kategori</label>
              <select class="form-select" name="kategori" id="kategori">
                
                <option value="Fiksi" <?= ($buku['kategori'] == 'Fiksi') ? 'selected' : ''; ?>>Fiksi</option>
                <option value="Non fiksi" <?= ($buku['kategori'] == 'Non fiksi') ? 'selected' : ''; ?>>Non Fiksi</option>
              </select>
            </div>
            <div class="mb-4">
              <label for="cover" class="form-label">Cover</label>
              <input type="file" class="form-control" id="cover" name="cover" value="<?= $buku['cover']; ?>" />
            </div>
            <button type="submit" class="btn btn-primary">Ubah Data</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
