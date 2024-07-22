<?php
session_start();
include 'ASSETS/CONFIG/koneksi.php';

// Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['userID'])) {
    header('Location: FormLogin.php');
    exit;
}

// Mendapatkan ID pengguna dari session
$userID = $_SESSION['userID'];

// Mengambil data pengguna dari database berdasarkan ID
$query = "SELECT * FROM tabel_pengguna WHERE id = '$userID'";
$result = $koneksi->query($query);

if ($result->num_rows == 1) {
    $user = $result->fetch_assoc();
    $fullname = $user['fullname'];
    $email = $user['email'];
    $phonenumber = $user['phonenumber'];
    $password = $user['password'];
    // ... tambahkan data pengguna lainnya sesuai kebutuhan
} else {
    // Jika pengguna tidak ditemukan, maka lakukan tindakan yang sesuai, seperti mengarahkan ke halaman login
    header('Location: FormLogin.php');
    exit;
}

// Proses pembaruan data pengguna
if (isset($_POST['save'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];

    // Lakukan validasi atau sanitasi data jika diperlukan

    // Update data pengguna ke database
    $updateQuery = "UPDATE tabel_pengguna SET fullname = '$fullname', email = '$email', phonenumber = '$phonenumber', password = '$password' WHERE id = '$userID'";
    $updateResult = $koneksi->query($updateQuery);

    if ($updateResult) {
        echo '<script>alert("Data pengguna berhasil diperbarui.");</script>';
    } else {
        echo '<script>alert("Terjadi kesalahan saat memperbarui data pengguna.");</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ASSETS/CSS/index.css">
    <link rel="stylesheet" href="ASSETS/CSS/profilesetting.css">
    <link rel="stylesheet" href="ASSETS/CSS/order.css">

    <!-- FAVICON -->
    <link rel="shortcut icon" href="ASSETS/images/icon.jpeg" />
    <!-- /FAVICON -->

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />

    <!-- fontawesome.cdn for ICONS-->

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <!--animatecss.cdn for ANIMATION-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.css" />
    <!-- /BOOTSTRAP -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />


</head>

<body>
    <!-- NAVBAR -->
    <nav>
        <div class="logo">
            <img src="ASSETS/images/ACITYA.jpg" alt="logo">
        </div>
        <div class="judul">
            <h4><a href="FormLogin.html">ACITYA</a></h4>
        </div>
        <ul>
            <li><a href="index.php">HOME</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="artikel.php">ARTIKEL</a></li>
            <li><a href="order.php">ORDER</a></li>
            <li><button class="btn" id="btn" style="background-color: #16161a; color: orange;">
                    <i class="bx bx-user" style="font-size: 20px;"></i>

                    <i class="bx bx-chevron-down" id="arrow"></i>
                </button>
                <div class="dropdown" style="background-color: #16161a;" id="dropdown">
                    <a style="color: orange;" href="profilesetting.php">
                        <i class="bx bxs-user-account"></i>
                        Profile Settings
                    </a>
                    <a style="color: orange;" href="FormLogin.php">
                        <i class="bx bx-power-off"></i>
                        Logout
                    </a>
                </div>
            </li>
        </ul>
        <div class="menu-toggle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
    <!-- /NAVBAR -->

    <!-- PROFILE SETTING AWAL -->
    <div class='wrapper animated bounceIn'>
        <div class='company-info'>
            <a href="#" class="nav-link active mt-auto">
                <!-- <i class="far fa-user-circle"></i> -->
                <span> FULL STACK DEVELOPER</span>
                <img src="ASSETS/images/ACITYA.jpg" alt="Profile Picture" class="profile-picture" style="border-radius: 50%; margin-top:40px">
            </a>
        </div>
        <div class='contact'>
            <div class="col-md-9">
                <!-- Formulir Pengaturan Profil -->
                <form method="POST">
                    <div class="form-group">
                        <label for="fullname">Full Name</label>
                        <input type="text" name="fullname" class="form-control" id="fullname" value="<?php echo $fullname; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" value="<?php echo $email; ?>" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="phonenumber">Phone Number</label>
                        <input type="number" name="phonenumber" value="<?php echo $phonenumber; ?>" class="form-control" id="phonenumber">
                    </div>
                    <div class="form-group">
                        <label for="password">Change Password</label>
                        <input type="password" name="password" value="<?php echo $password; ?>" class="form-control" id="password">
                    </div>

                    <div class="setting">
                        <div class="settingsave">
                            <button type="submit" name="save" class="btn btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- PROFILE SETTING AKHIR -->

    <!-- FOOTER -->
    <footer class="footer-distributed">
        <div class="footer-left">
            <img src="/TUGAS_WEB/ASSETS/images/Lambang-Unjani.png" style="margin:-10px 160px 30px" />
            <p class="footer-company-name">© 2021 By Adrian Musa Alfauzan</p>
        </div>

        <div class="footer-center">
            <div class="map">
                <i class="fa fa-map-marker"></i>
                <p><span>808 - Kota Bandung, Bldg. No. K - 5, Sector - 33</span> Bandung, Jawa Barat - 400710</p>
            </div>

            <div style="margin-left: -160px;">
                <i class="fa fa-phone"></i>
                <p>+62 878 2112 1706</p>
            </div>
            <div style="margin-left: -104px;">
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:stalkerxstalk@gmail.com">stalkerxstalk@gmail.com</a></p>
            </div>
        </div>
        <div class="footer-right">
            <p class="footer-company-about">
                <span>About the company</span>
                We offer training and skill building courses across Technology, Design, Management, Science and
                Humanities.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-linkedin"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
    </footer>
    <!-- /FOOTER -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="ASSETS/JS/order.js"></script>
    <script src="ASSETS/JS/profile.js"></script>
    <script src="ASSETS/JS/responsivenavbar.js"></script>
    <script src="ASSETS/JS/profilesetting.js"></script>
</body>

</html>