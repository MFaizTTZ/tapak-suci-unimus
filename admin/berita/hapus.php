<?php

session_start();

if (!isset($_SESSION['login'])) {

    header("Location: ../login.php");
    exit;

}

include "../../config/database.php";

if (!isset($_GET['id'])) {

    header("Location: index.php");
    exit;

}

$id = (int) $_GET['id'];

$data = mysqli_query($conn, "SELECT gambar FROM berita WHERE id_berita='$id'");

$row = mysqli_fetch_assoc($data);

if ($row) {

    if ($row['gambar'] != "default.png") {

        $file = "../../assets/uploads/berita/" . $row['gambar'];

        if (file_exists($file)) {

            unlink($file);

        }

    }

    mysqli_query($conn, "DELETE FROM berita WHERE id_berita='$id'");

}

header("Location: index.php");

exit;

?>