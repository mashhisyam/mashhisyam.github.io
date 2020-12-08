<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $rawString = "Welcome Birmingham Parents. Your replacement is a pleasure to have!";

        $malestr = str_replace("replacement", "son", $rawString);
        $femalestr = str_replace("replacement", "daughter", $rawString);

        echo "Son: ". $malestr. "<br>";
        echo "Daughter: ". $femalestr. "<br>";
    ?>
</body>
</html>