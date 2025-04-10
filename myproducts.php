<?php
header('Access-Control-Allow-Origin: *');

include 'connection.php';
$prod=mysqli_query($conn,'SELECT * FROM products');
$array=[];

while($row=mysqli_fetch_array($prod)){

    array_push($array, ['id'=>$row['id'],'prod_name'=>$row['prod_name'],'category'=>$row['category'],'owner'=>$row['owner'],'price'=>$row['price'],'created'=>$row['created']]);
}
echo json_encode($array);
?>