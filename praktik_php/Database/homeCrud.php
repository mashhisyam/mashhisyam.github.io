<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
            include "koneksi.php";

            $query = "SELECT * FROM mahasiswa";
            $result = mysqli_query($connect, $query);

            if (mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td> <?php echo $row['id'] ?></td>
            <td> <?php echo $row['nama'] ?></td>
            <td> <?php echo $row['alamat'] ?></td>
            <td>
                <a href ="editForm.php?id=<?php echo $row['id']; ?>">
                Edit </a>
                <a href="hapus.php?id=<?php echo $row['id'];?>">Hapus</a>
            </td>
        </tr>
        <?php
                }
            }
            else{
                echo "0 Result";
            }
        ?>
    </table>
</body>

</html>