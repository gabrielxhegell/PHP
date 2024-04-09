<?php
session_start();

// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "userlogin";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Query untuk mencari data user berdasarkan username dan password
$sql = "SELECT * FROM account WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

// Jika ditemukan data yang sesuai, buat session dan redirect ke halaman beranda
if ($result->num_rows > 0) {
    $_SESSION['username'] = $username;
    header("Location: ToDoList.php");
} else {
    // Jika tidak ditemukan, tampilkan pesan error
    header("Location: Login.php?error=1");

}

$conn->close();
?>