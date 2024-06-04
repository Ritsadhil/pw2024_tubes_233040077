<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
require 'functions.php';

$id = $_GET['id'];
$games = query("SELECT * FROM game WHERE id = $id");



?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Pertandingan</title>
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


    <div class="card text-white bg-dark" style="width: 18rem;">
        <img src="image/jadwal/<?= $games['gambar']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">Judul : <?= $games['judul']; ?></p>
            <p class="card-text">Tanggal : <?= $games['tanggal']; ?></p>
            <p class="card-text">Link : <?= $games['link']; ?></p>
            <p class="card-text">Gambar : <?= $games['gambar']; ?></p>
            <a href="ujadwal.php?id=<?= $games['id']; ?>" class="badge text-bg-warning text-decoration-none">ubah</a>
            <a href="hapus.php?id=<?= $games['id']; ?>" class="badge text-bg-danger text-decoration-none" onclick="return confirm ('Hapus jadwal?');">hapus</a>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>