<?php

session_start();

if(!isset($_SESSION['login'])){

    header("Location: login.php");
    exit;

}

include "../config/database.php";

// Menghitung jumlah data
$totalAnggota = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM anggota"));

$totalPelatih = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM pelatih"));

$totalPrestasi = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM prestasi"));

$totalPendaftaran = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM pendaftaran"));

?>

<!DOCTYPE html>

<html lang="id">

<head>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard Admin</title>

<link rel="stylesheet" href="../assets/css/style.css">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

</head>

<body>

<div class="admin-layout">

    <!-- Sidebar -->

    <aside class="sidebar">

        <div class="sidebar-logo">

            <img src="../assets/logo/logo.png" alt="Logo">

            <h2>Tapak Suci</h2>

        </div>

        <ul>

            <li class="active">

                <a href="dashboard.php">

                    <i class="fas fa-gauge"></i>

                    Dashboard

                </a>

            </li>

            <li>

                <a href="anggota/">

                    <i class="fas fa-users"></i>

                    Anggota

                </a>

            </li>

            <li>

                <a href="pelatih/">

                    <i class="fas fa-user-tie"></i>

                    Pelatih

                </a>

            </li>

            <li>

                <a href="prestasi/">

                    <i class="fas fa-trophy"></i>

                    Prestasi

                </a>

            </li>

            <li>

                <a href="galeri/">

                    <i class="fas fa-images"></i>

                    Galeri

                </a>

            </li>

            <li>

                <a href="jadwal/">

                    <i class="fas fa-calendar-days"></i>

                    Jadwal

                </a>

            </li>

            <li>

                <a href="berita/">

                    <i class="fas fa-newspaper"></i>

                    Berita

                </a>

            </li>

            <li>

                <a href="pendaftaran/">

                    <i class="fas fa-file-signature"></i>

                    Pendaftaran

                </a>

            </li>

            <li>

                <a href="logout.php">

                    <i class="fas fa-right-from-bracket"></i>

                    Logout

                </a>

            </li>

        </ul>

    </aside>

    <!-- Content -->

    <main class="admin-content">

        <div class="admin-header">

            <div>

                <h1>Dashboard</h1>

                <p>

                    Selamat datang,

                    <b><?= $_SESSION['nama']; ?></b>

                </p>

            </div>

        </div>

        <div class="dashboard-cards">
                    <!-- Card 1 -->

        <div class="dashboard-card">

            <div class="card-icon red">

                <i class="fas fa-users"></i>

            </div>

            <div class="card-info">

                <h2><?= $totalAnggota; ?></h2>

                <p>Total Anggota</p>

            </div>

        </div>

        <!-- Card 2 -->

        <div class="dashboard-card">

            <div class="card-icon gold">

                <i class="fas fa-user-tie"></i>

            </div>

            <div class="card-info">

                <h2><?= $totalPelatih; ?></h2>

                <p>Total Pelatih</p>

            </div>

        </div>

        <!-- Card 3 -->

        <div class="dashboard-card">

            <div class="card-icon blue">

                <i class="fas fa-trophy"></i>

            </div>

            <div class="card-info">

                <h2><?= $totalPrestasi; ?></h2>

                <p>Total Prestasi</p>

            </div>

        </div>

        <!-- Card 4 -->

        <div class="dashboard-card">

            <div class="card-icon green">

                <i class="fas fa-file-signature"></i>

            </div>

            <div class="card-info">

                <h2><?= $totalPendaftaran; ?></h2>

                <p>Pendaftaran Baru</p>

            </div>

        </div>

    </div>

    <!-- Aktivitas -->

    <div class="dashboard-table">

        <h2>Informasi Dashboard</h2>

        <table>

            <tr>

                <th>Menu</th>

                <th>Status</th>

            </tr>

            <tr>

                <td>Login Admin</td>

                <td>✅ Aktif</td>

            </tr>

            <tr>

                <td>Dashboard</td>

                <td>✅ Aktif</td>

            </tr>

            <tr>

                <td>Database</td>

                <td>✅ Terhubung</td>

            </tr>

            <tr>

                <td>CRUD Data</td>

                <td>⏳ Dalam Pengembangan</td>

            </tr>

        </table>

    </div>

    </main>

</div>

</body>

</html>