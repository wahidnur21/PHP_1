<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <title>Index</title>

    <style>
        body {
            background-image: url(images/slide2.jpg);
        }
        .navbar-custom
        {
            background-image: url(images/bg-menu.jpg);
        }
        li.active
        {
            background-image: url(images/bg-menu-hover.png);
        }

        .warna {
            color: yellow;
            text-align:center;
            text-shadow: 3px 7px 3px rgb(85, 85, 83);
            margin: 0;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
    </style>
</head>

<body>
<div class="container-fluid px-0 navbar-custom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg py-0">
                        <div class="container-fluit navbar-custom">
                            <div class="collapse navbar-collapse" id="navbarNav">

                                <ul class="navbar-nav ">
                                    <li class="nav-item">
                                        <a class="nav-link text-light" href="index.php">Home |</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-light" href="bmi.php">BMI |</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-light" href="bgn_datar.php">Bangun Datar</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
</div>
    </div>
        </div>
            </div>
            <br><br>

            <div class="container mt-3">
                <div class="row">


    <div class="col-12"> 
    <?php
    $nama = "Ihsan Nur Wahid";
    $alamat = "Jl. Panca Upaya Dolopo Madiun";
    $citacita = "pengusaha suksess";
    $jkel = "laki-laki";
    $status = "Singel";
    $agama = "Islam";
  

    echo "<marquee direction='up';><h1 class='warna'>Nama: $nama</h1></marquee>";
    echo "<marquee direction='left';><h1 class='warna'>Alamat: $alamat</h1></marquee>";
    echo "<marquee direction='right';><h1 class='warna'>Cita-cita: $citacita</h1></marquee>";
    echo "<marquee direction='left';><h1 class='warna'>Jenis Kelamin: $jkel</h1></marquee>";
    echo "<marquee direction='right';><h1 class='warna'>Status: $status</h1></marquee>";
    echo "<marquee direction='down';><h1 class='warna'>Agama: $agama</h1></marquee>";
  
    ?>
</div> 
    </div>
    </div>
</body>

</html>