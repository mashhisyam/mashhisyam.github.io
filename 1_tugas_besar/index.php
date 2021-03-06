<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genmei Restaurant</title>
    <link rel="stylesheet" href="styleIndex.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
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

    <!-- jumbotron -->


    <div class="jumbotron-field ">
        <div class="banner ">
            <div class="container " style="color: antiquewhite; ">
                <!-- <img src="img/hotel_logo.jpg " class="rounded-circle " width="190 " height="190 " alt=" "> -->
                <h1 style="font-family: 'font new'; ">GENMEI RESTAURANT
                </h1>
                <h1 style="font-size:20px; ">言明</h1>
                <!-- <h6 style="margin-top: 20px; ">Lunch is from Tuesday - Friday 10:00 AM to 3:00 PM <br> Brunch - 9:30 AM to 3:00 PM Saturday and Friday</p> -->
            </div>
        </div>
    </div>

    <!-- ABOOOOUUUTTTTT -->

    <section id="about" style="margin-top: 0;">
        <div class=" jumbotron ">
            <div class="row">
                <div class="col text-center " style="margin-top: 40px; ">
                    <h3 class=" font-weight-bold " style="font-family: 'font new';color: #b75c31;line-height: 30px; "><br>About</h3>
                    <p style="font-family: 'font new'; line-height: 28px; ">SGenmei Restarurant is a restaurant and coffee bar located inside the Saskatchewan Science Centre. Surrounded by the beauty of Wascana Park, Regina’s massive 2,300-acre urban park, it is a place where the city’s hallmarks of art, history
                        and science meet forest-fresh air, wildlife conservation areas and year-round outdoor recreation.</p>
                </div>
                <div class=" col text-center " style="margin-left: 30px; ">
                    <img src="img/restaurant.jpg " class="rounded-pill " width="450px " height="320px " alt=" ">
                </div>
            </div>
        </div>
    </section>

    <!-- MENUUUUUUUUUU -->

    <section id="menu">
        <div class="jumbotron-fluid" style="background-color:  #f4eae6; border-radius: 1%;">
            <div id="isi" style="margin-top: -100px;">
                <h3 class=" font-weight-bold text-center " style="font-family: 'font new'; color: #b75c31; margin-top: 0px; "><br>Menu
                </h3>
                <div class="row text-center " style="font-family: 'font new'; margin:13px; margin-top: 30px;" id="row_menu">
                    <div class="col-md-4">
                        <div id="carouselExampleInterval1" class="carousel slide" data-ride="carousel" id="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-interval="10000">
                                    <img class="rounded-circle" src="img/appetizers.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-interval="10000">
                                    <img class="rounded-circle" src="img/appetizers2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-interval="10000">
                                    <img class="rounded-circle" src="img/appetizers3.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleInterval1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleInterval1" role="button" data-slide="next">
                                <span class=" carousel-control-next-icon " aria-hidden="true "></span>
                                <span class="sr-only ">Next</span>
                            </a>
                        </div>
                        <h3>Appetizers</h3>
                        <p>A simple dish, as a first step towards a very extraordinary sensation</p>
                    </div>

                    <div class="col-md-4 ">
                        <div id="carouselExampleInterval2" class="carousel slide" data-ride="carousel" id="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-interval="10000">
                                    <img class="rounded-circle" src="img/main_course.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-interval="10000">
                                    <img class="rounded-circle" src="img/main_course2.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-interval="10000">
                                    <img class="rounded-circle" src="img/main_course3.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleInterval2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleInterval2" role="button" data-slide="next">
                                <span class=" carousel-control-next-icon " aria-hidden="true "></span>
                                <span class="sr-only ">Next</span>
                            </a>
                        </div>

                        <h3>Main Course</h3>
                        <p>Showtime, the session where you can feel something very special</p>
                    </div>

                    <div class="col-md-4 ">
                        <div id="carouselExampleInterval3" class="carousel slide" data-ride="carousel" id="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active" data-interval="10000">
                                    <img class="rounded-circle" src="img/desert.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-interval="10000">
                                    <img class="rounded-circle" src="img/desert2.png" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item" data-interval="10000">
                                    <img class="rounded-circle" src="img/desert3.png" class="d-block w-100" alt="...">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleInterval3" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleInterval3" role="button" data-slide="next">
                                <span class=" carousel-control-next-icon " aria-hidden="true "></span>
                                <span class="sr-only ">Next</span>
                            </a>
                        </div>

                        <h3>Dessert</h3>
                        <p>Goodbye dish after tasting so many wonderful things</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="footer" style="background-color: #1c0d08">
        <footer class="page-footer pt-1 " id="footer-atas" style="color: #ffff;">
            <div class="footer-copyright text-center py-3" id="footer-value">GENMEI RESTARURANT <br><br> ✻ <br><br>Surrounded by fertile soil where daylight shines and herbs and vegetables thrive, we are free to express our creativity! At Skye, there is no limit!
            </div>
        </footer>
        <footer class="page-footer pt-1 " id="footer-bawah" style="color: #ffff; background-color: #0f0704;">
            <div class="footer-copyright text-center py-3" id="footer-value">Copyright &copy; 2020 Genmei Restaurant. All Right Reserved
            </div>
        </footer>
    </div>
</body>

</html>

</html>