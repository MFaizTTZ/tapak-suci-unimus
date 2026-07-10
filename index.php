<?php

$pageTitle = "Beranda";

include 'includes/header.php';

include 'includes/navbar.php';

?>

<!-- ==========================================
     HERO SECTION
========================================== -->

<section class="hero" id="home">

    <div class="container">

        <div class="hero-content">

            <h1>

                Membentuk

                <span>Pesilat</span>

                Yang Berprestasi,
                Berkarakter,
                dan Berakhlak Mulia

            </h1>

            <p>

                Unit Kegiatan Mahasiswa Tapak Suci
                Universitas Muhammadiyah Semarang.

                Wadah pembinaan mahasiswa
                dalam seni bela diri,
                olahraga,
                dakwah,
                serta pengembangan karakter.

            </p>

            <div style="margin-top:35px;">

                <a href="#pendaftaran" class="btn btn-primary">

                    <i class="fas fa-user-plus"></i>

                    Gabung Sekarang

                </a>

                &nbsp;

                <a href="#profil" class="btn btn-outline">

                    <i class="fas fa-circle-info"></i>

                    Tentang Kami

                </a>

            </div>

        </div>

    </div>

</section>

<!-- ==========================================
     ABOUT
========================================== -->

<section class="about" id="profil">

    <div class="container">

        <h2 class="section-title">

            Tentang Tapak Suci

        </h2>

        <p class="section-subtitle">

            Mengenal lebih dekat UKM Tapak Suci
            Universitas Muhammadiyah Semarang.

        </p>

        <div class="about-content">

            <div class="about-image">

                <img src="assets/images/about.jpg"
                     alt="Tapak Suci">

            </div>

            <div class="about-text">

                <h3>

                    UKM Bela Diri
                    Berprestasi

                </h3>

                <p>

                    Tapak Suci Putera Muhammadiyah
                    merupakan organisasi bela diri
                    yang mengedepankan nilai-nilai
                    keislaman,
                    sportivitas,
                    disiplin,
                    serta akhlak mulia.

                </p>

                <p>

                    UKM Tapak Suci UNIMUS
                    menjadi wadah bagi mahasiswa
                    untuk mengembangkan kemampuan
                    bela diri,
                    kepemimpinan,
                    kerja sama,
                    serta prestasi
                    di tingkat regional
                    maupun nasional.

                </p>

                <a href="#prestasi"
                   class="btn btn-primary">

                    Lihat Prestasi

                </a>

            </div>

        </div>

    </div>

</section>
<!-- ==========================================
     VISI MISI
========================================== -->

<section class="visi-misi">

    <div class="container">

        <h2 class="section-title">

            Visi & Misi

        </h2>

        <p class="section-subtitle">

            Menjadi UKM bela diri yang unggul, berprestasi,
            dan berlandaskan nilai-nilai Islam.

        </p>

        <div class="about-content">

            <!-- VISI -->

            <div class="prestasi-card">

                <div class="prestasi-body">

                    <h3>

                        <i class="fas fa-eye"
                           style="color:#C1121F;"></i>

                        Visi

                    </h3>

                    <p>

                        Menjadikan UKM Tapak Suci
                        Universitas Muhammadiyah Semarang
                        sebagai organisasi mahasiswa
                        yang mampu mencetak pesilat
                        berprestasi,
                        berkarakter,
                        disiplin,
                        dan menjunjung tinggi
                        nilai-nilai Islam.

                    </p>

                </div>

            </div>

            <!-- MISI -->

            <div class="prestasi-card">

                <div class="prestasi-body">

                    <h3>

                        <i class="fas fa-bullseye"
                           style="color:#D4AF37;"></i>

                        Misi

                    </h3>

                    <ul style="margin-top:20px; line-height:2; color:#555;">

                        <li>✔ Membina kemampuan bela diri mahasiswa.</li>

                        <li>✔ Menanamkan akhlak dan kedisiplinan.</li>

                        <li>✔ Mengikuti berbagai kejuaraan.</li>

                        <li>✔ Menjalin solidaritas antar anggota.</li>

                        <li>✔ Mendukung dakwah Muhammadiyah melalui olahraga.</li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ==========================================
     STATISTIK
========================================== -->

<section class="stats">

    <div class="container">

        <div class="stats-grid">

            <div class="stat-card">

                <h2 class="counter" data-target="120">

                    0

                </h2>

                <p>

                    Anggota Aktif

                </p>

            </div>

            <div class="stat-card">

                <h2 class="counter" data-target="3">

                    0

                </h2>

                <p>

                    Pelatih

                </p>

            </div>

            <div class="stat-card">

                <h2 class="counter" data-target="40">

                    0

                </h2>

                <p>

                    Prestasi

                </p>

            </div>

            <div class="stat-card">

                <h2 class="counter" data-target="5">

                    0

                </h2>

                <p>

                    Jadwal Latihan / Minggu

                </p>

            </div>

        </div>

    </div>

</section>

<!-- ==========================================
     COUNTER ANIMATION
========================================== -->

<script>

const counters = document.querySelectorAll('.counter');

counters.forEach(counter=>{

    counter.innerText='0';

    const updateCounter=()=>{

        const target=+counter.getAttribute('data-target');

        const c=+counter.innerText;

        const increment=target/80;

        if(c<target){

            counter.innerText=Math.ceil(c+increment);

            setTimeout(updateCounter,20);

        }else{

            counter.innerText=target;

        }

    };

    updateCounter();

});

</script>
<!-- ==========================================
     PRESTASI
========================================== -->

<section id="prestasi">

    <div class="container">

        <h2 class="section-title">

            Prestasi Terbaru

        </h2>

        <p class="section-subtitle">

            Berbagai prestasi yang telah diraih
            UKM Tapak Suci Universitas Muhammadiyah Semarang.

        </p>

        <div class="prestasi-grid">

            <!-- Prestasi 1 -->

            <div class="prestasi-card">

                <img src="assets/images/prestasi1.jpg"
                     alt="Prestasi">

                <div class="prestasi-body">

                    <h3>

                        Juara 1 Kejuaraan Nasional

                    </h3>

                    <p>

                        Mahasiswa UKM Tapak Suci berhasil
                        meraih Juara 1 kategori Tanding
                        pada Kejuaraan Nasional Tapak Suci
                        Tahun 2025.

                    </p>

                </div>

            </div>

            <!-- Prestasi 2 -->

            <div class="prestasi-card">

                <img src="assets/images/prestasi2.jpg"
                     alt="Prestasi">

                <div class="prestasi-body">

                    <h3>

                        Juara Umum Tingkat Jawa Tengah

                    </h3>

                    <p>

                        UKM Tapak Suci UNIMUS memperoleh
                        gelar Juara Umum dalam Kejuaraan
                        Wilayah Jawa Tengah.

                    </p>

                </div>

            </div>

            <!-- Prestasi 3 -->

            <div class="prestasi-card">

                <img src="assets/images/prestasi3.jpg"
                     alt="Prestasi">

                <div class="prestasi-body">

                    <h3>

                        Atlet Berprestasi

                    </h3>

                    <p>

                        Atlet UKM Tapak Suci berhasil
                        membawa pulang medali emas
                        pada ajang Pekan Olahraga Mahasiswa.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- ==========================================
     PELATIH
========================================== -->

<section id="pelatih" class="schedule">

    <div class="container">

        <h2 class="section-title">

            Pelatih Kami

        </h2>

        <p class="section-subtitle">

            Dibimbing oleh pelatih yang berpengalaman
            dan berkompeten di bidangnya.

        </p>

        <div class="prestasi-grid">

            <!-- Pelatih 1 -->

            <div class="prestasi-card">

                <img src="assets/images/pelatih1.jpg"
                     alt="Pelatih">

                <div class="prestasi-body">

                    <h3>

                        Budiyono 

                    </h3>

                    <p>

                        Pelatih Utama

                    </p>

                </div>

            </div>

            <!-- Pelatih 2 -->

            <div class="prestasi-card">

                <img src="assets/images/pelatih2.jpg"
                     alt="Pelatih">

                <div class="prestasi-body">

                    <h3>

                        Krisna Wijaya

                    </h3>

                    <p>

                        Pelatih Fighter

                    </p>

                </div>

            </div>

            <!-- Pelatih 3 -->

            <div class="prestasi-card">

                <img src="assets/images/pelatih3.jpg"
                     alt="Pelatih">

                <div class="prestasi-body">

                    <h3>

                        Arif Mustofa

                    </h3>

                    <p>

                        Pelatih Seni

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>
<!-- ==========================================
     GALERI
========================================== -->

<section id="galeri">

    <div class="container">

        <h2 class="section-title">
            Galeri Kegiatan
        </h2>

        <p class="section-subtitle">
            Dokumentasi latihan, perlombaan, dan kegiatan UKM Tapak Suci UNIMUS.
        </p>

        <div class="gallery-grid">

            <img src="assets/images/gallery1.jpg" alt="Galeri 1">

            <img src="assets/images/gallery2.jpg" alt="Galeri 2">

            <img src="assets/images/gallery3.jpg" alt="Galeri 3">

            <img src="assets/images/gallery4.jpg" alt="Galeri 4">

            <img src="assets/images/gallery5.jpg" alt="Galeri 5">

            <img src="assets/images/gallery6.jpg" alt="Galeri 6">

        </div>

    </div>

</section>

<!-- ==========================================
     JADWAL
========================================== -->

<section class="schedule" id="jadwal">

    <div class="container">

        <h2 class="section-title">
            Jadwal Latihan
        </h2>

        <p class="section-subtitle">
            Jadwal latihan rutin UKM Tapak Suci Universitas Muhammadiyah Semarang.
        </p>

        <table class="schedule-table">

            <thead>

                <tr>

                    <th>Hari</th>

                    <th>Jam</th>

                    <th>Lokasi</th>

                    <th>Pelatih</th>

                </tr>

            </thead>

            <tbody>

                <tr>

                    <td>Senin</td>

                    <td>19.00 - 22.00</td>

                    <td>Gedung Serbaguna(GSG) UNIMUS</td>

                    <td>Budiyono</td>

                </tr>

                <tr>

                    <td>Kamis</td>

                    <td>19.00 - 22.00</td>

                    <td>Gedung Serbaguna(GSG) UNIMUS</td>

                    <td>Budiyono</td>

                </tr>

                <tr>

                    <td>Jumat</td>

                    <td>19.00 - 21.00</td>

                    <td>Pendopo</td>

                    <td>Krisna Wijaya</td>

                </tr>

            </tbody>

        </table>

    </div>

</section>

<!-- ==========================================
     PENDAFTARAN
========================================== -->

<section id="pendaftaran">

    <div class="container">

        <h2 class="section-title">
            Pendaftaran Anggota Baru
        </h2>

        <p class="section-subtitle">
            Isi formulir berikut untuk bergabung menjadi anggota UKM Tapak Suci UNIMUS.
        </p>

        <form class="contact-form">

            <input
                type="text"
                placeholder="Nama Lengkap"
                required>

            <input
                type="email"
                placeholder="Email"
                required>

            <input
                type="text"
                placeholder="NIM"
                required>

            <input
                type="text"
                placeholder="Program Studi"
                required>

            <input
                type="text"
                placeholder="Nomor WhatsApp"
                required>

            <textarea
                rows="5"
                placeholder="Alasan ingin bergabung"></textarea>

            <button
                class="btn btn-primary"
                type="submit">

                Daftar Sekarang

            </button>

        </form>

    </div>

</section>

<?php

include 'includes/footer.php';

?>
