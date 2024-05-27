<?php
require 'functions.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
        alert('data berhasil ditambahkan!');
        document.location.href = 'jadwal.php'
    
    </script>";
    } else {
        echo "Jadwal gagal ditambahkan";
    }
}



?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Jadwal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../pw2024_tubes_233040077/css/style3.css">
</head>

<body>
    <nav class="navbar sticky-top navbar-expand-lg bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php"><img src="image/UI/600px-VCT_icon_darkmode.png" alt="vct" class="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Region</a>
                    </li> -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Tim
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="pacific.php">PACIFIC</a></li>
                            <li><a class="dropdown-item" href="emea.php">EMEA</a></li>
                            <li><a class="dropdown-item" href="americas.php">AMERICAS</a></li>
                            <li><a class="dropdown-item" href="china.php">CHINA</a></li>
                            <li>
                                <!-- <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="jadwal.php">Jadwal</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container col-8">
        <h1 class="text-light">Tambahkan Pertandingan</h1>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="" class="form-label text-light">Judul</label>
                <input type="text" class="form-control" name="judul" autofocus required>

            </div>
            <div class="mb-3">
                <label for="" class="form-label text-light">Tanggal</label>
                <input type="text" class="form-control" name="tanggal" required>

            </div>
            <div class="mb-3">
                <label for="" class="form-label text-light">Link Video</label>
                <input type="text" class="form-control" name="link" required>

            </div>
            <div class="mb-3">
                <label for="" class="form-label text-light">Gambar</label>
                <input type="text" class="form-control" name="gambar" required>

            </div>


            <button type="submit" name="tambah" class="btn btn-primary">Tambahkan</button>
        </form>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>