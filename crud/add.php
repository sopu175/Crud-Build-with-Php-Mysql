<?php
include './../database/db.php';
$name = null;
if(isset($_POST['send'])){
    $name = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "Insert into user (username,email,password) values ('$name','$email','$password')";

    $result = mysqli_query($con,$sql);

    if($result){
        header('Refresh: 0; URL = ../index.php');
    }
    else{
        echo "error";
    }
}


