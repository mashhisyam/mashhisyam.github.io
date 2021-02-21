<?php
require 'function.php';

if (isset($_POST["register"])) {
    if (register($_POST) > 0) {
        echo "<script>alert('Registration Success!');</script>";
        exit;
    } else {
        echo mysqli_error($connect);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styleRegistration2.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css  ">
    <script src="js/jquery.min.js"></script>
    <!-- memasukkan style -->
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
    <!-- menyisipkan Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="" id="login-box">
        <!-- <img src="img/about 2.jpg" class="icon"> -->
        <div id="isi">
            <div id="login" class="text-center">
                <h1 style="font-size: 35px;">Registration</h1>
            </div>
            <form style="font-weight: bolder;" method="POST">
                <div id="username">
                    <p>Username</p>
                    <input type="text" name="username" placeholder="Enter Usernane" style="font-size: 16px;width:650px; height: 38px">
                </div>
                <div id="password">
                    <p id="pass">Password</p>
                    <input type="password" name="password" placeholder="Enter Password" style="font-size: 16px;width:650px; height: 38px;">
                </div>
                <div id="password">
                    <p id="pass">Confirm Password</p>
                    <input type="password" name="password2" placeholder="Enter Password" style="font-size: 16px;width:650px; height: 38px;">
                </div>
                <div class="btn-group position-absolute text-center" role="group" aria-label="Basic mixed styles example" style="margin: 0 2px 0 2px; ">
                   <button type="submit" name="register" class="btn btn-md  " style="width: 310px;margin-right: 10px; background-color: #fc923c; font-weight: 700; color: white;">Sign Up</button>
                    <a href="login.php"><button type="button" class="btn btn-danger " style="width: 315px;margin-left: 10px;background-color: #fc5432; font-weight: 700;">Log In</button></a>
                </div>
                <!-- <button type=" submit " class="btn " style="margin: 30px 0 10px 0; background-color: #f4e4dc; width: 100px; ">Login</button> -->


            </form>
        </div>
    </div>
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

    <!-- <div class="footer" style="background-color: #1c0d08;height: 85px;"> -->
    <footer class="page-footer pt-1 " id="footer-bawah">
        <div class="footer-copyright text-center py-3" id="footer-value">Copyright &copy; 2020 Genmei Restaurant. All Right Reserved
        </div>
    </footer>
</body>

</html>