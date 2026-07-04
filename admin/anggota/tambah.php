<?php

session_start();

if(!isset($_SESSION['login'])){

    header("Location: ../login.php");
    exit;

}

include "../../config/database.php";

if(isset($_POST['simpan'])){

    $nama=mysqli_real_escape_string($conn,$_POST['nama']);

    $nim=mysqli_real_escape_string($conn,$_POST['nim']);

    $prodi=mysqli_real_escape_string($conn,$_POST['prodi']);

    $angkatan=mysqli_real_escape_string($conn,$_POST['angkatan']);

    $jenis_kelamin=mysqli_real_escape_string($conn,$_POST['jenis_kelamin']);

    $no_hp=mysqli_real_escape_string($conn,$_POST['no_hp']);

    $email=mysqli_real_escape_string($conn,$_POST['email']);

    $alamat=mysqli_real_escape_string($conn,$_POST['alamat']);

    $status=mysqli_real_escape_string($conn,$_POST['status']);

    $foto="default.png";

    if($_FILES['foto']['name']!=""){

        $foto=time()."_".$_FILES['foto']['name'];

        move_uploaded_file(

            $_FILES['foto']['tmp_name'],

            "../../assets/uploads/anggota/".$foto

        );

    }

    mysqli_query($conn,

    "INSERT INTO anggota

    (nama,nim,prodi,angkatan,jenis_kelamin,no_hp,email,alamat,foto,status)

    VALUES

    (

    '$nama',

    '$nim',

    '$prodi',

    '$angkatan',

    '$jenis_kelamin',

    '$no_hp',

    '$email',

    '$alamat',

    '$foto',

    '$status'

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
content="width=device-width,initial-scale=1.0">

<title>Tambah Anggota</title>

<link rel="stylesheet"
href="../../assets/css/style.css">

</head>

<body>

<div class="admin-layout">

<main class="admin-content">

<h1>

Tambah Anggota

</h1>

<form
method="POST"
enctype="multipart/form-data"
class="form-admin">
<div class="form-group">

    <label>Nama Lengkap</label>

    <input
        type="text"
        name="nama"
        required>

</div>

<div class="form-group">

    <label>NIM</label>

    <input
        type="text"
        name="nim"
        required>

</div>

<div class="form-group">

    <label>Program Studi</label>

    <input
        type="text"
        name="prodi"
        required>

</div>

<div class="form-group">

    <label>Angkatan</label>

    <input
        type="number"
        name="angkatan"
        min="2020"
        max="2100"
        required>

</div>

<div class="form-group">

    <label>Jenis Kelamin</label>

    <select
        name="jenis_kelamin"
        required>

        <option value="">-- Pilih --</option>

        <option value="Laki-laki">

            Laki-laki

        </option>

        <option value="Perempuan">

            Perempuan

        </option>

    </select>

</div>

<div class="form-group">

    <label>No. HP</label>

    <input
        type="text"
        name="no_hp">

</div>

<div class="form-group">

    <label>Email</label>

    <input
        type="email"
        name="email">

</div>

<div class="form-group">

    <label>Alamat</label>

    <textarea
        name="alamat"
        rows="4"></textarea>

</div>

<div class="form-group">

    <label>Foto</label>

    <input
        type="file"
        name="foto"
        accept=".jpg,.jpeg,.png">

</div>

<div class="form-group">

    <label>Status</label>

    <select
        name="status">

        <option value="Aktif">

            Aktif

        </option>

        <option value="Alumni">

            Alumni

        </option>

    </select>

</div>

<div class="form-button">

    <button
        type="submit"
        name="simpan"
        class="btn-primary">

        <i class="fas fa-save"></i>

        Simpan

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