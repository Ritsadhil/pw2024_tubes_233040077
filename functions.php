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

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tplayer($data)
{
    $conn = koneksi();


    $ign = htmlspecialchars($data['ign']);
    $tim_id = htmlspecialchars($data['team_id']);

    $query = "INSERT INTO player
        VALUES (null, '$ign', '$tim_id')
    ";

    mysqli_query($conn, $query) or die(mysqli_error($conn));

    return mysqli_affected_rows($conn);
}
