<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keliling Persegi</title>
</head>

<body>
<?php
require('navbar/kepala.php');
?>
<p># Keliling Persegi</p>
    <form action="hasil_bangun.php" method="post">
        <div>
            <label for="sisiK">Masukkan Sisi Persegi</label>
            <input type="number" name="sisiK">
        </div>

        <input type="submit" value="Kirim">
    </form>
</body>

</html>