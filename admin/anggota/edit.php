<?php

session_start();

if(!isset($_SESSION['login'])){

    header("Location: ../login.php");
    exit;

}

include "../../config/database.php";

$id = (int)$_GET['id'];

$data = mysqli_query($conn,
"SELECT * FROM anggota
WHERE id_anggota='$id'");

$row = mysqli_fetch_assoc($data);

if(!$row){

    echo "Data tidak ditemukan.";

    exit;

}

if(isset($_POST['update'])){

    $nama=mysqli_real_escape_string($conn,$_POST['nama']);

    $nim=mysqli_real_escape_string($conn,$_POST['nim']);

    $prodi=mysqli_real_escape_string($conn,$_POST['prodi']);

    $angkatan=mysqli_real_escape_string($conn,$_POST['angkatan']);

    $jenis_kelamin=mysqli_real_escape_string($conn,$_POST['jenis_kelamin']);

    $no_hp=mysqli_real_escape_string($conn,$_POST['no_hp']);

    $email=mysqli_real_escape_string($conn,$_POST['email']);

    $alamat=mysqli_real_escape_string($conn,$_POST['alamat']);

    $status=mysqli_real_escape_string($conn,$_POST['status']);

    $foto = $row['foto'];

    if($_FILES['foto']['name']!=""){

        if($foto!="default.png" &&
        file_exists("../../assets/uploads/anggota/".$foto)){

            unlink("../../assets/uploads/anggota/".$foto);

        }

        $foto=time()."_".$_FILES['foto']['name'];

        move_uploaded_file(

            $_FILES['foto']['tmp_name'],

            "../../assets/uploads/anggota/".$foto

        );

    }

    mysqli_query($conn,

    "UPDATE anggota SET

    nama='$nama',

    nim='$nim',

    prodi='$prodi',

    angkatan='$angkatan',

    jenis_kelamin='$jenis_kelamin',

    no_hp='$no_hp',

    email='$email',

    alamat='$alamat',

    foto='$foto',

    status='$status'

    WHERE id_anggota='$id'");

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

<title>Edit Anggota</title>

<link rel="stylesheet"
href="../../assets/css/style.css">

</head>

<body>

<div class="admin-layout">

<main class="admin-content">

<h1>Edit Anggota</h1>

<form method="POST"
enctype="multipart/form-data"
class="form-admin">
<div class="form-group">

    <label>Nama Lengkap</label>

    <input
        type="text"
        name="nama"
        value="<?= $row['nama']; ?>"
        required>

</div>

<div class="form-group">

    <label>NIM</label>

    <input
        type="text"
        name="nim"
        value="<?= $row['nim']; ?>"
        required>

</div>

<div class="form-group">

    <label>Program Studi</label>

    <input
        type="text"
        name="prodi"
        value="<?= $row['prodi']; ?>"
        required>

</div>

<div class="form-group">

    <label>Angkatan</label>

    <input
        type="number"
        name="angkatan"
        value="<?= $row['angkatan']; ?>"
        required>

</div>

<div class="form-group">

    <label>Jenis Kelamin</label>

    <select name="jenis_kelamin" required>

        <option value="Laki-laki"
        <?= ($row['jenis_kelamin']=="Laki-laki") ? "selected" : ""; ?>>

            Laki-laki

        </option>

        <option value="Perempuan"
        <?= ($row['jenis_kelamin']=="Perempuan") ? "selected" : ""; ?>>

            Perempuan

        </option>

    </select>

</div>

<div class="form-group">

    <label>No HP</label>

    <input
        type="text"
        name="no_hp"
        value="<?= $row['no_hp']; ?>">

</div>

<div class="form-group">

    <label>Email</label>

    <input
        type="email"
        name="email"
        value="<?= $row['email']; ?>">

</div>

<div class="form-group">

    <label>Alamat</label>

    <textarea
        name="alamat"
        rows="4"><?= $row['alamat']; ?></textarea>

</div>

<div class="form-group">

    <label>Foto Saat Ini</label>

    <br><br>

    <img
        src="../../assets/uploads/anggota/<?= $row['foto']; ?>"
        width="120"
        style="border-radius:10px;margin-bottom:15px;">

</div>

<div class="form-group">

    <label>Ganti Foto (Opsional)</label>

    <input
        type="file"
        name="foto"
        accept=".jpg,.jpeg,.png">

</div>

<div class="form-group">

    <label>Status</label>

    <select name="status">

        <option value="Aktif"
        <?= ($row['status']=="Aktif") ? "selected" : ""; ?>>

            Aktif

        </option>

        <option value="Alumni"
        <?= ($row['status']=="Alumni") ? "selected" : ""; ?>>

            Alumni

        </option>

    </select>

</div>

<div class="form-button">

    <button
        type="submit"
        name="update"
        class="btn-primary">

        <i class="fas fa-save"></i>

        Update Data

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