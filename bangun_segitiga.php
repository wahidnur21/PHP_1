<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bangun Segitiga</title>
</head>

<body>
    <a href="index.php">Home</a>
    <a href="bmi.php">BMI</a>
    <a href="bangun_segitiga.php">Luas Segitiga</a>
    <a href="keliling_segitiga.php">Keliling Segitiga</a>

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