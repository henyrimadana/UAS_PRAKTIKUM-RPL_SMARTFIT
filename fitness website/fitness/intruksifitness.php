<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Form Fitness</title>
  <link rel="stylesheet" href="formfitness.css">
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai input dari form
    $kodeFitness = $_POST['kode_fitness'];
    $jenisFitness = $_POST['jenis_fitness'];

    // Lakukan pemrosesan data sesuai kebutuhan
    // Misalnya, simpan data ke database atau lakukan operasi lainnya

    // Tampilkan pesan sukses atau lakukan tindakan lainnya setelah pemrosesan data

    echo "Data berhasil diproses. Kode Fitness: " . $kodeFitness . ", Jenis Fitness: " . $jenisFitness;
}
?>

</body>
</html>

