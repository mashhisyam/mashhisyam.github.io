<?php
require 'function.php';
$id = $_GET["id"];
$updt = query("SELECT * FROM reservation WHERE id= $id")[0];
if (isset($_POST["submit"])) {

    if (update($_POST) > 0) {
        echo "<script>
                alert('data BERHASIL Diubah!');
                document.location.href = 'admin.php'
            </script>";
    } else {
        echo "Data GAGAL Diubah! <br>";
        echo mysqli_error($connect);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<!-- Nama : Hisyam Haryo Mahdyan NIM : 1941720186 -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="styleReservation.css">
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
    <!-- <section id="banner" style="margin: 0;"> -->
    <header>
        <nav class="navbar fixed-top navbar-expand-sm navbar-light" id="navbar-atas">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">
                    言明 Genmei
                </a>
                <ul class="nav navbar-nav justify-content-end ">
                    <li class="nav-item">
                        <a class="nav-link " href="biodata.php">Profile</a>
                    </li>
                    <li>
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">|</a>
                    </li>
                    <li class="nav-item ">
                        <a href="Tugas.html#menu" class="nav-link ">Menu</a>
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
                        <a href="tel:+6281225593609" class="nav-link ">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <nav class="navbar fixed-bottom navbar-expand-sm navbar-light " id="navbar-bawah">
        <div class="container ">
            <a href="https://www.google.com/maps/place/Gedung+Sate/@-6.9024759,107.6166213,17z/data=!3m1!4b1!4m5!3m4!1s0x2e68e64c5e8866e5:0x37be7ac9d575f7ed!8m2!3d-6.9024812!4d107.61881?hl=id " target="_blank " class="navbar-brand " style="font-size:
        10px; ">
                181 VETERAN BANDUNG, WEST JAVA 48881 INDONESIA
            </a>
            <ul class="nav navbar-nav justify-content-end ">
                <li class="nav-item ">
                    <a class="nav-link " href="mailto: hharyo7@gmail.com " target="_blank "><i class="fas fa-envelope "></i></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link disabled " href="# " tabindex="-1 " aria-disabled="true ">|</a>
                </li>
                <li class="nav-item ">
                    <a href="tel:+6281225593609 " class="nav-link "><i class="fas fa-phone "></i></a>
                </li>
                <li>
                    <a class="nav-link disabled " href="# " tabindex="-1 " aria-disabled="true ">|</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="https://instagram.com " target="_blank "><i class="fab fa-instagram "></i></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link disabled " href="# " tabindex="-1 " aria-disabled="true ">|</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="https://twitter.com " target="_blank "><i class="fab fa-twitter "></i></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container text-center" id="title">
        <div class="jumbotron-fluid ">
            <h1>Update Data</h1>
        </div>
    </div>

    <div class="jumbotron-fluid" id="dadang" style="background-color: rgba(240, 222, 210, 0.9);
                            border: 2px solid;
                            margin: 20px 100px 60px 100px;
                            font-family: 'font new';
                            border-radius: 3%;
                            box-shadow: 0 2px 20px;">
        <div class="jumbotron-fluid ">
            <form id="form" action="" method="POST">
                <div class="row " id="name">
                    <div class="col ">                       
                        <input type="hidden" class="form-control " name="id" aria-label="First name " required value="<?= $updt["id"] ?>">
                    </div>
                </div>
                <div class="row " id="name">
                    <div class="col ">
                        <label for="firstname " class="form-label ">Name</label>
                        <input type="text " class="form-control " name="name" aria-label="First name " required value="<?= $updt["name"] ?>">
                    </div>
                </div>
                <div id="contact ">
                    <div class="row ">
                        <div class="col "><label for="phone " class="form-label ">Phone </label>
                        </div>
                        <div class="col "><input name="phone" type="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required value="<?= $updt["phone"] ?>">
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col "><label for="exampleInputEmail1 " class="form-label ">Email address </label>
                        </div>
                        <div class="col "><input name="email" type="email " class="form-control " id="exampleInputEmail1 " aria-describedby="emailHelp " required value="<?= $updt["email"] ?>">
                        </div>
                    </div>
                </div>
                <div class="row " id="time ">
                    <div class="col ">
                        <label for="firstname " class="form-label ">Event Date </label>
                        <input name="date" type="datetime" class="form-control " placeholder=" " aria-label="First name " required value="<?= $updt["date"] ?>">
                    </div>
                    <div class="col ">
                        <label for="lastname " class="form-label ">Guests</label>
                        <input name="guest" type="number" class="form-control " placeholder="Person " aria-label="Last name " required value="<?= $updt["guest"] ?>">
                    </div>
                </div>
                <button type="submit" name="submit" class="btn" style="margin: 50px 29px 15px 10px; background-color:#A8735E; width: 1000px; ">Submit</button>
            </form>

        </div>
    </div>


    <div class="footer" style="background-color: #1c0d08; margin: 0;height: 85px;">
        <footer class="page-footer pt-1 " id="footer-bawah" style="color: #ffff; background-color: #0f0704;">
            <div class="footer-copyright text-center py-3" id="footer-value">Copyright &copy; 2020 Hisyam Haryo Mahdyan. All Right Reserved
            </div>
        </footer>
    </div>
</body>

</html>