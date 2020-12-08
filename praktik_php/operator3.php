<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a =true;
        $b =false;
        echo "nilai a AND b adalah"; var_dump ($a and $b);
        echo "<br> nilai a OR b adalah "; var_dump ($a or $b);
        echo "<br> niali a XOR b adalah "; var_dump ($a xor $b);
        echo "<br><br> Nilai a && b adalah "; var_dump ($a && $b);
        echo "<br> nilai a || b adalah "; var_dump($a || $b);
        echo "<br> nilai !a || b adalah "; var_dump(!$a || $b);
        
    ?>
</body>
</html>