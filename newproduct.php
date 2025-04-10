<?php
header('Access-Control-Allow-Origin: *');

include 'connection.php';

@$prod_name = $_GET['prodname'];
@$category = $_GET['categ'];
@$owner= $_GET['own'];
@$price = $_GET['prc'];
@$description = $_GET['descrip'];

$npod=mysqli_query($conn, "INSERT INTO products value(null, '$prod_name','$categories','$owner','$price','$description',current_timestamp()	) ");


?>