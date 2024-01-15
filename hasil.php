<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil</title>

    <style>
        .danger {
            color: red;
        }

        .safe {
            color: rgb(10, 243, 68)
        }

        .standart {
            color: orange;
        }
    </style>
</head>

<body>
    <?php
    $nama = $_POST["nama"];
    $tinggi = $_POST["tinggi"] / 100;
    $berat = $_POST["berat"];

    $bmi = $berat / ($tinggi * $tinggi);
    ?>

    <h1>Nilai BMI kamu adalah : <?= $bmi; ?></h1>

    <?php
    if ($bmi < 18.5) {
        echo "<b class='danger'>$nama, Berat badanmu kureng!</b>";
    } else if ($bmi < 22.9) {
        echo "<b class='safe'>$nama, Berat badanmu normal</b>";
    } else if ($bmi < 29.9) {
        echo "<b class='standart'>$nama, Berat badanmu berlebih</b>";
    } else if ($bmi >= 30) {
        echo "<b class='danger'>$nama, Kamu obesitas!!</b>";
    }
    ?>

    <p>Standar kategori berat badan pria dan wanita menurut WHO adalah : 18.5 - 22.9</p>
</body>

</html>