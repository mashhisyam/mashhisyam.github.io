<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x = 4;
        $y = 3;
        
        echo "x = $x"; echo"<br>";
        echo "y = $y";
        echo "<br><br>";
        echo "Menggunakan Operator += "; var_dump ($x += 3);
        echo "<br>Menggunakan Operator -= "; var_dump ($x-=3);
        echo "<br>Menggunakan Operator *= "; var_dump ($x *= 3);
        echo "<br>Menggunakan Operator /= "; var_dump ($x /= 3);
        echo "<br>Menggunakan Operator %= "; var_dump ($x %= 3);
        echo "<br>Menggunakan Operator .= "; var_dump ($x.=$y);
    ?>
</body>
</html>