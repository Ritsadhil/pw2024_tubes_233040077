<?php
require 'functions.php';

$fnatic = query("SELECT * FROM player WHERE tim_id=4");
$heretics = query("SELECT * FROM player WHERE tim_id=5");
$fut = query("SELECT * FROM player WHERE tim_id=6");

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
    <title>EMEA</title>
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

                        </ul>
                    </li>

                </ul>

            </div>
        </div>
    </nav>
    <section class="tim">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="image/tim/Fnatic.png" class="card-img-top embed-responsive-item" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">FNATIC</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php foreach ($fnatic as $fnc) : ?>
                            <li class="list-group-item text-white bg-dark mb-3"><?= $fnc['ign']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="image/tim/Team_Heretics.png" class="card-img-top embed-responsive-item" alt="...">
                    </div>
                    <div class="card-body ">
                        <h5 class="card-title">Team Heretics</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php foreach ($heretics as $th) : ?>
                            <li class="list-group-item text-white bg-dark mb-3"><?= $th['ign']; ?></li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                    <div class="embed-responsive embed-responsive-16by9">
                        <img src="image/tim/fut.png" class="card-img-top embed-responsive-item" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">FUT Esports</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <?php foreach ($fut as $f) : ?>
                            <li class="list-group-item text-white bg-dark mb-3"><?= $f['ign']; ?></li>
                        <?php endforeach; ?>
                    </ul>

                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>