<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $tujuan = "Bali";
        $tujuan = "Malang";

        echo "Mau Main Kemana? ".$tujuan."<br>";
        echo "<br> Pesan:  ";

        switch($tujuan){
            case "Batu":
                echo "<b>Jangan Lupa Bawa Jaket</b>";
                break;
            case "Bandung":
                echo "<b>Awas Kalau Belanja Laper Mata</b>";
                break;
            case "Bali":
                echo "<b>Pakai sunblock SFF 50</b>";
                break;
            default:
                echo "<b>Ya Udah Belajar aja</b>";
        }

    ?>
</body>
</html>