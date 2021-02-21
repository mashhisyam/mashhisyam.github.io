<?php
require 'function.php';

if (isset($_POST["submit"])) {

    if (insert($_POST) > 0) {
        echo "<script>
                alert('data BERHASIL ditambahkan!');
                document.location.href = 'admin.php'
            </script>";
    } else {
        echo "Data GAGAL Ditambahkan! <br>";
        echo mysqli_error($connect);
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>

<body>
    <h1>Insert</h1>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="name">Name :</label>
                <input type="text" name="name" required>
            </li>
            <li>
                <label for="phone">Phone :</label>
                <input type="text" name="phone" required>
            </li>
            <li>
                <label for="email">Email :</label>
                <input type="text" name="email" required>
            </li>
            <li>
                <label for="date">Date :</label>
                <input type="date" name="date" required>
            </li>
            <li>
                <label for="guest">Guests :</label>
                <input type="number" name="guest" required>
            </li>
            <li><button type="submit" name="submit">Add</button></li>
        </ul>
    </form>
</body>

</html>