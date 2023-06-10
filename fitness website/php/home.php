<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <?php
    session_start();
    include "connection.php";
    error_reporting(E_ALL^(E_NOTICE|E_WARNING));
    if (!isset($_SESSION['username'])) {
        die("Anda belum login");
    }
    $username = $_SESSION['username'];
    $level = $_SESSION['level'];
    if ($level == 'admin') {
        echo "Anda Sebagai " . $level;
    } elseif ($level == 'mahasiswa') {
        echo "Anda Sebagai " . $level;
    } elseif ($level == 'dosen') {
        echo "Anda Sebagai " . $level;
    }
    ?>

<form method="POST">
    <table>
        <tr>
            <td><input type="submit" name="action" value="Upload Document"></td>
        </tr>
        <tr>
            <td><input type="submit" name="action" value="View Document"></td>
        </tr>
    </table>
</form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["action"] == "Upload Document") {
            header("Location: upload.php");
            exit;
        } elseif ($_POST["action"] == "View Document") {
            header("Location: view_document.php");
            exit;
        }
    }
    ?>
</body>
</html>
