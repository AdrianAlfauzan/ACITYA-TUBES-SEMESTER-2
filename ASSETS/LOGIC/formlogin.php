<?php
include '../CONFIG/koneksi.php';
session_start(); // Memulai session

if (isset($_SESSION['userID'])) {
    $userID = $_SESSION['userID'];
} else {
    $userID = '';
}

if (isset($_POST['login'])) {
    // Mendapatkan data dari formulir
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Validasi formulir
    if (empty($email) || empty($password)) {
        header('Location: ../../FormLogin.php?error=' . urlencode('Harap isi semua field.'));
        exit;
    }

    // Membuat query untuk memeriksa keberadaan pengguna dengan email dan password yang sesuai
    $query = "SELECT * FROM tabel_pengguna WHERE email = '$email' AND password = '$password'";

    // Menjalankan query
    $result = $koneksi->query($query);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        $_SESSION['userID'] = $user['id'];
        header('Location: ../../index.php');
        exit;
    } else {
        header('Location: ../../FormLogin.php?error=' . urlencode('Login gagal. Email atau password salah.'));
        exit;
    }
}
