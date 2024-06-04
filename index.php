<?php
session_start();

require 'functions.php';
$tim = query("SELECT * FROM tim");
$player = query("SELECT * FROM player");
$games = query("SELECT * FROM game ORDER BY id DESC");


if (isset($_POST['cari'])) {
    $games = cari($_POST['keyword']);
}

if (isset($_POST['login'])) {
    $login = login($_POST);
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../pw2024_tubes_233040077/css/style.css">
</head>

<body>
    <!-- navbar -->
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
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <?php if (isset($login['error'])) : ?>
                                    <p><?= $login['pesan']; ?></p>
                                <?php endif; ?>
                                <form class="px-4 py-3" id="formlogin" action="" method="POST">
                                    <div class="mb-3">
                                        <label class="form-label">Username</label>
                                        <input type="text" class="form-control" name="username" autocomplete="off" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password</label>
                                        <input type="password" class="form-control" name="password" autocomplete="off" required>
                                    </div>
                                    <div class="mb-3">

                                    </div>
                                    <button type="submit" class="btn btn-primary" name="login">Login</button>
                                </form>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="daftar.php">Belum punya akun? Daftar disini</a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- end navbar -->
    <section class="home">
        <!-- <h1>Hello, world!</h1> -->
    </section>
    <section class="region">
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                    <img src="image/region/pacific.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">PACIFIC</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-white bg-dark mb-3">Paper Rex</li>
                        <li class="list-group-item text-white bg-dark mb-3">Gen G</li>
                        <li class="list-group-item text-white bg-dark mb-3">T1</li>
                    </ul>

                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                    <img src="image/region/emea.png" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title">EMEA</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-white bg-dark mb-3">Fnatic</li>
                        <li class="list-group-item text-white bg-dark mb-3">Team Heretics</li>
                        <li class="list-group-item text-white bg-dark mb-3">FUT Esports</li>
                    </ul>

                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                    <img src="image/region/amer.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">AMERICAS</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-white bg-dark mb-3">100 Thieves</li>
                        <li class="list-group-item text-white bg-dark mb-3">G2 Esports</li>
                        <li class="list-group-item text-white bg-dark mb-3">Leviatán</li>
                    </ul>

                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                    <img src="image/region/CN.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CHINA</h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-white bg-dark mb-3">EDward Gaming</li>
                        <li class="list-group-item text-white bg-dark mb-3">FunPlus Phoenix</li>
                        <li class="list-group-item text-white bg-dark mb-3">Dragon Ranger Gaming</li>
                    </ul>

                </div>
            </div>
        </div>
    </section>

    <section class="jadwal">
        <p class="text-center fs-2 fw-medium text-light">Jadwal Pertandingan</p>
        <div class="container">
            <div class="row row-cols-2 row-cols-md-5 g-5">
                <?php foreach ($games as $game) : ?>
                    <div class="card text-white bg-dark" style="width: 18rem;">
                        <div class="embed-responsive embed-responsive-16by9">
                            <img src="../pw2024_tubes_233040077/image/jadwal/<?= $game['gambar']; ?>" class="card-img-top embed-responsive-item" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?= $game['judul']; ?></h5>
                            <p class="card-text"><?= $game['tanggal']; ?></p>
                            <a href="<?= $game['link']; ?>" class="btn btn-primary">Tonton Sekarang!</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
</body>

</html>