<?php

session_start();

if(!isset($_SESSION['login'])){

    header("Location: ../login.php");
    exit;

}

include "../../config/database.php";

$id = (int) $_GET['id'];

$data = mysqli_query($conn,
"SELECT * FROM berita WHERE id_berita='$id'");

$row = mysqli_fetch_assoc($data);

if(!$row){

    echo "Data berita tidak ditemukan.";

    exit;

}

if(isset($_POST['update'])){

    $judul = mysqli_real_escape_string($conn,$_POST['judul']);

    $isi = mysqli_real_escape_string($conn,$_POST['isi']);

    $penulis = mysqli_real_escape_string($conn,$_POST['penulis']);

    $gambar = $row['gambar'];

    if($_FILES['gambar']['name']!=""){

        if($gambar!="default.png" &&
        file_exists("../../assets/uploads/berita/".$gambar)){

            unlink("../../assets/uploads/berita/".$gambar);

        }

        $gambar = time()."_".$_FILES['gambar']['name'];

        move_uploaded_file(

            $_FILES['gambar']['tmp_name'],

            "../../assets/uploads/berita/".$gambar

        );

    }

    mysqli_query($conn,

    "UPDATE berita SET

    judul='$judul',

    isi='$isi',

    penulis='$penulis',

    gambar='$gambar'

    WHERE id_berita='$id'");

    header("Location:index.php");

    exit;

}

?>

<!DOCTYPE html>

<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Edit Berita</title>

<link rel="stylesheet" href="../../assets/css/style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body>

<div class="admin-layout">

<main class="admin-content">

<h1>Edit Berita</h1>

<form method="POST"
enctype="multipart/form-data"
class="form-admin">
<div class="form-group">

    <label>Judul Berita</label>

    <input
        type="text"
        name="judul"
        value="<?= $row['judul']; ?>"
        required>

</div>

<div class="form-group">

    <label>Penulis</label>

    <input
        type="text"
        name="penulis"
        value="<?= $row['penulis']; ?>"
        required>

</div>

<div class="form-group">

    <label>Isi Berita</label>

    <textarea
        name="isi"
        rows="10"
        required><?= $row['isi']; ?></textarea>

</div>

<div class="form-group">

    <label>Gambar Saat Ini</label>

    <br><br>

    <img
        src="../../assets/uploads/berita/<?= $row['gambar']; ?>"
        width="220"
        style="border-radius:10px;border:1px solid #ddd;padding:5px;">

</div>

<div class="form-group">

    <label>Ganti Gambar (Opsional)</label>

    <input
        type="file"
        name="gambar"
        accept=".jpg,.jpeg,.png">

    <small>
        Kosongkan jika tidak ingin mengganti gambar.
    </small>

</div>

<div class="form-button">

    <button
        type="submit"
        name="update"
        class="btn-primary">

        <i class="fas fa-save"></i>

        Update Berita

    </button>

    <a
        href="index.php"
        class="btn-secondary">

        <i class="fas fa-arrow-left"></i>

        Kembali

    </a>

</div>

</form>

</main>

</div>

</body>

</html>