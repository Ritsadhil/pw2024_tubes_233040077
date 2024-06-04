<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
require 'functions.php';

if (!isset($_GET['id'])) {
    header("location: jadwal.php");
    exit;
}

$id = $_GET['id'];

$g = query("SELECT * FROM game WHERE id = $id");


if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
        alert('Jadwal berhasil diubah!');
        document.location.href = 'jadwal.php'
    
    </script>";
    } else {
        echo "Jadwal gagal diubah";
    }
}



?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ubah Jadwal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../pw2024_tubes_233040077/css/style3.css">
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="image/UI/600px-VCT_icon_darkmode.png" alt="vct" class="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">

                    <li class="nav-item">
                        <a class="nav-link" href="jadwal.php">Dashboard</a>
                    </li>
                </ul>
                <form class="d-flex" role="search" action="jadwal.php" method="post">
                    <input class="form-control me-2 keyword" type="text" placeholder="" aria-label="Search" name="keyword" autocomplete="off">
                    <button class="btn btn-outline-success tombol-cari" type="submit" name="cari">Cari</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container col-8">
        <h1 class="text-light">Ubah Jadwal</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $g['id']; ?>">
            <div class="mb-3">
                <label for="" class="form-label text-light">Judul</label>
                <input type="text" class="form-control" name="judul" autofocus required value="<?= $g['judul']; ?>">

            </div>
            <div class="mb-3">
                <label for="" class="form-label text-light">Tanggal</label>
                <input type="text" class="form-control" name="tanggal" required value="<?= $g['tanggal']; ?>">

            </div>
            <div class="mb-3">
                <label for="" class="form-label text-light">Link Video</label>
                <input type="text" class="form-control" name="link" required value="<?= $g['link']; ?>">

            </div>
            <div class="mb-3">
                <input type="hidden" name="gambar_lama" value="<?= $g['gambar']; ?>">
                <label for="" class="form-label text-light">Gambar</label>
                <input type="file" class="form-control gambar" name="gambar" onchange="previewImage()">
                <img src="image/jadwal/<?= $g['gambar']; ?>" alt="" width="150" class="img-preview">
            </div>



            <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>