<?php

function koneksi()
{
    $link = mysqli_connect('localhost', 'root', '', 'pw2024_tubes_233040077');
    return $link;
}

function query($query)
{
    $link = koneksi();

    $result = mysqli_query($link, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
