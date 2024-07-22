<?php
include 'ASSETS/PARTIALS/header.php';

session_start();
include 'ASSETS/CONFIG/koneksi.php';

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['userID'])) {
  header('Location: FormLogin.php');
  exit;
}

// Mendapatkan ID pengguna dari session
$userID = $_SESSION['userID'];
?>



<!-- CAROUSEL -->
<div class="slider_container">
  <!-- <div class="search-box">
    <button class="btn-search">
      <i class="bi bi-search"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
          <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
        </svg></i>
    </button>
    <input type="text" class="input-search" placeholder="What're You Looking for?" />
  </div> -->
  <div class="hero">
    <hgroup>
      <h1 style="color: white;">We are creative</h1>
      <h3 style="color: white;">Get your experience right now</h3>
    </hgroup>
    <button class="btn btn-hero btn-lg" role="button"><a href="index.html"> LEARN MORE </a></button>
  </div>
  <div class="slider">
    <img src="https://images.wallpaperscraft.com/image/single/mountains_trees_sky_338603_1600x900.jpg" alt="img1" />
    <img src="https://images.wallpaperscraft.com/image/single/rock_silhouette_sea_338182_1600x900.jpg" alt="img2" />

    <img src="https://images.wallpaperscraft.com/image/single/pier_house_horizon_338212_1600x900.jpg" alt="img3" />
  </div>
  <div class="indicator">
    <span class="btn1 dots"></span>
    <span class="btn2 dots"></span>
    <span class="btn3 dots"></span>
  </div>
</div>
<!-- //CAROUSEL -->

<!-- CARD AWAL -->
<!-- <div>
    <h1 align="center" class="animasi-huruf">Hallo world </h1>
  </div> -->
<!-- CARD AKHIR -->

<script src="ASSETS/JS/profile.js"></script>
<?php
include 'ASSETS/PARTIALS/footer.php';

?>