<?php
    include("dbconnect.php");

    $user = $_POST['username'];
    $paswd = ['paswd'];
    $email = $_POST['email'];
    $nama = $_POST['nama'];

    $insert = $k->query("INSERT INTO users (username,nama,email,paswd,active) VALUES ('".$user."','".$nama."','".$email."','".$paswd."',1)");
    if($insert)
    {
       header("Location: main.php");
    }
    else
    {
        echo "insert data gagal";
    }
