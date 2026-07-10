<?php

session_start();

if(!isset($_SESSION['login'])){

    header("Location: ../login.php");
    exit;

}

include "../../config/database.php";

if(isset($_POST['simpan'])){

    $judul = mysqli_real_escape_string($conn,$_POST['judul']);

    $isi = mysqli_real_escape_string($conn,$_POST['isi']);

    $penulis = mysqli_real_escape_string($conn,$_POST['penulis']);

    $tanggal = date("Y-m-d");

    $gambar = "default.png";

    if($_FILES['gambar']['name']!=""){

        $gambar = time()."_".$_FILES['gambar']['name'];

        move_uploaded_file(

            $_FILES['gambar']['tmp_name'],

            "../../assets/uploads/berita/".$gambar

        );

    }

    mysqli_query($conn,

    "INSERT INTO berita

    (judul,isi,penulis,gambar,tanggal)

    VALUES

    (

    '$judul',

    '$isi',

    '$penulis',

    '$gambar',

    '$tanggal'

    )");

    header("Location:index.php");

    exit;

}

?>

<!DOCTYPE html>

<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width, initial-scale=1.0">

<title>Tambah Berita</title>

<link rel="stylesheet"
href="../../assets/css/style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body>

<div class="admin-layout">

<main class="admin-content">

<h1>Tambah Berita</h1>

<form method="POST"
enctype="multipart/form-data"
class="form-admin">
<div class="form-group">

    <label>Judul Berita</label>

    <input
        type="text"
        name="judul"
        placeholder="Masukkan judul berita"
        required>

</div>

<div class="form-group">

    <label>Penulis</label>

    <input
        type="text"
        name="penulis"
        placeholder="Masukkan nama penulis"
        value="Admin"
        required>

</div>

<div class="form-group">

    <label>Isi Berita</label>

    <textarea
        name="isi"
        rows="10"
        placeholder="Tulis isi berita di sini..."
        required></textarea>

</div>

<div class="form-group">

    <label>Gambar Berita</label>

    <input
        type="file"
        name="gambar"
        accept=".jpg,.jpeg,.png">

    <small>
        Format gambar: JPG, JPEG, PNG
    </small>

</div>

<div class="form-button">

    <button
        type="submit"
        name="simpan"
        class="btn-primary">

        <i class="fas fa-save"></i>

        Simpan Berita

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