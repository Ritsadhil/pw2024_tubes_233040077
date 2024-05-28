<?php

function koneksi()
{
    $conn = mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040077');
    return $conn;
}

function query($query)
{
    $conn = koneksi();

    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function upload()
{
    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    if ($error == 4) {
        // echo "<script>
        //         alert('pilih gambar terlebih dahulu');
        // </script>";
        return 'GKaPfg5XoAA9BAs.jpg';
    }

    $daftar_gambar = ['jpg', 'png', 'jpeg'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
        alert('file tidak didukung, tolong gunakan file dengan format jpg,png atau jpeg');
</script>";
        return false;
    }

    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
        alert('file tidak didukung, tolong gunakan file dengan format jpg,png atau jpeg');
</script>";
        return false;
    }

    if ($ukuran_file > 5000000) {
        echo "<script>
        alert('ukuran file terlalu besar');
</script>";
        return false;
    }


    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, 'image/jadwal/' . $nama_file_baru);

    return $nama_file_baru;
}

function tambah($data)
{
    $conn = koneksi();

    $judul = htmlspecialchars($data['judul']);
    $tanggal = htmlspecialchars($data['tanggal']);
    $link = htmlspecialchars($data['link']);
    // $gambar = htmlspecialchars($data['gambar']);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO game
            VALUES (null, '$judul', '$tanggal', '$link', '$gambar')
    
    ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));


    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    $gm = query("SELECT * FROM game WHERE id = $id ");
    if ($gm['gambar'] != 'GKaPfg5XoAA9BAs.jpg') {
        unlink('image/jadwal/' . $gm['gambar']);
    }

    mysqli_query($conn, "DELETE FROM game WHERE id = $id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();

    $id = $data['id'];
    $judul = htmlspecialchars($data['judul']);
    $tanggal = htmlspecialchars($data['tanggal']);
    $link = htmlspecialchars($data['link']);
    $gambar_lama = htmlspecialchars($data['gambar_lama']);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    if ($gambar == 'GKaPfg5XoAA9BAs.jpg') {
        $gambar = $gambar_lama;
    }

    $query = "UPDATE game SET
                judul = '$judul',
                tanggal = '$tanggal',
                link = '$link',
                gambar = '$gambar'
            where id = $id ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));


    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $conn = koneksi();

    $query = "SELECT * FROM game
                 WHERE judul LIKE '%$keyword%'";

    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
