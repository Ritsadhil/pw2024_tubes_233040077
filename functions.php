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

function tambah($data)
{
    $conn = koneksi();

    $judul = htmlspecialchars($data['judul']);
    $tanggal = htmlspecialchars($data['tanggal']);
    $link = htmlspecialchars($data['link']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO game
            VALUES (null, '$judul', '$tanggal', '$link', '$gambar')
    
    ";
    mysqli_query($conn, $query);
    echo mysqli_error($conn);

    return mysqli_affected_rows($conn);
}
