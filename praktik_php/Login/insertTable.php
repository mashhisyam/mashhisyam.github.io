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
$sql = "INSERT INTO user(id, username, password) VALUES
        (2, 'admin', '123'),

    if(mysqli_query($connect,$sql)){
        echo "Record berhasil ditambahkan";
    }
    else{
        echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
?>