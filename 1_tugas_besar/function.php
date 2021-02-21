<?php

$connect = mysqli_connect("localhost", "id15750941_root", "2u2PezU^)u>dM]gP", "id15750941_restaurant");

function query($query)
{
    global $connect;
    $result = mysqli_query($connect, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
function insert($value)
{
    global $connect;

    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $email = htmlspecialchars($_POST["email"]);
    $date = htmlspecialchars($_POST["date"]);
    $guest = htmlspecialchars($_POST["guest"]);

    $query = "INSERT INTO reservation  (name, phone, email, date, guest) VALUES
            ('$name', '$phone', '$email', '$date', '$guest')";
    $result = mysqli_query($connect, $query);
    return mysqli_affected_rows($connect);
}

function delete($id)
{
    global $connect;

    $query = "DELETE FROM reservation WHERE id = '$id'";
    $result = mysqli_query($connect, $query);
    return mysqli_affected_rows($connect);
}
function update($data)
{
    global $connect;
    $id = $data["id"];
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $email = htmlspecialchars($_POST["email"]);
    $date = htmlspecialchars($_POST["date"]);
    $guest = htmlspecialchars($_POST["guest"]);

    $query = "UPDATE reservation SET
            name = '$name',
            phone = '$phone',
            email = '$email',
            date = '$date',
            guest = '$guest'
            WHERE id = $id";


    $result = mysqli_query($connect, $query);
    return mysqli_affected_rows($connect);
}
function search($keyword)
{
    $query = "SELECT * FROM reservation WHERE 
            name LIKE '%$keyword%' OR
            phone LIKE '%$keyword%' OR
            email LIKE '%$keyword%' OR
            date LIKE '%$keyword%' OR
            guest LIKE '%$keyword%'
            ";
    return query($query);
}
function register($data)
{
    global $connect;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($connect, $data["password"]);
    $password2 = mysqli_real_escape_string($connect, $data["password2"]);

    $result = mysqli_query($connect, "SELECT username FROM users WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert ('Username Already Exist! Please Enter Another Username');</script>";
        return false;
    }
    //konfirmasi password
    if ($password != $password2) {
        echo "<script> alert ('Please Enter The Same Password');</script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //masukkan username
// global $id;
// $id = $data(["id"]);
    mysqli_query($connect, "INSERT INTO users (username, password) VALUES ('$username', '$password')");
    return mysqli_affected_rows($connect);
}
