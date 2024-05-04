<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Luas Lingkaran</title>
</head>

<body>
<?php
require('navbar/kepala.php');
?>
    <p>#  Luas Lingkaran</p>


    <form action="hasil_bangun.php" method="post">
        <div>
            <label for="r">Masukkan Jari-Jari (cm)</label>
            <input type="number" name="r">
        </div>

        <input type="submit" value="Kirim">
    </form>
</body>

</html>