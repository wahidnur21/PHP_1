<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Segitiga</title>
</head>

<body>

<?php
require('navbar/kepala.php');
?>

    <p># Luas Segitiga</p>

    <form action="hasil_bangun.php" method="post">

        <div>
            <label for="tinggi">Masukkan Tinggi</label>
            <input type="number" name="tinggi">
        </div>

        <div>
            <label for="alas">Masukkan Alas</label>
            <input type="number" name="alas">
        </div>

        <input type="submit" value="Kirim">

    </form>
</body>

</html>