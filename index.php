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
            <a class="navbar-brand" href="#"><img src="image/600px-VCT_icon_darkmode.png" alt="vct" class="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Region</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Region
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">PACIFIC</a></li>
                            <li><a class="dropdown-item" href="#">EMEA</a></li>
                            <li><a class="dropdown-item" href="#">AMERICAS</a></li>
                            <li><a class="dropdown-item" href="#">CHINA</a></li>
                            <li>
                                <!-- <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Link</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
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
                    <img src="image/pacific.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">PACIFIC</h5>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-white bg-dark mb-3">Paper Rex</li>
                        <li class="list-group-item text-white bg-dark mb-3">Gen G</li>
                        <li class="list-group-item text-white bg-dark mb-3">T1</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                    <img src="image/emea.png" class="card-img-top" alt="...">
                    <div class="card-body ">
                        <h5 class="card-title">EMEA</h5>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make u p the bulk of the card's content.</p> -->
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-white bg-dark mb-3">Fnatic</li>
                        <li class="list-group-item text-white bg-dark mb-3">Team Heretics</li>
                        <li class="list-group-item text-white bg-dark mb-3">FUT Esports</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                    <img src="image/amer.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">AMERICAS</h5>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-white bg-dark mb-3">100 Thieves</li>
                        <li class="list-group-item text-white bg-dark mb-3">G2 Esports</li>
                        <li class="list-group-item text-white bg-dark mb-3">Leviatán</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                    <img src="image/CN.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">CHINA</h5>
                        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item text-white bg-dark mb-3">EDward Gaming</li>
                        <li class="list-group-item text-white bg-dark mb-3">FunPlus Phoenix</li>
                        <li class="list-group-item text-white bg-dark mb-3">Dragon Ranger Gaming</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>