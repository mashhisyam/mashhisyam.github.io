<?php
    $namahost = "localhost";
    $username = "root";
    $password = "";

    $connect = mysqli_connect($namahost, $username, $password);

    if($connect){
        echo "Koneksi dengan MySQL berhasil";
    }
    else{
        echo "Koneksi dengan MySQL gagal ". mysqli_connect_error();
    }
?>