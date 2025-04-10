
<?php

header('Access-Control-Allow-Origin: *');
include 'connection.php';
session_start();

$id = $_SESSION['id'];
$data=['id'=>$id];
if (isset($_SESSION['id'])) {
    echo json_encode($data);
}
else{
    echo 0;
}
?>