<?php

session_start();

if(!isset($_SESSION['login'])){

    header("Location: ../login.php");
    exit;

}

include "../../config/database.php";

$query = mysqli_query($conn,"SELECT * FROM anggota ORDER BY id_anggota DESC");

?>

<!DOCTYPE html>

<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Data Anggota</title>

<link rel="stylesheet" href="../../assets/css/style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body>

<div class="admin-layout">

<aside class="sidebar">

<div class="sidebar-logo">

<img src="../../assets/logo/logo.png">

<h2>Tapak Suci</h2>

</div>

<ul>

<li>

<a href="../dashboard.php">

<i class="fas fa-gauge"></i>

Dashboard

</a>

</li>

<li class="active">

<a href="#">

<i class="fas fa-users"></i>

Data Anggota

</a>

</li>

<li>

<a href="../logout.php">

<i class="fas fa-right-from-bracket"></i>

Logout

</a>

</li>

</ul>

</aside>

<main class="admin-content">

<div class="page-header">

<h1>Data Anggota</h1>

<a href="tambah.php" class="btn-primary">

<i class="fas fa-plus"></i>

Tambah Anggota

</a>

</div>

<table class="table">

<thead>

<tr>

<th>No</th>

<th>Foto</th>

<th>Nama</th>

<th>NIM</th>

<th>Program Studi</th>

<th>Angkatan</th>

<th>Status</th>

<th>Aksi</th>

</tr>

</thead>

<tbody>
    <?php

$no = 1;

while($row = mysqli_fetch_assoc($query)){

?>

<tr>

    <td><?= $no++; ?></td>

    <td>

        <img
        src="../../assets/uploads/anggota/<?= $row['foto']; ?>"
        class="foto-table">

    </td>

    <td><?= $row['nama']; ?></td>

    <td><?= $row['nim']; ?></td>

    <td><?= $row['prodi']; ?></td>

    <td><?= $row['angkatan']; ?></td>

    <td>

        <?php

        if($row['status']=="Aktif"){

            echo "<span class='badge badge-success'>Aktif</span>";

        }else{

            echo "<span class='badge badge-secondary'>Alumni</span>";

        }

        ?>

    </td>

    <td>

        <a
        href="edit.php?id=<?= $row['id_anggota']; ?>"
        class="btn-edit">

            <i class="fas fa-pen"></i>

        </a>

        <a
        href="hapus.php?id=<?= $row['id_anggota']; ?>"
        class="btn-delete"

        onclick="return confirm('Yakin ingin menghapus data ini?')">

            <i class="fas fa-trash"></i>

        </a>

    </td>

</tr>

<?php

}

?>

</tbody>

</table>

</main>

</div>

</body>

</html>