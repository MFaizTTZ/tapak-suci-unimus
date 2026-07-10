<?php

session_start();

if(!isset($_SESSION['login'])){

    header("Location: ../login.php");
    exit;

}

include "../../config/database.php";

$id = (int)$_GET['id'];

$data = mysqli_query($conn,
"SELECT * FROM prestasi
WHERE id_prestasi='$id'");

$row = mysqli_fetch_assoc($data);

if(!$row){

    echo "Data tidak ditemukan.";

    exit;

}

if(isset($_POST['update'])){

    $judul=mysqli_real_escape_string($conn,$_POST['judul']);

    $nama_anggota=mysqli_real_escape_string($conn,$_POST['nama_anggota']);

    $tingkat=mysqli_real_escape_string($conn,$_POST['tingkat']);

    $tahun=mysqli_real_escape_string($conn,$_POST['tahun']);

    $deskripsi=mysqli_real_escape_string($conn,$_POST['deskripsi']);

    $foto=$row['foto'];

    if($_FILES['foto']['name']!=""){

        if($foto!="default.png" &&
        file_exists("../../assets/uploads/prestasi/".$foto)){

            unlink("../../assets/uploads/prestasi/".$foto);

        }

        $foto=time()."_".$_FILES['foto']['name'];

        move_uploaded_file(

            $_FILES['foto']['tmp_name'],

            "../../assets/uploads/prestasi/".$foto

        );

    }

    mysqli_query($conn,

    "UPDATE prestasi SET

    judul='$judul',

    nama_anggota='$nama_anggota',

    tingkat='$tingkat',

    tahun='$tahun',

    deskripsi='$deskripsi',

    foto='$foto'

    WHERE id_prestasi='$id'");

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

<title>Edit Prestasi</title>

<link rel="stylesheet"
href="../../assets/css/style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body>

<div class="admin-layout">

<main class="admin-content">

<h1>Edit Prestasi</h1>

<form method="POST"
enctype="multipart/form-data"
class="form-admin">
<div class="form-group">

    <label>Judul Prestasi</label>

    <input
        type="text"
        name="judul"
        value="<?= $row['judul']; ?>"
        required>

</div>

<div class="form-group">

    <label>Nama Anggota</label>

    <input
        type="text"
        name="nama_anggota"
        value="<?= $row['nama_anggota']; ?>"
        required>

</div>

<div class="form-group">

    <label>Tingkat Prestasi</label>

    <select name="tingkat" required>

        <option value="Universitas"
        <?= ($row['tingkat']=="Universitas") ? "selected" : ""; ?>>
            Universitas
        </option>

        <option value="Kota"
        <?= ($row['tingkat']=="Kota") ? "selected" : ""; ?>>
            Kota
        </option>

        <option value="Provinsi"
        <?= ($row['tingkat']=="Provinsi") ? "selected" : ""; ?>>
            Provinsi
        </option>

        <option value="Nasional"
        <?= ($row['tingkat']=="Nasional") ? "selected" : ""; ?>>
            Nasional
        </option>

        <option value="Internasional"
        <?= ($row['tingkat']=="Internasional") ? "selected" : ""; ?>>
            Internasional
        </option>

    </select>

</div>

<div class="form-group">

    <label>Tahun</label>

    <input
        type="number"
        name="tahun"
        value="<?= $row['tahun']; ?>"
        required>

</div>

<div class="form-group">

    <label>Deskripsi Prestasi</label>

    <textarea
        name="deskripsi"
        rows="5"><?= $row['deskripsi']; ?></textarea>

</div>

<div class="form-group">

    <label>Foto Saat Ini</label>

    <br><br>

    <img
        src="../../assets/uploads/prestasi/<?= $row['foto']; ?>"
        width="150"
        style="border-radius:10px;margin-bottom:15px;">

</div>

<div class="form-group">

    <label>Ganti Foto (Opsional)</label>

    <input
        type="file"
        name="foto"
        accept=".jpg,.jpeg,.png">

</div>

<div class="form-button">

    <button
        type="submit"
        name="update"
        class="btn-primary">

        <i class="fas fa-save"></i>

        Update Prestasi

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