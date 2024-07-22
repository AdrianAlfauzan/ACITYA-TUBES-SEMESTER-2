<?php
include '../CONFIG/koneksi.php';
ob_start(); // Memulai session

// Memeriksa apakah ada permintaan POST yang dikirimkan
if (isset($_POST['submit'])) {
    // Mengambil nilai dari elemen input dengan menggunakan variabel $_POST
    $name = $_POST["name"];
    $email = $_POST["email"];
    $comment = $_POST["comment"];

    // Validasi pengisian formulir
    if (empty($name) || empty($email) || empty($comment)) {
        $error = "Harap lengkapi semua field.";
        echo '<script>alert("' . $error . '"); window.location.href = "contact.php";</script>';
        exit; // Keluar dari skrip jika terjadi kesalahan
    }

    // Memeriksa apakah koneksi berhasil
    if ($koneksi->connect_error) {
        die("Koneksi gagal: " . $koneksi->connect_error);
    }

    // Menyiapkan pernyataan SQL untuk memasukkan data ke dalam tabel
    $sql = "INSERT INTO contact (name, email, comment) VALUES ('$name', '$email', '$comment')";

    // Menjalankan pernyataan SQL
    if ($koneksi->query($sql) === TRUE) {
        echo "Data berhasil disimpan ke database.";
        header("Location: /TUGAS_WEB/contact.php"); // Mengarahkan pengguna kembali ke halaman contact.php
        exit; // Keluar dari skrip setelah mengarahkan pengguna
    } else {
        echo "Error: " . $sql . "<br>" . $koneksi->error;
    }
}
