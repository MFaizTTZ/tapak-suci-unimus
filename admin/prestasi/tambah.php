<?php

session_start();

if(!isset($_SESSION['login'])){

    header("Location: ../login.php");
    exit;

}

include "../../config/database.php";

if(isset($_POST['simpan'])){

    $judul = mysqli_real_escape_string($conn,$_POST['judul']);

    $nama_anggota = mysqli_real_escape_string($conn,$_POST['nama_anggota']);

    $tingkat = mysqli_real_escape_string($conn,$_POST['tingkat']);

    $tahun = mysqli_real_escape_string($conn,$_POST['tahun']);

    $deskripsi = mysqli_real_escape_string($conn,$_POST['deskripsi']);

    $foto = "default.png";

    if($_FILES['foto']['name']!=""){

        $foto = time()."_".$_FILES['foto']['name'];

        move_uploaded_file(

            $_FILES['foto']['tmp_name'],

            "../../assets/uploads/prestasi/".$foto

        );

    }

    mysqli_query($conn,

    "INSERT INTO prestasi

    (judul,nama_anggota,tingkat,tahun,deskripsi,foto)

    VALUES

    (

    '$judul',

    '$nama_anggota',

    '$tingkat',

    '$tahun',

    '$deskripsi',

    '$foto'

    )");

    header("Location:index.php");

    exit;

}

?>

<!DOCTYPE html>

<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Tambah Prestasi</title>

<link rel="stylesheet" href="../../assets/css/style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body>

<div class="admin-layout">

<main class="admin-content">

<h1>Tambah Prestasi</h1>

<form method="POST"
enctype="multipart/form-data"
class="form-admin">
<div class="form-group">

    <label>Judul Prestasi</label>

    <input
        type="text"
        name="judul"
        required>

</div>

<div class="form-group">

    <label>Nama Anggota</label>

    <input
        type="text"
        name="nama_anggota"
        required>

</div>

<div class="form-group">

    <label>Tingkat Prestasi</label>

    <select
        name="tingkat"
        required>

        <option value="">-- Pilih Tingkat --</option>

        <option value="Universitas">Universitas</option>

        <option value="Kota">Kota</option>

        <option value="Provinsi">Provinsi</option>

        <option value="Nasional">Nasional</option>

        <option value="Internasional">Internasional</option>

    </select>

</div>

<div class="form-group">

    <label>Tahun</label>

    <input
        type="number"
        name="tahun"
        min="2020"
        max="2100"
        required>

</div>

<div class="form-group">

    <label>Deskripsi Prestasi</label>

    <textarea
        name="deskripsi"
        rows="5"
        required></textarea>

</div>

<div class="form-group">

    <label>Foto Prestasi</label>

    <input
        type="file"
        name="foto"
        accept=".jpg,.jpeg,.png">

</div>

<div class="form-button">

    <button
        type="submit"
        name="simpan"
        class="btn-primary">

        <i class="fas fa-save"></i>

        Simpan Prestasi

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