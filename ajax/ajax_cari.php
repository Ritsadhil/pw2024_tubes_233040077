<?php
require '../functions.php';
$games = cari($_GET['keyword']);

?>

<?php foreach ($games as $game) : ?>
    <div class="col col-md-3 ">
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
    </div>
<?php endforeach; ?>