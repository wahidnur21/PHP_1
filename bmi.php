<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
</head>

<body>
<?php
require('navbar/kepala.php');
?>
<p> ~{ PENGHITUNGAN BMI }~</p>
    <form action="hasil.php" method="post">
        <div>
            <label for="nama">Masukkan Nama</label>
            <input type="text" name="nama">
        </div>

        <div>
            <label for="tinggi">Masukkan Tinggi</label>
            <input type="number" name="tinggi">
        </div>

        <div>
            <label for="berat">Masukkan Berat</label>
            <input type="number" name="berat">
        </div>

        <input type="submit" value="Kirim">
    </form>
</body>

</html>