<?php

    header('Access-Control-Allow-Origin: *');

    include 'connection.php';
    session_start();

    @$email=$_GET['email'];
    @$pass=$_GET['password'];


    $getUser = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$pass' ");

    if(mysqli_num_rows($getUser) > 0 ){

        $row=mysqli_fetch_array($getUser);

       

        echo json_encode(['status'=>1, 'id'=>$row['id'], 'firstname'=>$row['firstname'], 'lastname'=>$row['lastname'], 'phone'=>$row['phone'], 'sex'=>$row['sex'], 'email'=>$row['email'], 'type'=>$row['type'] ]);
    }
    else{
        echo '0';
    }
?>
