<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RESPONSIVE WEB</title>
    <!-- MY CSS -->
    <link rel="stylesheet" href="ASSETS/CSS/index.css" />
    <link rel="stylesheet" href="ASSETS/CSS/contact.css" />
    <link rel="stylesheet" href="ASSETS/CSS/artikel.css">
    <!-- /MY CSS -->

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- /GOOGLE FONT -->

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />
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

                    <a style="color: orange;" href="logout.php">
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