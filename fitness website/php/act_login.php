<?php
session_start();
include "connection.php";
$username = $_POST['username'];
$password = $_POST['password'];

$op = $_GET['op'];

if ($op == "in") {
    $query_1 = "SELECT * FROM register WHERE username='$username'";
    $h_1 = $conn->query($query_1);
    if (mysqli_num_rows($h_1) == 1) {
        $d_1 = $h_1->fetch_array();
        $stored_password = $d_1['password'];

        // Memeriksa kecocokan password yang diberikan dengan password yang tersimpan di database
        if (password_verify($password, $stored_password)) {
            $_SESSION['username'] = $d_1['username'];
            // $_SESSION['level'] = $d_1['level'];
            // if ($d_1['level'] == "admin" || $d_1['level'] == "mahasiswa" || $d_1['level'] == "dosen") {
            //     header("location: home.php");
            // } else {
            //     die("Tidak memiliki level yang valid. <a href=\"javascript:history.back()\">Kembali</a>");
            // }
        } else {
            die("Password salah. <a href=\"javascript:history.back()\">Kembali</a>");
        }
    } else {
        die("Username tidak ditemukan. <a href=\"javascript:history.back()\">Kembali</a>");
    }
} elseif ($op == "out") {
    unset($_SESSION['username']);
    unset($_SESSION['level']);
    header("location: login.html");
}
?>
