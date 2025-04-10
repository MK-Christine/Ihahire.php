<?php

header('Access-Control-Allow-Origin: *');
include  'connection.php';

$categ=mysqli_query($conn, "SELECT * FROM categories ");
$data=[];

while($row = mysqli_fetch_array($categ)){
    array_push($data, ['id'=>$row['id'], 'name'=>$row['name'], 'date'=>$row['created_date']]);
}

echo json_encode($data);
?>