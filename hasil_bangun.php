<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Segitiga</title>
</head>

<body>
    <?php

    if (isset($_POST['tinggi']) && $_POST['alas']) {
        $tinggi = $_POST["tinggi"];
        $alas = $_POST["alas"];
        $luas = 0.5 * $alas * $tinggi;

        echo "<h1>Luas segitiga dari alas $alas dan tinggi $tinggi adalah $luas</h1>";
    } else if (isset($_POST['sisi1']) && $_POST['sisi2'] && $_POST['sisi3']) {
        $s1 = $_POST["sisi1"];
        $s2 = $_POST["sisi2"];
        $s3 = $_POST["sisi3"];
        $keliling = $s1 + $s2 + $s3;

        echo "<h1>Keliling segitigamu adalah $keliling</h1>";
    } else if (isset($_POST['r'])) {
        $jari = $_POST["r"];
        $luaslingkaran = 3.14 * $jari * $jari;

        echo "<h1>Luas lingkaranmu adalah $luaslingkaran</h1>";
    } else if (isset($_POST['r1'])) {
        $jari = $_POST["r1"];
        $kelilinglingkaran = 2 * 3.14 * $jari;

        echo "<h1>Keliling lingkaranmu adalah $kelilinglingkaran</h1>";
    } else if (isset($_POST['sisi'])) {
        $sisi = $_POST["sisi"];
        $luaspersegi = $sisi * $sisi * $sisi;

        echo "<h1>Luas persegimu adalah $luaspersegi</h1>";
    } else if (isset($_POST['panjang']) && $_POST['lebar']) {
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $luasperpan = $panjang * $lebar;

        echo "<h1>Luas perpan mu adalah $luasperpan</h1>";
    } else if (isset($_POST['sisiK'])) {
        $sisiK = $_POST["sisiK"];
        $kelilingpersegi = 4 * $sisiK;

        echo "<h1>Keliling persegi mu adalah $kelilingpersegi</h1>";
    } else if (isset($_POST['panjangK']) && $_POST['lebarK']) {
        $panjangK = $_POST["panjangK"];
        $lebarK = $_POST["lebarK"];
        $kelilingperpan = 2 * ($panjangK + $lebarK);

        echo "<h1>Keliling perpan mu adalah $kelilingperpan</h1>";
    }
    ?>
</body>

</html>