<?php
// Koneksi ke database
session_start();

if (!isset($_SESSION["login"])) {
    header("Location:login.php");
    exit;
}
require 'function.php';
$reservasi = query("SELECT * FROM reservation");

if (isset($_POST["search"])) {
    $reservasi = search($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="styleAdmin.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css  ">
    <script src="js/jquery.min.js"></script>
    <style>
        @font-face {
            font-family: "font heading";
            src: url(Libre_Baskerville/LibreBaskerville-Bold.ttf);
            font-family: "font value";
            src: url(Libre_Baskerville/LibreBaskerville-Regular.ttf);
            font-family: "font new";
            src: url(Font/Montserrat/Montserrat-Light.ttf);
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <!-- navbar atas -->
<nav class="navbar fixed-top navbar-expand-sm navbar-light" id="navbar-atas">
        <div class="container-fluid">
            <a href="index.php" class="navbar-brand" style="margin-left: 25px;">
                言明 GENMEI
            </a>
            <ul class="nav navbar-nav justify-content-end" style="margin-right: 25px;">
                <li class="nav-item">
                    <a class="nav-link" href="biodata.php">Profile</a>
                </li>
                <li>
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">|</a>
                </li>
                <li class="nav-item ">
                    <a href="menu.php" class="nav-link ">Menu</a>
                </li>
                <li>
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">|</a>
                </li>
                <li class="nav-item ">
                    <a href="reservation.php" class="nav-link ">Reservation</a>
                </li>
                <li>
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">|</a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link ">Logout</a>
                </li>
            </ul>
        </div>
    </nav>


    <!-- navbar bawah -->
    <nav class="navbar fixed-bottom navbar-expand-sm navbar-light" id="navbar-bawah">
        <div class="container">
            <a href="https://www.google.com/maps/place/Gedung+Sate/@-6.9024759,107.6166213,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e64c5e8866e5:0x37be7ac9d575f7ed!8m2!3d-6.9024812!4d107.61881?hl=id" target="_blank" class="navbar-brand" style="font-size: 11px;">
                181 VETERAN BANDUNG, WEST JAVA 48881 INDONESIA
            </a>
            <ul class="nav navbar-nav justify-content-end ">
                <li class="nav-item">
                    <a class="nav-link " href="mailto: hharyo7@gmail.com" target="_blank"><i class="fas fa-envelope"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">|</a>
                </li>
                <li class="nav-item ">
                    <a href="tel:+6281225593609" class="nav-link"><i class="fas fa-phone"></i></a>
                </li>
                <li>
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">|</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="https://instagram.com" target="_blank"><i class="fab fa-instagram "></i></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link disabled " href="# " tabindex="-1 " aria-disabled="true ">|</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="https://twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <section>
        <h1 class="text-center" id="title">Reservation List </h1>
    </section>

    <form id="search" action="" method="POST">
        <input size="30" type="text" name="keyword" autofocus placeholder="Insert Searching Keyword..." autocomplete="off">
        <button id="button_search" class="btn" type="submit" name="search">Search</button>
    </form>

    <br>
    <table id="table" class="table-bordered" border="1" cellpadding="10" cellspacing="0">
        <tr class="text-center">
            <th>no</th>
            <th>id</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Date</th>
            <th>Guest</th>
            <th>Properties</th>
        </tr>
        <?php $i = 1;
        foreach ($reservasi as $row) : ?>
            <?php if ($i % 2 == 0) : ?>
                <tr>
                <?php else : ?>
                <tr class="warna-baris">
                <?php endif ?>
                <td><?= $i; ?></td>
                <td><?= $row["id"]; ?></td>
                <td><?= $row["name"]; ?></td>
                <td><?= $row["phone"]; ?></td>
                <td><?= $row["email"]; ?></td>
                <td><?= $row["date"]; ?></td>
                <td class="text-center"><?= $row["guest"]; ?></td>
                <td>
                    <div id="button">
                        <a href="delete.php?id=<?= $row["id"]; ?>" onclick="return confirm('Deleted Data Cannot be Recovered')"><button id="button_delete" class="btn btn-light" style="color: white;">Delete</button></a> |
                        <a href="update.php?id=<?= $row["id"]; ?>" onclick="return confirm('Update Data?')"><button id="button_edit" class="btn btn-light" style="color: white;">Edit</button></a>
                    </div>
                </td>
                </tr>
            <?php $i++;
        endforeach ?>
    </table>
    <a href="reservation.php"><button id="button_insert" class="btn btn-success" type="button">+ Insert Data</button></a>
    <a href="reservation.php"><br>Back</a>
</body>

</html>