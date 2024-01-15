<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keliling Segitiga</title>
</head>

<body>
    <a href="index.php">Home</a>
    <a href="bmi.php">BMI</a>
    <a href="bangun_segitiga.php">Luas Segitiga</a>

    <form action="hasil_bangun.php" method="post">

        <div>
            <label for="sisi1">Masukkan Sisi 1</label>
            <input type="number" name="sisi1">
        </div>

        <div>
            <label for="sisi2">Masukkan Sisi 2</label>
            <input type="number" name="sisi2">
        </div>

        <div>
            <label for="sisi3">Masukkan Sisi 3</label>
            <input type="number" name="sisi3">
        </div>

        <input type="submit" value="Kirim">

    </form>
</body>

</html>