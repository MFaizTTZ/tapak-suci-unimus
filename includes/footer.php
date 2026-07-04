<!-- ==========================================
     FOOTER
========================================== -->

<footer id="kontak">

    <div class="container footer-content">

        <!-- Kolom 1 -->

        <div class="footer-box">

            <img src="/tapak-suci-unimus/assets/logo/logo.png"
                 alt="Logo Tapak Suci"
                 style="width:90px;margin-bottom:20px;">

            <h3>UKM TAPAK SUCI</h3>

            <p>

                Unit Kegiatan Mahasiswa Tapak Suci
                Universitas Muhammadiyah Semarang.

                Membentuk mahasiswa yang
                berprestasi, berkarakter,
                disiplin, dan berakhlak mulia.

            </p>

        </div>

        <!-- Kolom 2 -->

        <div class="footer-box">

            <h3>Menu</h3>

            <ul>

                <li><a href="#home">Home</a></li>

                <li><a href="#profil">Profil</a></li>

                <li><a href="#prestasi">Prestasi</a></li>

                <li><a href="#pelatih">Pelatih</a></li>

                <li><a href="#galeri">Galeri</a></li>

                <li><a href="#jadwal">Jadwal</a></li>

            </ul>

        </div>

        <!-- Kolom 3 -->

        <div class="footer-box">

            <h3>Jadwal Latihan</h3>

            <p>

                📅 Senin

                <br>

                19.00 - 21.00 WIB

            </p>

            <br>

            <p>

                📅 Rabu

                <br>

                19.00 - 21.00 WIB

            </p>

            <br>

            <p>

                📅 Jumat

                <br>

                19.00 - 21.00 WIB

            </p>

        </div>

        <!-- Kolom 4 -->

        <div class="footer-box">

            <h3>Kontak</h3>

            <p>

                <i class="fas fa-map-marker-alt"></i>

                Universitas Muhammadiyah Semarang

            </p>

            <br>

            <p>

                <i class="fas fa-phone"></i>

                0812-3456-7890

            </p>

            <br>

            <p>

                <i class="fas fa-envelope"></i>

                tapaksuci@unimus.ac.id

            </p>

            <br>

            <div class="social-icon">

                <a href="#">

                    <i class="fab fa-facebook-f"></i>

                </a>

                <a href="#">

                    <i class="fab fa-instagram"></i>

                </a>

                <a href="#">

                    <i class="fab fa-youtube"></i>

                </a>

                <a href="#">

                    <i class="fab fa-tiktok"></i>

                </a>

            </div>

        </div>

    </div>
        <!-- Footer Bottom -->

    <div class="footer-bottom">

        <p>

            &copy; <?= date('Y'); ?>

            UKM Tapak Suci Universitas Muhammadiyah Semarang.

            All Rights Reserved.

        </p>

    </div>

</footer>

<!-- ==========================================
     BACK TO TOP
========================================== -->

<button id="backToTop">

    <i class="fas fa-arrow-up"></i>

</button>

<!-- ==========================================
     JAVASCRIPT
========================================== -->

<script>

const backToTop = document.getElementById("backToTop");

window.addEventListener("scroll", function(){

    if(window.scrollY > 300){

        backToTop.classList.add("show");

    }else{

        backToTop.classList.remove("show");

    }

});

backToTop.addEventListener("click", function(){

    window.scrollTo({

        top:0,

        behavior:"smooth"

    });

});

</script>

</body>

</html>