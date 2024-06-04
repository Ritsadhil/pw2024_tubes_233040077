<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}
require 'functions.php';

if (!isset($_GET['id'])) {
    header("location: jadwal.php");
    exit;
}

$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
        alert('Jadwal telah dihapus');
        document.location.href = 'jadwal.php'
    
    </script>";
} else {
    echo "Jadwal gagal dihapus";
}
