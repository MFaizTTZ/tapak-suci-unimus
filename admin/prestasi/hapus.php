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

$data = mysqli_query($conn, "SELECT foto FROM prestasi WHERE id_prestasi='$id'");

$row = mysqli_fetch_assoc($data);

if ($row) {

    if ($row['foto'] != "default.png") {

        $file = "../../assets/uploads/prestasi/" . $row['foto'];

        if (file_exists($file)) {

            unlink($file);

        }

    }

    mysqli_query($conn, "DELETE FROM prestasi WHERE id_prestasi='$id'");

}

header("Location: index.php");

exit;

?>
