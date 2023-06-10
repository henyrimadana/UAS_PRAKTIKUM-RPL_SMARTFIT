<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Form Fitness</title>
  <link rel="stylesheet" href="formfitness.css">
</head>
<body>
<form method="POST" action="intruksi_fitness.php">
  <div class="form-group">
    <label for="kode_fitness">Kode Fitness:</label>
    <input type="text" id="kode_fitness" name="kode_fitness" required>
  </div>
  <div class="form-group">
    <label for="jenis_fitness">Jenis Fitness:</label>
    <input type="text" id="jenis_fitness" name="jenis_fitness" required>
  </div>
  <input type="submit" value="Submit" class="btn solid">
</form>
</body>
</html>


