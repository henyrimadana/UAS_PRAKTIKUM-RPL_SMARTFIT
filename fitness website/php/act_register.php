<?php
include "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];
    $nama_lengkap = $_POST["nama_lengkap"];
    $email = $_POST["email"];
    $level = $_POST["level"];

    // Validasi form
    $errors = array();

    // Jika username telah digunakan
    $query = "SELECT * FROM register WHERE username = '$username'";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        $errors[] = "Username sudah digunakan. Silakan pilih username lain!";
    }

    // Jika konfirmasi password tidak cocok
    if ($password !== $confirm_password) {
        $errors[] = "Ulangi, Password Anda tidak sama!";
    }

    // Jika tidak ada error, simpan data ke database dan tampilkan dalam tabel
    if (empty($errors)) {
        // Enkripsi password menggunakan password_hash()
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Query untuk menyimpan data pengguna ke dalam tabel users
        $insert_query = "INSERT INTO register (username, password, nama_lengkap, email, level) 
        VALUES ('$username', '$hashed_password', '$nama_lengkap', '$email', '$level')";
            
        // Menjalankan query
        if ($conn->query($insert_query) === TRUE) {
        // Menampilkan notifikasi pop-up registrasi berhasil
            echo "<script>";
            echo "alert('Anda Sukses Registrasi!');";
            echo "</script>";
        } else {
            echo "Error: " . $insert_query . "<br>" . $conn->error;
        }    
    } else {
        // Menampilkan pesan error menggunakan notifikasi pop-up
        foreach ($errors as $error) {
            echo "<script>";
            echo "alert('$error');";
            echo "</script>";
        }
    }
}
?>