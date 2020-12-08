<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $nilai = 85;
        // $nilai = 66;
        $nilai = 40;
        if($nilai >=80){
            echo "Nilai A";
        } else if ($nilai >= 70){
            echo "Nilai B";
        } else if ($nilai >= 60){
            echo "Nilai C";
        } else if ($nilai >= 50){
            echo "Nilai D";
        } else {
            echo "Nilai E";
        }
    ?>
</body>
</html>