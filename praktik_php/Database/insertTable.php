<?php
    $namahost = "localhost";
    $username = "root";
    $password = "";
    $database = "praktikumdb";

    $connect = mysqli_connect($namahost, $username, $password, $database);

    if($connect){
        echo "Koneksi dengan MySQL berhasil ";
    }
    else{
        echo "Koneksi dengan MySQL gagal ". mysqli_connect_error();
    }
$sql = "INSERT INTO mahasiswa(id, nama, alamat) VALUES
        ('0001', 'George', 'Malang'),
        ('0002', 'Charlotte', 'Malang'),
        ('0003', 'Louis', 'Surabaya')";

    if(mysqli_query($connect,$sql)){
        echo "Record berhasil ditambahkan";
    }
    else{
        echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
    }
    mysqli_close($connect);
?>