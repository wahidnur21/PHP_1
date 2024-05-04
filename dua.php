<?php

$contoh_data_array = array("bintang", "raffi", "zidane", "ihsan", "danang");

$data_array1 = ["bintang", "raffi", "zidane", "ihsan", "danang"];

$array_associative = [
    "siswa1" => "bintang",
    "siswa2" => "raffi",
    "siswa3" => "ihsan"
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Dua</title>

    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>
<?php
require('navbar/kepala.php');
?>
    <a href="bangun_segitiga.php">Luas Segitiga</a>
    <a href="keliling_segitiga.php">Keliling Segitiga</a>

    <ul>
        <?php
        for ($i = 0; $i < count($data_array1); $i++) {

            echo "<li>$data_array1[$i]</li>";
        }

        ?>
    </ul>
    <br>

    <ul>
        <?php
        foreach ($data_array1 as $siji)

            echo "<li>$siji</li>";
        ?>

    </ul>
    <br>

    <ul>
        <?php
        for ($i = 0; $i < count($data_array1); $i++) {
        ?>

            <li>
                <?= $data_array1[$i] ?>
            </li>

        <?php
        }
        ?>

    </ul>
</body>

</html>