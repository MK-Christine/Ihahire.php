<?php

    header('Access-Control-Allow-Origin: *');

    include 'connection.php';

    @$email=$_GET['email'];
    @$pass=$_GET['password'];


    $getUser = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$pass' ");

    if(mysqli_num_rows($getUser) > 0 ){
        echo '1';
    }
    else{
        echo '0';
    }
?>