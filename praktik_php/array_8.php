<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Sorting Array</h2>
    <?php
        $age = array (
            "joe" => "29",
            "elsa" => "27",
            "kevin" => "32",
            "nick" => "24",
            "olaf" => "9",
            "ana" => "17"
        );
        asort($age);
        foreach($age as $name => $value){
            echo "name = ". $name. ", age = ". $value. "<br>";
        }
    ?>
</body>
</html>