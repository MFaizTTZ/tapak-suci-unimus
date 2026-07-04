<!-- ==========================================
     NAVBAR
========================================== -->

<nav class="navbar" id="navbar">

    <div class="container nav-container">

        <!-- Logo -->

        <a href="/tapak-suci-unimus/" class="logo">

            <img src="/tapak-suci-unimus/assets/logo/logo.png" alt="Logo Tapak Suci">

            <div class="logo-text">

                <h2>UKM TAPAK SUCI</h2>

                <span>Universitas Muhammadiyah Semarang</span>

            </div>

        </a>

        <!-- Menu -->

        <ul class="nav-menu">

            <li>
                <a href="/tapak-suci-unimus/index.php">
                    Home
                </a>
            </li>

            <li>
                <a href="#profil">
                    Profil
                </a>
            </li>

            <li>
                <a href="#prestasi">
                    Prestasi
                </a>
            </li>

            <li>
                <a href="#pelatih">
                    Pelatih
                </a>
            </li>

            <li>
                <a href="#galeri">
                    Galeri
                </a>
            </li>

            <li>
                <a href="#jadwal">
                    Jadwal
                </a>
            </li>

            <li>
                <a href="#pendaftaran">
                    Pendaftaran
                </a>
            </li>

            <li>
                <a href="#kontak">
                    Kontak
                </a>
            </li>

        </ul>

        <!-- Tombol -->

        <a href="/tapak-suci-unimus/pendaftaran/" class="btn btn-primary">

            Gabung Sekarang

        </a>

    </div>

</nav>
<!-- ==========================================
     HAMBURGER MENU
========================================== -->

<div class="mobile-menu" id="mobileMenu">

    <i class="fas fa-bars"></i>

</div>

<!-- ==========================================
     JAVASCRIPT NAVBAR
========================================== -->

<script>

const navbar = document.getElementById("navbar");

window.addEventListener("scroll", function(){

    if(window.scrollY > 50){

        navbar.classList.add("scrolled");

    }else{

        navbar.classList.remove("scrolled");

    }

});

const mobileMenu = document.getElementById("mobileMenu");

const navMenu = document.querySelector(".nav-menu");

mobileMenu.addEventListener("click", function(){

    navMenu.classList.toggle("active");

    if(navMenu.classList.contains("active")){

        mobileMenu.innerHTML='<i class="fas fa-times"></i>';

    }else{

        mobileMenu.innerHTML='<i class="fas fa-bars"></i>';

    }

});

document.querySelectorAll(".nav-menu a").forEach(item=>{

    item.addEventListener("click",()=>{

        navMenu.classList.remove("active");

        mobileMenu.innerHTML='<i class="fas fa-bars"></i>';

    });

});

</script>