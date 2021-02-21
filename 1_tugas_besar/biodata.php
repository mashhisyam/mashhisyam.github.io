
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="styleBiodata.css">
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
        <h1 class="text-center" style="margin: 50px;  font-family: 'font new'; font-weight: 600;">OUR PROFILE</h1>
        <div class="container" style="font-family: 'font new'; font-weight: 600;">
            <div class=" card kartu " style="height: 300px; ">
                <div class="row ">
                    <div class="col-md-4 ">
                        <div class="foto ">
                            <img class="rounded " src="img/formal.jpg " alt=" " style="width: 150px; margin:30px 20px 30px 50px; ">
                        </div>
                    </div>
                    <div class="col-md-8 kertas-biodata ">
                        <div class="biodata " style=" margin-top:50px ; ">
                            <table width="100% " border="0 ">
                                <tbody>
                                    <tr>
                                        <td valign="top ">
                                            <table border="0 " width="100% " style="padding-left: 2px; padding-right: 13px; ">
                                                <tbody>
                                                    <tr>
                                                        <td width="25% " valign="top " class="textt ">Name</td>
                                                        <td width="2% ">:</td>
                                                        <td style="color: rgb(118, 157, 29); font-weight:bold ">Muhammad Navis Abdillah</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="textt ">Gender</td>
                                                        <td>:</td>
                                                        <td>Male</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="textt ">Date of Birth</td>
                                                        <td>:</td>
                                                        <td>Malang, 14 April 2001</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="textt ">Faculty</td>
                                                        <td>:</td>
                                                        <td>Information Technology</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top " class="textt ">Study</td>
                                                        <td valign="top ">:</td>
                                                        <td>Informatics Engineering</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top " class="textt ">Class</td>
                                                        <td valign="top ">:</td>
                                                        <td>TI 2A</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container " style="padding-top: 20px;padding-bottom: 20px; font-family: 'font new';font-weight: 600; ">
            <div class="card kartu ">
                <div class="row ">
                    <div class="col-md-4 ">
                        <div class="foto ">
                            <img class="rounded " src="img/Hisyam.jpeg " alt=" " style="width: 150px; margin:30px 20px 30px 50px; ">
                        </div>
                    </div>
                    <div class="col-md-8 kertas-biodata ">
                        <div class="biodata " style=" margin-top:50px ; ">
                            <table width=" 100% " border="0 ">
                                <tbody>
                                    <tr>
                                        <td valign="top ">
                                            <table border="0 " width="100% " style="padding-left: 2px; padding-right: 13px; ">
                                                <tbody>
                                                    <tr>
                                                        <td width="25% " valign="top " class="textt ">Name</td>
                                                        <td width="2% ">:</td>
                                                        <td style="color: rgb(118, 157, 29); font-weight:bold ">Hisyam Haryo Mahdyan</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="textt ">Gender</td>
                                                        <td>:</td>
                                                        <td>Male</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="textt ">Date Of Birth</td>
                                                        <td>:</td>
                                                        <td>Karawang, 18 september 2001</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="textt ">Faculty</td>
                                                        <td>:</td>
                                                        <td>Information Technology</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top " class="textt ">Study</td>
                                                        <td valign="top ">:</td>
                                                        <td>Informatics Engineering</td>
                                                    </tr>
                                                    <tr>
                                                        <td valign="top " class="textt ">Class</td>
                                                        <td valign="top ">:</td>
                                                        <td>TI 2A</td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="footer" style="background-color: #1c0d08">
        <footer class="page-footer pt-1 " id="footer-bawah" style="color: #ffff; background-color: #0f0704;">
            <div class="footer-copyright text-center py-3" id="footer-value">Copyright &copy; 2020 Genmei Restaurant. All Right Reserved
            </div>
        </footer>
    </div>
</body>

</html>