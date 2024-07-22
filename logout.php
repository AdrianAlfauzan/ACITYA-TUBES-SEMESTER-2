<?php
session_start(); // Memulai session

// Hapus semua data session
$_SESSION = array();

// Hapus cookie session jika ada
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}

// Hancurkan session
session_destroy();

// Redirect ke halaman login atau halaman lain sesuai kebutuhan
header('Location: FormLogin.php');
exit;
