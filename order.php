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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mendapatkan nilai wisata yang dipilih
    $selectedWisata = $_POST['wisata'];

    // Mendefinisikan harga tiket berdasarkan wisata yang dipilih
    $hargaTicket = 0;
    switch ($selectedWisata) {
        case 'goabelanda':
            $hargaTicket = 100000;
            break;
        case 'kawahputih':
            $hargaTicket = 150000;
            break;
        case 'tebingcitatah':
            $hargaTicket = 70000;
            break;
        case 'tebingkraton':
            $hargaTicket = 350000;
            break;
        case 'guasunyaragi':
            $hargaTicket = 40000;
            break;
        case 'curugbatutemplek':
            $hargaTicket = 330000;
            break;
            // Tambahkan case untuk wisata lainnya sesuai kebutuhan

        default:
            // Jika tidak ada wisata yang dipilih, harga tetap 0
            $hargaTicket = 0;
            break;
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

    <!-- ORDER TICKET AWAL-->
    <div class='wrapper animated bounceIn'>
        <div class='company-info'>
            <h3>Lawrence Web Design</h3>
            <ul>
                <li><i class="fa fa-road"></i> bdg bla bla</li>
                <li><i class="fa fa-phone"></i> (+62) 812-2323-2211</li>
                <li><i class="fa fa-envelope"></i> gmail.com</li>
            </ul>
            <p>Tiket yang dipesan secara online dengan jumlah rombongan di atas 24 orang akan memasuki waiting list. Hal
                ini bertujuan agar menghindari insiden penghabisan kuota tiket oleh orang yang tidak bertanggung jawab.
                Anda wajib menghubungi kontak yang tertera untuk meminta persetujuan konfirmasi tiket, dengan
                menyebutkan nama lengkap, NIK, email, obyek wisata yang dituju, dan tanggal kunjungan. Tiket akan
                disetujui jika data yang disebutkan sudah benar.</p>
        </div>
        <div class='contact'>
            <form method="post">
                <p>
                    <label>Name</label>
                    <input type="text" name='name'>
                </p>

                <p>
                    <label>Tanggal Kunjungan</label>
                    <input type="date" name='tanggal'>
                </p>

                <p>
                    <label>Email Adress</label>
                    <input type="email" name='email'>
                </p>

                <p>
                    <label>Phone Number</label>
                    <input type="text" name='phone'>
                </p>
                <p>
                    <label>Harga Ticket</label>
                    <input type="number" name="ticket" id="hargaTicket" value="<?php echo $hargaTicket; ?>" readonly>
                </p>

                <p>
                    <label for="wisata">Pilih Wisata</label>
                    <select name="wisata" id="dropdown" onchange="updateHargaTicket()">
                        <option selected>--Pilih Wisata--</option>
                        <option value="goabelanda">Goa Belanda</option>
                        <option value="kawahputih">Kawah Putih</option>
                        <option value="tebingcitatah">Tebing Citatah</option>
                        <option value="tebingkraton">Tebing Kraton</option>
                        <option value="guasunyaragi">Gua Sunyaragi</option>
                        <option value="curugbatutemplek">Curug Batu Templek</option>
                    </select>
                </p>

                <!-- Input tersembunyi untuk menyimpan variabel hargaTicket -->
                <input type="hidden" id="hiddenHargaTicket" name="hiddenHargaTicket" value="">

                <p class='full'>
                    <button>Cek Harga</button>
                </p>
            </form>

        </div>
    </div>
    <!-- ORDER TICKET AKHIR -->

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

    <script src="ASSETS/JS/order.js"></script>
    <script src="ASSETS/JS/profile.js"></script>
    <script src="ASSETS/JS/responsivenavbar.js"></script>
    <script>
        function updateHargaTicket() {
            var dropdown = document.getElementById("dropdown");
            var selectedOption = dropdown.options[dropdown.selectedIndex].value;
            var hargaTicket = 0;

            // Assign the corresponding price based on the selected option
            switch (selectedOption) {
                case "goabelanda":
                    hargaTicket = 100000;
                    break;
                case "kawahputih":
                    hargaTicket = 150000;
                    break;
                case "tebingcitatah":
                    hargaTicket = 70000;
                    break;
                case "tebingkraton":
                    hargaTicket = 350000;
                    break;
                case "guasunyaragi":
                    hargaTicket = 40000;
                    break;
                case "curugbatutemplek":
                    hargaTicket = 330000;
                    break;
                default:
                    hargaTicket = 0;
                    break;
            }

            document.getElementById("hargaTicket").value = hargaTicket;
        }
    </script>


</body>

</html>