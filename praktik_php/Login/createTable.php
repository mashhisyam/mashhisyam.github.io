<?php
    $namahost = "localhost";
    $username = "root";
    $password = "";
    $database = "prakwebdb";

    $connect = mysqli_connect($namahost, $username, $password, $database);

    if($connect){
        echo "Koneksi dengan MySQL berhasil ";
    }
    else{
        echo "Koneksi dengan MySQL gagal ". mysqli_connect_error();
    }
    $sql = "CREATE TABLE USER(
            id INT PRIMARY KEY AUTO INCREMENT,
            username VARCHAR(50),
            password VARCHAR(50))";

    if(mysqli_query($connect,$sql)){
        echo "Table user berhasil dibuat";
    }
    else{
        echo "Table user gagal dibuat <br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
?>