<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
require 'functions.php';

$games = query("SELECT * FROM game ORDER BY id DESC");

if (isset($_POST['cari'])) {
    $games = cari($_POST['keyword']);
}


?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
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
                    <input class="form-control me-2" id="keyword" type="text" placeholder="" aria-label="Search" name="keyword" autocomplete="off">
                    <button class="btn btn-outline-success" id="tombol-cari" type="submit" name="cari">Cari</button>
                </form>
            </div>
        </div>
    </nav>

    <section class="jadwal">
        <div class="content">
            <a href="tjadwal.php" class="btn btn-primary">Tambahkan Jadwal </a>
            <a class="btn btn-danger float-right" id="right-panel-link" href="logout.php" role="button">Logout</a>
        </div>


        <div class="row row-cols-1 row-cols-md-5 g-4" id="container">
            <?php foreach ($games as $game) : ?>
                <div class="card text-white bg-dark" style="width: 18rem;">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="../pw2024_tubes_233040077/image/jadwal/<?= $game['gambar']; ?>" class="card-img-top embed-responsive-item" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $game['judul']; ?></h5>
                        <p class="card-text"><?= $game['tanggal']; ?></p>
                        <a href="<?= $game['link']; ?>" class="btn btn-primary">Tonton Sekarang!</a>
                        <a href="detail.php?id=<?= $game['id']; ?>" class="card-link">Detail</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>


    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>