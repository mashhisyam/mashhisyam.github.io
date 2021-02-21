<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h3>Date</h3>
    <?php
    function salam($waktu, $nama)
    {
        return "Selamat $waktu, $nama";
    }

    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l") . "<br>";
    echo date("l", mktime(0, 0, 0, 9, 18, 2001));
    ?>

    <h4><?php echo salam(date("l"), "Hisyam"); ?></h4>

</body>

</html>