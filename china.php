<?php
require 'functions.php';

$games = query("SELECT * FROM game");

if (isset($_POST['cari'])) {
    $games = cari($_POST['keyword']);
}


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>China</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../pw2024_tubes_233040077/css/style2.css">
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
                <!-- <form class="d-flex" role="search" action="" method="POST">
                    <input class="form-control me-2" type="text" placeholder="" aria-label="Search" name="keyword" autocomplete="off">
                    <button class="btn btn-outline-success" type="submit" name="cari">Cari</button>
                </form> -->
            </div>
        </div>
    </nav>
    <section class="tim">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                    <img src="image/tim/edg.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Edward Gaming</h5>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-white bg-dark mb-3">Haodong</li>
                        <li class="list-group-item text-white bg-dark mb-3">CHICHOO</li>
                        <li class="list-group-item text-white bg-dark mb-3">nobody</li>
                        <li class="list-group-item text-white bg-dark mb-3">Zmjjkk</li>
                        <li class="list-group-item text-white bg-dark mb-3">Smoggy</li>
                        <li class="list-group-item text-white bg-dark mb-3">Muggle</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                    <img src="image/tim/fpx.png" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title">FunPlus Phoenix</h5>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make u p the bulk of the card's content.</p> -->
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-white bg-dark mb-3">AAAAY</li>
                        <li class="list-group-item text-white bg-dark mb-3">BerLIN</li>
                        <li class="list-group-item text-white bg-dark mb-3">Lysoar</li>
                        <li class="list-group-item text-white bg-dark mb-3">autumn</li>
                        <li class="list-group-item text-white bg-dark mb-3">Life</li>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                    <img src="image/tim/drg.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dragon Ranger Gaming</h5>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-white bg-dark mb-3">Nicc</li>
                        <li class="list-group-item text-white bg-dark mb-3">TvirusLuke</li>
                        <li class="list-group-item text-white bg-dark mb-3">vo0kashu</li>
                        <li class="list-group-item text-white bg-dark mb-3">Dingwei</li>
                        <li class="list-group-item text-white bg-dark mb-3">TZH</li>
                        <li class="list-group-item text-white bg-dark mb-3">HaTo</li>
                        <li class="list-group-item text-white bg-dark mb-3">Shion7</li>
                    </ul>

                </div>
            </div>

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>