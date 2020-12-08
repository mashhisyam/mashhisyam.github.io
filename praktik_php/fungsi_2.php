<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Fungsi</h2>
    <?php
        function familyName($fname, $year){
            echo "$fname Refsnes. Born in $year <br>";
        }

        familyName("Hege", "1975");
        familyName("Stale", "1978");
        familyName("Kal Jim", "1983");
    ?>
</body>
</html>