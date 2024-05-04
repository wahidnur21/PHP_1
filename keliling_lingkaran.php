<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keliling Lingkaran</title>
</head>

<body>
<?php
require('navbar/kepala.php');
?>
<p># Keliling Lingkaran</p>
    <form action="hasil_bangun.php" method="post">
        <div>
            <label for="r1">Masukkan Jari-Jari (cm)</label>
            <input type="number" name="r1">
        </div>

        <input type="submit" value="Kirim">
    </form>
</body>

</html>