<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>

    <style>
        body {
            background-image: url(images/download.jfif);
        }

        .warna {
            color: yellow;
            margin: 0;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
    </style>
</head>

<body>

    <ul>
        <li>
            <a href="index.php">Home</a>
        </li>
        <li>
            <a href="bmi.php">BMI</a>
        </li>
        <li>
            <a href="bangun_segitiga.php">Luas Segitiga</a>
        </li>
        <li>
            <a href="keliling_segitiga.php">Keliling Segitiga</a>
        </li>
        <li>
            <a href="luas_lingkaran.php">Luas Lingkaran</a>
        </li>
        <li>
            <a href="keliling_lingkaran.php">Keliling Lingkaran</a>
        </li>
        <li>
            <a href="luas_persegi.php">luas persegi</a>
        </li>
        <li>
            <a href="luas_perpan.php">luas persegi panjang</a>
        </li>
        <li>
            <a href="keliling_persegi.php">Keliling Persegi</a>
        </li>
        <li>
            <a href="keliling_persegipanjang.php">Keliling Persegi Panjang</a>
        </li>
    </ul>

    <?php
    $nama = "Raffi";
    $alamat = "Jl. Satrio Husada";
    $citacita = "Penakluk Hati";
    $status = "Masih Sendiri";
    $agama = "Alhamdulillah Islam";
    $jkel = "Lanang";

    echo "<h1 class='warna'>Nama: $nama</h1>";
    echo "<h1 class='warna'>Alamat: $alamat</h1>";
    echo "<h1 class='warna'>Cita-cita: $citacita</h1>";
    echo "<h1 class='warna'>Status: $status</h1>";
    echo "<h1 class='warna'>Agama: $agama</h1>";
    echo "<h1 class='warna'>Jenis Kelamin: $jkel</h1>";
    ?>
</body>

</html>