<?php

session_start();

if(!isset($_SESSION['login'])){

    header("Location: ../login.php");
    exit;

}

include "../../config/database.php";

$query = mysqli_query($conn,"SELECT * FROM prestasi ORDER BY id_prestasi DESC");

?>

<!DOCTYPE html>

<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Data Prestasi</title>

<link rel="stylesheet" href="../../assets/css/style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body>

<div class="admin-layout">

<main class="admin-content">

<div class="page-header">

<h1>Data Prestasi</h1>

<a href="tambah.php" class="btn-primary">

<i class="fas fa-plus"></i>

Tambah Prestasi

</a>

</div>

<table class="table">

<thead>

<tr>

<th>No</th>

<th>Foto</th>

<th>Judul Prestasi</th>

<th>Nama Anggota</th>

<th>Tingkat</th>

<th>Tahun</th>

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
        src="../../assets/uploads/prestasi/<?= $row['foto']; ?>"
        class="foto-table">

    </td>

    <td><?= $row['judul']; ?></td>

    <td><?= $row['nama_anggota']; ?></td>

    <td>

        <?php

        if($row['tingkat']=="Internasional"){

            echo "<span class='badge badge-primary'>Internasional</span>";

        }elseif($row['tingkat']=="Nasional"){

            echo "<span class='badge badge-success'>Nasional</span>";

        }elseif($row['tingkat']=="Provinsi"){

            echo "<span class='badge badge-warning'>Provinsi</span>";

        }elseif($row['tingkat']=="Kota"){

            echo "<span class='badge badge-info'>Kota</span>";

        }else{

            echo "<span class='badge badge-secondary'>Universitas</span>";

        }

        ?>

    </td>

    <td><?= $row['tahun']; ?></td>

    <td>

        <a
        href="edit.php?id=<?= $row['id_prestasi']; ?>"
        class="btn-edit">

            <i class="fas fa-pen"></i>

        </a>

        <a
        href="hapus.php?id=<?= $row['id_prestasi']; ?>"
        class="btn-delete"
        onclick="return confirm('Yakin ingin menghapus prestasi ini?')">

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