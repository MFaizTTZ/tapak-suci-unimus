<?php

include "config/database.php";

/*
====================================
AMBIL DATA WEBSITE
====================================
*/

// Jumlah Anggota
$totalAnggota = mysqli_fetch_assoc(
mysqli_query($conn,
"SELECT COUNT(*) AS total FROM anggota")
);

// Jumlah Prestasi
$totalPrestasi = mysqli_fetch_assoc(
mysqli_query($conn,
"SELECT COUNT(*) AS total FROM prestasi")
);

// 3 Berita Terbaru
$berita = mysqli_query($conn,
"SELECT *
FROM berita
ORDER BY id_berita DESC
LIMIT 3");

// 3 Prestasi Terbaru
$prestasi = mysqli_query($conn,
"SELECT *
FROM prestasi
ORDER BY id_prestasi DESC
LIMIT 3");

?>