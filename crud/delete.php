<?php
include './../database/db.php';



$id = $_GET['id'];

$sql = 'Delete from user where id = '. $id ;

$result = mysqli_query($con,$sql);

if($result){
    header('Refresh: 0; URL = ../index.php');
}
else{
    echo "error";
}