<?php

session_start();

if(!isset($_SESSION['login'])){

    header("Location: ../login.php");
    exit;

}

include "../../config/database.php";

$query=mysqli_query($conn,

"SELECT * FROM berita
ORDER BY id_berita DESC");

?>

<!DOCTYPE html>

<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport"
content="width=device-width,initial-scale=1.0">

<title>Data Berita</title>

<link rel="stylesheet"
href="../../assets/css/style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body>

<div class="admin-layout">

<main class="admin-content">

<div class="page-header">

<h1>

Data Berita

</h1>

<a
href="tambah.php"
class="btn-primary">

<i class="fas fa-plus"></i>

Tambah Berita

</a>

</div>

<table class="table">

<thead>

<tr>

<th>No</th>

<th>Gambar</th>

<th>Judul</th>

<th>Penulis</th>

<th>Tanggal</th>

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
        src="../../assets/uploads/berita/<?= $row['gambar']; ?>"
        class="foto-table">

    </td>

    <td><?= $row['judul']; ?></td>

    <td><?= $row['penulis']; ?></td>

    <td><?= date('d-m-Y', strtotime($row['tanggal'])); ?></td>

    <td>

        <a
        href="edit.php?id=<?= $row['id_berita']; ?>"
        class="btn-edit">

            <i class="fas fa-pen"></i>

        </a>

        <a
        href="hapus.php?id=<?= $row['id_berita']; ?>"
        class="btn-delete"
        onclick="return confirm('Yakin ingin menghapus berita ini?')">

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